<?php

namespace App\Livewire;

use App\Helpers\CartManagement;
use App\Models\Addresses;
use App\Models\OrderItems;
use App\Models\Orders;
use App\Models\PaymentInformations;
use App\Models\PaymentsTransaction;
use App\Models\PaymentTypes;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Title;
use Livewire\Attributes\Url;
use Livewire\Component;

use Illuminate\Support\Facades\Http;

class PaymentPage extends Component
{

    #[Title('Payments | MyCart')]

    public $cart_items;
    public $grand_total;
    public $current_session;
    public $currency;

    // Form Fields
    public $payment_option = 'COD';
    public $shipping_address;
    public $payment_card;


    public function mount() {

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

    public function removeCart( $product_id ){
        $this->cart_items = CartManagement::removeCartItem( $product_id );
        $this->grand_total = CartManagement::calculateGrandTotal( $this->cart_items );
        $this->dispatch( 'update-cart');
    }

    public function incrementCart( $product_id ){
        $this->cart_items = CartManagement::incrementQuantityToCartItem( $product_id );
        $this->grand_total = CartManagement::calculateGrandTotal( $this->cart_items );
        $this->dispatch( 'update-cart');
    }

    public function decrementCart( $product_id ){
        $this->cart_items = CartManagement::decrementQuantityToCartItem( $product_id );
        $this->grand_total = CartManagement::calculateGrandTotal( $this->cart_items );
        $this->dispatch( 'update-cart');
    }

    public function cardCheck( $card_id ) {
        $this->payment_card = $card_id;
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

    public function fn_checkout(){

        $this->validate([
            'payment_option' => 'required',
            'shipping_address' => 'required',
        ]);

        // ------- Generate Order ------- //
        $customer_name = $this->current_session['customer_name'];
        $customer_email = $this->current_session['customer_email'];

        if( $this->payment_option === 'CAD') {

            $card = PaymentInformations::where( 'id', $this->payment_card )->first();

            $url = 'http://localhost:5100/api/v1/payment/card';

            $response = Http::post( $url, [
                "app_name" => "MyCart",
                "service" => $customer_name,
                "customer_email" => $customer_email,
                "card_type  " => "VISA",
                "card_holder_name" => $card['card_holder_name'],
                "card_number" => $card['card_no'],
                "expiryMonth" => $card['expiry_month'],
                "expiryYear" => $card['expiry_year'],
                "cvv" => "123",
                "amount" => $this->grand_total,
                "currency" => "AED"
            ]);

            if( $response->json() ){

                $res = $response->json();

                if( $res['success'] == true ) {

                    $this->generateOrder( 'complete' );

                } else {
                    dd('Error');
                }

            }

        } else if( $this->payment_option === 'COD' ) {

            $this->generateOrder( 'pending' );

        }

    }

    public function generateOrder( $pay_status = 'pending' ) {

        // ------- Params ------- //
        $order_number = $this->generateOrderNumber();
        $customers_id = $this->current_session['id'];
        $payment_types_id = PaymentTypes::where('payment_type_short', $this->payment_option)->first('id');
        $addresses_id = $this->shipping_address;
        $order_status = 'new';
        $order_date = date('Y-m-d');
        // ------- Params ------- //

        // Order Placed
        $order = new Orders();
        $order->order_number = $order_number;
        $order->customers_id = $customers_id;
        $order->payment_types_id = $payment_types_id->id;
        $order->addresses_id = intval( $addresses_id );
        $order->order_status = $order_status;
        $order->order_date = $order_date;

        $order->save();

        // Transaction
        $payments_transactions = new PaymentsTransaction();

        $payments_transactions->orders_id = $order->id;
        $payments_transactions->payment_types_id = $payment_types_id->id;
        $payments_transactions->payment_informations_id = $this->payment_card;
        $payments_transactions->payment_status = $pay_status;

        $payments_transactions->save();

        // Order Item Placed

        foreach ( $this->cart_items  as $key => $item) {

            $order_item = new OrderItems();
            $order_item->orders_id = $order->id;
            $order_item->products_id = $item['product_id'];
            $order_item->order_qty = $item['product_qty'];
            $order_item->order_price = $item['product_sales_price'];
            $order_item->order_discount_percent = 0;
            $order_item->order_tax_percent = 0;
            $order_item->order_shipping_charge = 0;

            $order_item->save();

        }

    }

    public function render() {

        $address = Addresses::select( 'addresses.*', 'countries.country_name' )
                    ->where( 'customers_id', '=' , $this->current_session['id'] )
                    ->leftJoin( 'countries', 'countries.id' , 'addresses.countries_id' )
                    ->get();

        $payment_methods = PaymentTypes::where( 'payment_type_visible', 1 )->get();
        $payment_info = PaymentInformations::where( 'customers_id', '=' , $this->current_session['id'] )->get();

        // dd( $payment_info );

        return view('livewire.payment-page', [
            'current_session' => $this->current_session,
            'cart_items' => $this->cart_items,
            'grand_total' => $this->grand_total,
            'payment_methods' => $payment_methods,
            'payment_info' => $payment_info,
            'address' => $address
        ]);
    }
}
