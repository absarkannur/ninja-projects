<?php

namespace App\Livewire;

use App\Helpers\CartManagement;
use Livewire\Attributes\Title;
use Livewire\Component;

class PaymentPage extends Component
{

    #[Title('Payments | MyCart')]

    public $cart_items;
    public $grand_total;

    public function mount() {
        $this->cart_items = CartManagement::getCartItemsFromCookie();
        $this->grand_total = CartManagement::calculateGrandTotal( $this->cart_items );
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

    public function render()
    {
        return view('livewire.payment-page', [
            'cart_items' => $this->cart_items,
            'grand_total' => $this->grand_total
        ]);
    }
}
