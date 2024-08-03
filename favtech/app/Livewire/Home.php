<?php

namespace App\Livewire;

use Illuminate\Support\Arr;
use Livewire\Component;
use App\Models\Banners;
use App\Models\Products;

class Home extends Component
{
    public function render() {

        $banners =  Banners::get();
        $products = Products::get();
        
        return view('livewire.home', [
            'banners' => $banners,
            'products' => $products
        ]);

    }
}
