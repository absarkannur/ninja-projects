<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;
use App\Models\Products;

class ProductsPage extends Component
{

    #[Title('favtech | Products')] 

    public function render() {

        $products = Products::orderBy( 'id', 'ASC' )->paginate(12);

        return view('livewire.products', [
            'products' => $products
        ]);

    }
}
