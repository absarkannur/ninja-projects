<?php

namespace App\Livewire;

use App\Helpers\CartManagement;
use App\Models\Products;
use App\View\Composers\HeaderComposer;
use App\Livewire\NavBar;
use Illuminate\Http\Request;
use Livewire\Attributes\Title;
use Livewire\Component;


class HomePage extends Component
{

    #[Title('Home | MyCart')]

    public $sessions;
    public $currency;

    public function mount() {

        $this->currency = env('APP_CURRENCY');

         // Initial Load
        $request = Request();
        $this->sessions = $request->session()->get('users_session');

    }

    public function addToCart( $product_id, $qty ){

        $total_count =  CartManagement::addItemToCart( $product_id, $qty );
        $this->dispatch( 'update-cart');

        // $this->redirect('/');

        // dd( CartManagement::getCartItemsFromCookie() );

    }

    public function render() {

        $products = Products::get();

        return view('livewire.home-page', [
            'products' => $products
        ]);
    }

}
