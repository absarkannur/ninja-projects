<?php

namespace App\Livewire;

use App\Helpers\CartManagement;
use App\Models\Products;
use Livewire\Attributes\Title;
use Livewire\Component;

class ProductPage extends Component
{
    #[Title('Gifts By Anum')]

    public $product;

    public function mount( $slug ){

        $this->product = Products::select('products.id', 'products.*' )
                            ->where( 'product_slug', $slug )
                            ->leftJoin( 'offers', 'offers.id', 'products.offers_id' )->first();

    }

    public function addToCart( $product_id, $qty ){

        $total_count =  CartManagement::addItemToCart( $product_id, $qty );
        $this->dispatch('update-cart');


    }

    public function render() {
        return view('livewire.product-page', [
            "product" => $this->product
        ]);
    }
}
