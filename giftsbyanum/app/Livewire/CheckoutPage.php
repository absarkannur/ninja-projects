<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

use App\Helpers\CartManagement;
use App\Models\Addresses;
use App\Models\OrderItems;
use App\Models\Orders;
use App\Models\PaymentInformations;
use App\Models\PaymentsTransaction;
use App\Models\PaymentTypes;
use App\Models\Countries;

class CheckoutPage extends Component
{

    #[Title('Gifts By Anum - Checkout')]

    public $current_session;
    public $payment_option = 'COD';
    public $payment_card;

    // Options
    public $option_address = false;

    
    // New Address
    public $full_name = '';
    public $address_1 = '';
    public $address_2 = '';
    public $country = '';
    public $city = '';
    public $postal_code = '';
    public $landmark = '';
    public $phone_number = '';


    // Check out Data
    public $shipping_address;

    public $card_name = '';
    public $card_number = '';
    public $card_year = '';
    public $card_month = '';
    public $card_cvv = '';

    
    public function mount(){

        $this->currency = env('APP_CURRENCY');

        if( Session()->get('users_session') === null ){
            return redirect('/gust/login');
        }

        $this->current_session = Session()->get('users_session');
        $this->cart_items = CartManagement::getCartItemsFromCookie();
        $this->grand_total = CartManagement::calculateGrandTotal( $this->cart_items );

        if( count( $this->cart_items ) === 0 ){
            return redirect('/');
        }
        
    }

    public function newAddress(){
        $this->option_address = true;
    }

    public function fn_checkout(){

        dd( $this->shipping_address );

    }

    public function fn_saveAddress(){

        $this->validate([
            'full_name' => 'required',
            'address_1' => 'required',
            'country' => 'required',
            'city' => 'required',
            'phone_number' => 'required',
        ]);

        $address = new Addresses();

        $address->customers_id = $this->current_session['id'];
        $address->countries_id = $this->country;
        $address->full_name = $this->full_name;
        $address->address_line_1 = $this->address_1;
        $address->address_line_2 = $this->address_2;
        $address->city = $this->city;
        $address->postal_code = $this->postal_code;
        $address->landmark = $this->landmark;
        $address->phone_number = $this->phone_number;

        $address->save();

        $this->option_address = false;
        $address->full_name = '';
        $address->address_line_1 = '';
        $address->address_line_2 = '';
        $address->city = '';
        $address->postal_code = '';
        $address->landmark = '';
        $address->phone_number = '';

    }

    public function render()
    {

        // Get all counties
        $countries = Countries::where('active',1)->get();

        $address = Addresses::select( 'addresses.*', 'countries.country_name' )
            ->where( 'customers_id', '=' , $this->current_session['id'] )
            ->leftJoin( 'countries', 'countries.id' , 'addresses.countries_id' )
            ->orderBy('id', 'DESC')
            ->get();

        $payment_methods = PaymentTypes::where( 'payment_type_visible', 1 )->get();

        return view('livewire.checkout-page', [
            'current_session' => $this->current_session,
            'payment_methods' => $payment_methods,
            'address' => $address,
            'countries' => $countries
        ]);
    }
}
