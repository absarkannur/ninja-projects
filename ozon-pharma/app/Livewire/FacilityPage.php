<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\FacilitiesCategory;
use App\Models\Facilities;

class FacilityPage extends Component
{

    public $facilitiesCategory;
    public $facilities;

    public function mount( $slug ) {

        $this->facilitiesCategory = FacilitiesCategory::where( 'facility_category_slug', $slug )->orderBy( 'created_at', 'DESC' )->first();
        $this->facilities = Facilities::where( 'facilities_categories_id', $this->facilitiesCategory->id )->orderBy( 'created_at', 'DESC' )->first();

    }

    public function render()
    {
        return view('livewire.facility-page', [
            'facilitiesCategory' => $this->facilitiesCategory,
            'facilities' => $this->facilities
        ]);
    }
}
