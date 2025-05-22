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
use App\Models\Products;
use App\Models\ShippingMethods;
use Stripe\Checkout\Session;
use Stripe\Stripe;

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
    public $cart_items;

    // Price
    public $grand_sub_price_total = 0;
    public $grand_price_total = 0;
    public $grand_discount_total = 0;
    public $grand_tax_total = 0;
    public $shipping_charge = 0;

    public function wrapCart(){

        $cart_item = CartManagement::getCartItemsFromCookie();

        foreach ($cart_item as $key => $cart ) {

            $product = Products::where( 'products.id', $cart['product_id'] )
                        ->leftJoin( 'offers', 'offers.id', 'products.offers_id' )
                        ->leftJoin( 'taxes', 'taxes.id', 'products.taxes_id' )
                        ->first(['products.id',
                                'products.product_name',
                                'products.product_images',
                                'products.product_sales_price',
                                'products.product_discount_price',
                                'products.product_tax_price',
                                'products.product_qty_in_stock',
                                'taxes.tax_percent',
                                'offers.offer_discount_percent',
                                'offers.offer_status',
                                'offers.offer_end_date',
                            ]);

            if( $product ){

                $expire = date('Y-m-d', strtotime('0 days'));
                $price = $product->product_sales_price;
                $discount = $product->product_discount_price;
                $tax = $product->product_tax_price;

                // Offer end with status check
                if( $product->offer_status == 'inactive' ){
                    $discount = 0;
                    $tax = floatval($price)*floatval($product->tax_percent)/100;
                }

                // Offer End with date
                if (strtotime( $product->offer_end_date ) <= strtotime($expire)) {
                    $discount = 0;
                    $tax = floatval($price)*floatval($product->tax_percent)/100;
                }

                // Calc sales price
                $sales_price = floatval($price)-floatval($discount);
                $qty = $cart['product_qty'];

                $cart_item[$key]['product_qty'] = floatval( $qty );
                $cart_item[$key]['product_price'] = floatval( $sales_price );
                $cart_item[$key]['product_discount'] = floatval( $discount );
                $cart_item[$key]['product_tax'] = floatval($tax);

                $cart_item[$key]['product_sub_total_amount'] = floatval($qty)*floatval($sales_price);
                $cart_item[$key]['product_total_amount'] = floatval($qty)*floatval($sales_price)+floatval($tax)*floatval($qty);
                $cart_item[$key]['product_total_tax'] = floatval($tax)*floatval($qty);
                $cart_item[$key]['product_total_discount'] = floatval( $discount )*floatval($qty);

            }
        }

        CartManagement::addCartItemsToCookie( $cart_item );

        // $this->cart_items = CartManagement::getCartItemsFromCookie();
        $this->cart_items = $cart_item;
        $this->grand_sub_price_total = CartManagement::calculateGrandSubTotal( $cart_item );
        $this->grand_price_total = CartManagement::calculateGrandTotal( $cart_item );
        $this->grand_discount_total = CartManagement::calculateGrandDiscountTotal( $cart_item );
        $this->grand_tax_total = CartManagement::calculateGrandTaxTotal( $cart_item );

    }

    public function setAllCharges(){

        $grant_amount = $this->grand_price_total;

        if( $grant_amount > 200 ){

            $shipping_methods_charge = ShippingMethods::where( 'shipping_condition','OVER_200' )->first('shipping_charge');
            $this->shipping_charge = $shipping_methods_charge['shipping_charge'];
            $this->grand_price_total = intval( $grant_amount )+ intval( $shipping_methods_charge['shipping_charge'] );

        }

        $this->grand_price_total = $grant_amount;

    }

    public function mount(){

        // car recheck the offer price and all
        $this->wrapCart();
        $this->setAllCharges();

        $this->currency = env('APP_CURRENCY');

        if( Session()->get('users_session') === null ){
            return redirect('/gust/login');
        }

        // Generate Year
        $this->generate_year();

        $this->current_session = Session()->get('users_session');
        $this->full_name = $this->current_session['customer_name'];

        $this->cart_items = CartManagement::getCartItemsFromCookie();


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

            // $this->validate([
            //     'card_name' => 'required',
            //     'card_number' => 'required',
            //     'card_year' => 'required',
            //     'card_month' => 'required',
            //     'card_cvv' => 'required',
            // ]);

            // dd( 'Decrease Stock count' );

            // Product Line Item

            // $line_items = array();

            // $stripe = new \Stripe\StripeClient( env('STRIPE_SECRET') );

            // $payment_intent = $stripe->paymentIntents->create([
            //     'amount' => 2,
            //     'currency' => 'usd',
            //     'description' => 'My first payment',
            // ]);

            // $payment_intent->confirm([
            //     'payment_method' => 'pm_card_mastercard',
            // ]);


            // $this->generateOrder( 'complete' );


        } else if( $this->payment_option === 'COD' ) {

            // Cash On Delivery
            // $this->generateOrder( 'pending' );

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

        // Decrease Stock Count
        // +++++++++++++++++++++++++++++++++++++++++++++++++++++++

        // Order Placed
        $order = new Orders();
        $order->order_number = $order_number;
        $order->customers_id = $customers_id;
        $order->payment_types_id = $payment_types_id->id;
        $order->addresses_id = $addresses_id;
        $order->grand_total = $this->grand_price_total;
        $order->order_status = $order_status;
        $order->order_date = $order_date;
        $order->save();

        // Order Item
        foreach ( $this->cart_items  as $key => $product ) {
            $order_item = new OrderItems();
            $order_item->orders_id = $order->id;
            $order_item->products_id = $product['product_id'];
            $order_item->order_qty = $product['product_qty'];
            $order_item->order_price = $product['product_price'];
            $order_item->order_price_total = $product['product_total_amount'];
            $order_item->order_discount_percent = 0;
            $order_item->order_tax_percent = 0;
            $order_item->order_shipping_charge = 0;
            $order_item->save();
        }

        // Transaction
        $payments_transactions = new PaymentsTransaction();
        $payments_transactions->transaction_id = 'TN-'. random_int(10000, 99999) . time();
        $payments_transactions->orders_id = $order->id;
        $payments_transactions->payment_types_id = $payment_types_id['id'];
        $payments_transactions->transaction_amount = $this->grand_price_total;
        $payments_transactions->transaction_date = $order_date;
        $payments_transactions->payment_status = $pay_status;
        $payments_transactions->save();

        // Clear Cart
        CartManagement::clearCartItems();

        // Redirect to home
        redirect('/');

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
            'countries' => $countries,

            'grand_sub_price_total' => $this->grand_sub_price_total,
            'grand_price_total' => $this->grand_price_total,
            'grand_discount_total' => $this->grand_discount_total,
            'grand_tax_total' => $this->grand_tax_total,
            'shipping_charge' => $this->shipping_charge,

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
