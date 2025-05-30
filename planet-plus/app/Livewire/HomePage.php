<?php

namespace App\Livewire;

use App\Models\Brands;
use App\Models\Products;
use App\Models\Services;
use Livewire\Component;

class HomePage extends Component
{

    public $brands;
    public $products;
    public $services;

    public function mount(){
        $this->brands = Brands::orderBy('own_brand', 'DESC')->get();
        $this->products = Products::orderBy('id', 'DESC')->take(4)->get();
        $this->services = Services::orderBy('id', 'DESC')->take(4)->get();
    }

    public function render()
    {
        return view('livewire.home-page', [
            'brands' => $this->brands,
            'products' => $this->products,
            'services' => $this->services
        ]);
    }
}
