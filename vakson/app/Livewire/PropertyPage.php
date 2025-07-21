<?php

namespace App\Livewire;

use App\Models\PropertiesList;
use Livewire\Component;

class PropertyPage extends Component {

    public $data;

    public function mount($slug){

        $this->data = PropertiesList::where( 'slug', $slug )->first();

    }

    public function render()
    {
        return view('livewire.property-page', [
            "property_data" => $this->data,
        ]);
    }
}
