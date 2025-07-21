<?php

namespace App\Livewire;

use App\Models\PropertiesList;
use Livewire\Component;

class PropertiesPage extends Component
{
    public function render()
    {

        $lease_properties = PropertiesList::where('types','lease')->orderBy( 'id', 'desc')->get();
        $sale_properties = PropertiesList::where('types','sale')->orderBy( 'id', 'desc')->get();

        return view('livewire.properties-page', [
            'lease_properties' => $lease_properties,
            'sale_properties' => $sale_properties,
        ]);
    }
}
