<?php

namespace App\Livewire;

use App\Models\Categories as ModelsCategories;
use Livewire\Component;

class Categories extends Component
{
    public $categories = [];

    public function mount() {

        $this->categories = ModelsCategories::get();

    }


    public function render()
    {
        return view('components.ui.categories', [
            "categories" => $this->categories
        ]);
    }

}
