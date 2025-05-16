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

    public $currency;
    public $current_session;
    public $payment_option = 'COD';
    public $payment_card;
    public $card_years = array();

    // Options
    public $option_address = false;
    public $save_payment_details;

    
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

    public $card_id = '';
    public $card_name = '';
    public $card_number = '';
    public $card_year = '';
    public $card_month = '';
    public $card_cvv = '';
    public $grand_total = 0;

    
    public function mount(){

        $this->currency = env('APP_CURRENCY');

        if( Session()->get('users_session') === null ){
            return redirect('/gust/login');
        }

        // Generate Year
        $this->generate_year();

        $this->current_session = Session()->get('users_session');
        $this->full_name = $this->current_session['customer_name'];
        

        $this->cart_items = CartManagement::getCartItemsFromCookie();
        $this->grand_total = CartManagement::calculateGrandTotal( $this->cart_items );

        $pay_info = PaymentInformations::where('customers_id', $this->current_session['id'] )->first();

        if( $pay_info ){
            $this->card_id = $pay_info->id;
            $this->card_name = $pay_info->card_holder_name;
            $this->card_number = $pay_info->card_no ;
            $this->card_year = $pay_info->expiry_year ;
            $this->card_month = $pay_info->expiry_month ;
        }

        if( count( $this->cart_items ) === 0 ){
            return redirect('/');
        }


    }

    public function newAddress(){
        $this->option_address = true;
    }

    public function fn_checkout(){

        $this->validate([
            'shipping_address' => 'required'
        ]);

        if( $this->payment_option === 'CCD' ){

            $this->validate([
                'card_name' => 'required',
                'card_number' => 'required',
                'card_year' => 'required',
                'card_month' => 'required',
                'card_cvv' => 'required',
            ]);

            $this->generateOrder( 'complete' );


        } else if( $this->payment_option === 'COD' ) {
            
            // Cash On Delivery
            $this->generateOrder( 'pending' );

        }
        
        
    }
    
    public function generateOrder( $pay_status = 'pending' ) {
        
        $order_number = $this->generateOrderNumber();
        $customers_id = $this->current_session['id'];
        $payment_types_id = PaymentTypes::where('payment_type_short', $this->payment_option)->first('id');
        $addresses_id = $this->shipping_address;
        $order_status = 'new';
        $order_date = date('Y-m-d');

        // save_payment_details If True
        $save_payment_details = $this->save_payment_details;

        if( $save_payment_details == true ) {

            $card_name = $this->card_name;
            $card_number = $this->card_number;
            $card_year = $this->card_year;
            $card_month = $this->card_month;
            $card_cvv = $this->card_cvv;

            if( $this->card_id !== '' ){
                $pay_info = PaymentInformations::find( $this->card_id );
            } else {
                $pay_info = new PaymentInformations();
            }

            $pay_info->customers_id = $customers_id;
            $pay_info->payment_types_id = $payment_types_id['id'];
            $pay_info->card_holder_name = $card_name;
            $pay_info->card_no = $card_number;
            $pay_info->card_type = $this->detectCardType( $card_number );
            $pay_info->expiry_month = $card_month;
            $pay_info->expiry_year = $card_year;

            if( $this->card_id !== '' ){
                $pay_info->update();
            } else {
                $pay_info->save();
            }

        }

        dd('Card Saved ' .  $save_payment_details );

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

    public function render() {

        // Clear card details
        if( $this->payment_option === 'COD' ){
            $this->save_payment_details = false;
        }

        // Get all counties
        $countries = Countries::where('active',1)->get();

        $address = Addresses::select( 'addresses.*', 'countries.country_name' )
            ->where( 'customers_id', '=' , $this->current_session['id'] )
            ->leftJoin( 'countries', 'countries.id' , 'addresses.countries_id' )
            ->orderBy('id', 'DESC')
            ->get();

        $payment_methods = PaymentTypes::where( 'payment_type_visible', 1 )->get();

        // Payment Info

        return view('livewire.checkout-page', [
            'current_session' => $this->current_session,
            'payment_methods' => $payment_methods,
            'address' => $address,
            'countries' => $countries
        ]);
    }

    private function generate_year(){
        $this->card_years = array(
            '2020',
            '2021',
            '2022',
            '2023',
            '2024',
            '2025',
            '2026',
            '2027',
            '2028',
            '2029',
            '2030',
            '2031',
            '2032',
            '2033',
            '2034',
            '2035',
        );

    }

    
    public function generateOrderNumber(){

        $lastOrder = Orders::latest()->first();

        if( $lastOrder ) {

            $split = explode( '-', $lastOrder['order_number'] );
            $number =  $split[1]+1;
            $number = sprintf('%06d',$number);
            return 'ORD-'. $number;

        } else{
            return $order_number = 'ORD-000001';
        }

    }

    public function detectCardType($number) {

        $mastercard_regex = '(5[1-5]\d{14})';
        $visa_regex = '(4\d{12}(?:\d{3})?)';
        $maestro_regex = '((?:5020|5038|6304|6579|6761)\d{12}(?:\d\d)?)';
        $amex_regex = '(3[47]\d{13})';

        $number = preg_replace('/\D/', '', $number);

        if ( preg_match( $visa_regex, $number )) {
            return 'VISA';
        } else if ( preg_match( $mastercard_regex, $number )) {
            return 'MASTER';
        } else if ( preg_match( $maestro_regex, $number )) {
            return 'MAESTRO';
        } else if ( preg_match( $amex_regex, $number )) {
            return 'AMEX';
        } else {
            return 'UNKNOW';
        }
        
    }

}
