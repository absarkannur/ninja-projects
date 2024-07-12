<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\ProductCategories;

class ShowProductPage extends Component
{
    public function render()
    {

        $products = ProductCategories::get();

        return view('livewire.show-product-page', [
            'products' => $products
        ]);
    }
}
