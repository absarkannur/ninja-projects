<?php

namespace App\Livewire;

use App\Models\Products;
use Livewire\Component;
use Livewire\WithPagination;

class ProductsPage extends Component {

    use WithPagination;

    public function render() {

        $products = Products::paginate(10);

        return view('livewire.products-page', [
            'products' => $products
        ]);
    }
}
