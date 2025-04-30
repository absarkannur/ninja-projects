<?php

namespace App\Livewire;

use App\Helpers\CartManagement;
use Livewire\Attributes\Title;
use Livewire\Component;

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
