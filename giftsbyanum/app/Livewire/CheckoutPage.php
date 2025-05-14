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

class CheckoutPage extends Component
{


    #[Title('Gifts By Anum - Checkout')]

    public $current_session;

    public $payment_option = 'COD';
    public $shipping_address;
    public $payment_card;

    public $item;

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

    public function fn_checkout(){

    }

    public function render()
    {

        $address = Addresses::select( 'addresses.*', 'countries.country_name' )
            ->where( 'customers_id', '=' , $this->current_session['id'] )
            ->leftJoin( 'countries', 'countries.id' , 'addresses.countries_id' )
            ->get();

        $payment_methods = PaymentTypes::where( 'payment_type_visible', 1 )->get();

        return view('livewire.checkout-page', [
            'current_session' => $this->current_session,
            'payment_methods' => $payment_methods,
            'address' => $address
        ]);
    }
}
