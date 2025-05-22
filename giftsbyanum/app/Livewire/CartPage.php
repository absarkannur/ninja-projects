<?php

namespace App\Livewire;

use App\Helpers\CartManagement;
use App\Models\Products;
use Livewire\Attributes\Title;
use Livewire\Component;


class CartPage extends Component
{

    #[Title('Gifts By Anum - Cart')]

    protected $cart_items = [];
    protected $grand_sub_total = 0;
    protected $grand_total = 0;
    protected $grand_tax_total = 0;
    protected $grand_discount_total = 0;

    public $currency;

    public function mount(){

        $this->currency = env('APP_CURRENCY');

        $this->wrapCart();

    }

    public function removeCart( $product_id ){
        $this->cart_items = CartManagement::removeCartItem( $product_id );
        $this->grand_sub_total = CartManagement::calculateGrandSubTotal( $this->cart_items );
        $this->grand_total = CartManagement::calculateGrandTotal( $this->cart_items );
        $this->grand_tax_total = CartManagement::calculateGrandTaxTotal( $this->cart_items );
        $this->grand_discount_total = CartManagement::calculateGrandDiscountTotal( $this->cart_items );
        $this->dispatch( 'update-cart');
    }

    public function incrementCart( $product_id ){
        $this->cart_items = CartManagement::incrementQuantityToCartItem( $product_id );
        $this->grand_sub_total = CartManagement::calculateGrandSubTotal( $this->cart_items );
        $this->grand_total = CartManagement::calculateGrandTotal( $this->cart_items );
        $this->grand_tax_total = CartManagement::calculateGrandTaxTotal( $this->cart_items );
        $this->grand_discount_total = CartManagement::calculateGrandDiscountTotal( $this->cart_items );
        $this->dispatch( 'update-cart');
    }

    public function decrementCart( $product_id ){
        $this->cart_items = CartManagement::decrementQuantityToCartItem( $product_id );
        $this->grand_sub_total = CartManagement::calculateGrandSubTotal( $this->cart_items );
        $this->grand_total = CartManagement::calculateGrandTotal( $this->cart_items );
        $this->grand_tax_total = CartManagement::calculateGrandTaxTotal( $this->cart_items );
        $this->grand_discount_total = CartManagement::calculateGrandDiscountTotal( $this->cart_items );
        $this->dispatch( 'update-cart');
    }

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

        $this->cart_items = $cart_item;
        $this->grand_sub_total = CartManagement::calculateGrandSubTotal( $cart_item );
        $this->grand_total = CartManagement::calculateGrandTotal( $cart_item );
        $this->grand_tax_total = CartManagement::calculateGrandTaxTotal( $cart_item );
        $this->grand_discount_total = CartManagement::calculateGrandDiscountTotal( $cart_item );

    }

    public function render()
    {
        return view('livewire.cart-page', [
            'cart_items' => $this->cart_items,
            'grand_sub_total' => $this->grand_sub_total,
            'grand_total' => $this->grand_total,
            'grand_tax_total' => $this->grand_tax_total,
            'grand_discount_total' => $this->grand_discount_total
        ]);
    }
}
