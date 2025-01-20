<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

use App\Models\FacilitiesCategory;
use App\Models\TherapeuticCategories;

class HomePage extends Component
{

    #[Title('OZON Pharmaceuticals | Home')]

    public function render() {

        $facilities_category = FacilitiesCategory::get();
        $therapeutic_dategories = TherapeuticCategories::get();

        return view('livewire.home-page', [
            'facilities_category' => $facilities_category,
            'therapeutic_dategories' => $therapeutic_dategories
        ]);

    }

}
