<?php

namespace App\Livewire;

use App\Models\Products;
use App\Models\Support;
use Livewire\Component;

class ProductPage extends Component
{

    public $product;
    public $product_support;

    public function mount( $slug ){

        $product_slug = $slug;

        $this->product = Products::where('products.product_slug', $product_slug )
                            ->leftJoin( 'brands', 'products.brands_id', 'brands.id' )
                            ->first();

        $this->product_support = Support::whereIn( 'id', $this->product->supports_id )->get();


    }

    public function render() {
        return view('livewire.product-page', [
            'product' => $this->product,
            'supports' => $this->product_support,
        ]);
    }
}
