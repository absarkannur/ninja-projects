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

        if( $existing_item !== null ){

            $cart_items[$existing_item]['product_qty'] = $cart_items[$existing_item]['product_qty'] + $qty;
            $cart_items[$existing_item]['product_total_amount'] = $cart_items[$existing_item]['product_qty'] * $cart_items[$existing_item]['product_sales_price'];


        } else {

            $product = Products::where( 'id', $product_id )->first(['id', 'product_name', 'product_sales_price', 'product_images' ]);

            if( $product ){
                $cart_items[] = [
                    'product_id' => $product->id,
                    'product_name' => $product->product_name,
                    'product_images' => $product->product_images,
                    'product_qty' => $qty,
                    'product_sales_price' => $product->product_sales_price,
                    'product_total_amount' => $qty * $product->product_sales_price,
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
        Cookie::queue( 'cart_items', json_encode( $cart_items ), 60*24*30 );
    }

    // Clear cart items from Cookie
    static public function clearCartItems() {
        Cookie::queue( Cookie::forget('cart_items') );
    }

    // Get all cart items from Cookie
    static public function getCartItemsFromCookie(){

        $cart_items = json_decode( Cookie::get('cart_items'), true);

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
                $cart_items[$key]['product_total_amount'] = $cart_items[$key]['product_qty'] * $cart_items[$key]['product_sales_price'];
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
                    $cart_items[$key]['product_total_amount'] = $cart_items[$key]['product_qty'] * $cart_items[$key]['product_sales_price'];
                }
            }
        }

        self::addCartItemsToCookie( $cart_items );
        return $cart_items;

    }

    // Calculate grand total
    static public function calculateGrandTotal( $items ){
        return array_sum( array_column( $items, 'product_total_amount' ) );
    }


};