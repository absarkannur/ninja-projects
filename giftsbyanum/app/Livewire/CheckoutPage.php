<?php

namespace App\Livewire;

use Livewire\Component;
use App\Helpers\CartManagement;
use Livewire\Attributes\Title;

class CheckoutPage extends Component
{

    #[Title('Checkout | MyCart')]

    public function mount(){

        $currentCart = CartManagement::getCartItemsFromCookie();

        if( count($currentCart) === 0 ){
            return redirect('/');
        }

    }

    public function render()
    {
        return view('livewire.checkout-page');
    }
}
