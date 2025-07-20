<?php

namespace App\Livewire;

use App\Models\Brands;
use App\Models\Categories;
use App\Models\Products;
use Livewire\Component;

class CategoriesPage extends Component
{

    public $categories = [];
    public $brands = [];
    public $products;

    public function mount(){
        $this->categories = Categories::get();
        $this->brands = Brands::get();
    }

    public function render()
    {
        return view('livewire.categories-page', [
            'category' => $this->categories,
            'brands' => $this->brands
        ]);
    }
}
