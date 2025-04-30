<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;
use App\Helpers\CartManagement;

class NavBar extends Component
{

    public $cart_count;
    public $cart_total;

    public function mount(){
        $this->cart_count = count( CartManagement::getCartItemsFromCookie() );
        $this->cart_total = CartManagement::calculateGrandTotal( CartManagement::getCartItemsFromCookie() );
    }

    #[On('update-cart')]
    public function updateCartItem() {
        $this->cart_count = count( CartManagement::getCartItemsFromCookie() );
        $this->cart_total = CartManagement::calculateGrandTotal( CartManagement::getCartItemsFromCookie() );
    }

    public function render()
    {
        return view('components.header.navbar',[
            'cart_count' => $this->cart_count,
            'cart_total' => $this->cart_total
        ]);
    }

}
