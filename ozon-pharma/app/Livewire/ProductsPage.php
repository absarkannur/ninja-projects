<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Products;

class ProductsPage extends Component
{
    public function render()
    {

        $products = Products::orderBy( 'created_at', 'ASC' )->paginate(10);

        return view('livewire.products-page', [
            'products' => $products
        ]);

    }
}
