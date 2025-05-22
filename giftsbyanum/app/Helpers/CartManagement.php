<?php

namespace App\Helpers;

use App\Models\Products;
use Illuminate\Support\Facades\Cookie;

class CartManagement {

    // Add item to cart
    static public function addItemToCart( $product_id, $qty ){

        $cart_items = self::getCartItemsFromCookie();

        $existing_item = null;

        foreach ($cart_items as $key => $item) {
            if( $item['product_id'] == $product_id ){
                $existing_item = $key;
                break;
            }
        }

        // Check Product stock
        $stock_check = Products::select('product_qty_in_stock')->where( 'products.id', $product_id )->first();

        if( $existing_item !== null ){

            if( $cart_items[$existing_item]['product_qty'] < $stock_check['product_qty_in_stock']){

                $cart_items[$existing_item]['product_qty'] = $cart_items[$existing_item]['product_qty'] + $qty;
                $cart_items[$existing_item]['product_sub_total_amount'] = $cart_items[$existing_item]['product_qty'] * $cart_items[$existing_item]['product_price'];
                $cart_items[$existing_item]['product_total_amount'] = $cart_items[$existing_item]['product_qty'] * $cart_items[$existing_item]['product_price']+$cart_items[$existing_item]['product_tax'] * $cart_items[$existing_item]['product_qty'];
                $cart_items[$existing_item]['product_total_tax'] =  $cart_items[$existing_item]['product_tax'] * $cart_items[$existing_item]['product_qty'];
                $cart_items[$existing_item]['product_total_discount'] =  $cart_items[$existing_item]['product_discount'] * $cart_items[$existing_item]['product_qty'];

            } else {
                toastr()->error('Stock Limit exceeded');
                return false;
            }

        } else {

            $product = Products::where( 'products.id', $product_id )
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

                $cart_items[] = [
                    'product_id' => $product->id,
                    'product_name' => $product->product_name,
                    'product_images' => $product->product_images,

                    'product_qty' => $qty,
                    'product_price' => floatval( $sales_price ),
                    'product_discount' => floatval( $discount ),
                    'product_tax' => floatval($tax),

                    'product_sub_total_amount' => floatval($qty)*floatval($sales_price),
                    'product_total_amount' => floatval($qty)*floatval($sales_price)+floatval($tax)*floatval($qty),
                    'product_total_tax' => floatval($tax)*floatval($qty),
                    'product_total_discount' => floatval( $discount )*floatval($qty),

                    'options' => array(
                        'product_qty_in_stock' => $product->product_qty_in_stock,
                        'offer_discount_percent' => $product->offer_discount_percent,
                    )
                ];

            }

        }

        self::addCartItemsToCookie( $cart_items );
        return count( $cart_items );

    }

    // Remove item from cart
    static public function removeCartItem( $product_id ){
        $cart_items = self::getCartItemsFromCookie();

        foreach ($cart_items as $key => $item) {
            if( $item['product_id'] == $product_id ){
                unset( $cart_items[$key]);
            }
        }

        self::addCartItemsToCookie( $cart_items );

        return $cart_items;

    }

    // Add cart items to Cookie
    static public function addCartItemsToCookie( $cart_items ) {
        Cookie::queue( 'gfanum', json_encode( $cart_items ), 60*24*1 ); // One Day
    }

    // Clear cart items from Cookie
    static public function clearCartItems() {
        Cookie::queue( Cookie::forget('gfanum') );
    }

    // Get all cart items from Cookie
    static public function getCartItemsFromCookie(){

        $cart_items = json_decode( Cookie::get('gfanum'), true);

        if( !$cart_items ) {
            $cart_items = [];
        }

        return $cart_items;

    }

    // increment Item Quantity
    static public function incrementQuantityToCartItem( $product_id ){
        $cart_items = self::getCartItemsFromCookie();

        foreach ($cart_items as $key => $item) {
            if( $item['product_id'] == $product_id ){

                $cart_items[$key]['product_qty']++;

                $cart_items[$key]['product_sub_total_amount'] = $cart_items[$key]['product_qty'] * $cart_items[$key]['product_price'];
                $cart_items[$key]['product_total_amount'] = $cart_items[$key]['product_qty'] * $cart_items[$key]['product_price']+$cart_items[$key]['product_tax'] * $cart_items[$key]['product_qty'];
                $cart_items[$key]['product_total_tax'] =  $cart_items[$key]['product_tax'] * $cart_items[$key]['product_qty'];
                $cart_items[$key]['product_total_discount'] =  $cart_items[$key]['product_discount'] * $cart_items[$key]['product_qty'];

            }
        }

        self::addCartItemsToCookie( $cart_items );
        return $cart_items;

    }

    // Decrement Item Quantity
    static public function decrementQuantityToCartItem( $product_id ){
        $cart_items = self::getCartItemsFromCookie();

        foreach ($cart_items as $key => $item) {
            if( $item['product_id'] == $product_id ){
                if( $cart_items[$key]['product_qty'] > 1 ){

                    $cart_items[$key]['product_qty']--;

                    $cart_items[$key]['product_sub_total_amount'] = $cart_items[$key]['product_qty'] * $cart_items[$key]['product_price'];
                    $cart_items[$key]['product_total_amount'] = $cart_items[$key]['product_qty'] * $cart_items[$key]['product_price']+$cart_items[$key]['product_tax'] * $cart_items[$key]['product_qty'];
                    $cart_items[$key]['product_total_tax'] =  $cart_items[$key]['product_tax'] * $cart_items[$key]['product_qty'];
                    $cart_items[$key]['product_total_discount'] =  $cart_items[$key]['product_discount'] * $cart_items[$key]['product_qty'];

                }
            }
        }

        self::addCartItemsToCookie( $cart_items );
        return $cart_items;

    }

    // Calculate grand total
    static public function calculateGrandSubTotal( $items ){
        return array_sum( array_column( $items, 'product_sub_total_amount' ) );
    }

    // Calculate grand total
    static public function calculateGrandTotal( $items ){
        return array_sum( array_column( $items, 'product_total_amount' ) );
    }

    // Calculate grand tax
    static public function calculateGrandTaxTotal( $items ){
        return array_sum( array_column( $items, 'product_total_tax' ) );
    }

    // Calculate grand tax
    static public function calculateGrandDiscountTotal( $items ){
        return array_sum( array_column( $items, 'product_total_discount' ) );
    }


};
