<?php

namespace App\Livewire;

use App\Models\HomePage as ModelsHomePage;
use App\Models\PropertiesList;
use Livewire\Component;

class HomePage extends Component
{


    public function render() {

        $data = ModelsHomePage::first();
        $latest_properties = PropertiesList::where('latest', 1)->orderBy('id', 'desc')->get();

        return view('livewire.home-page',[
            'home_data' => $data,
            'properties' => $latest_properties
        ]);
    }
}
