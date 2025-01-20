<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\FacilitiesCategory;

class FacilitiesPage extends Component
{
    public function render() {

        $facilities_category = FacilitiesCategory::get();

        return view('livewire.facilities-page', [
            'facilities_category' => $facilities_category
        ]);

    }

}
