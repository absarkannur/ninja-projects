<?php

namespace App\Livewire;

use App\Models\Products;
use Livewire\Attributes\Title;
use Livewire\Component;

class HomePage extends Component
{

    #[Title('Home')]

    public function render() {

        $products = Products::get();

        return view('livewire.home-page', [
            'products' => $products
        ]);
    }

}
