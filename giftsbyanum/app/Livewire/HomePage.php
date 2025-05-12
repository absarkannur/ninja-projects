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

    #[Title('Gifts By Anum')]

    public $sessions;
    public $currency;

    public function mount() {

        $this->currency = env('APP_CURRENCY');

         // Initial Load
        $request = Request();
        $this->sessions = $request->session()->get('users_session');

    }

    public function render() {

        $products = Products::leftJoin( 'offers', 'offers.id', 'products.offers_id' )
                            ->leftJoin( 'sub_categories', 'sub_categories.id', 'products.sub_categories_id' )
                            ->leftJoin( 'categories','categories.id', 'sub_categories.categories_id' )
                            ->get();

        return view('livewire.home-page', [
            'products' => $products
        ]);
    }

}
