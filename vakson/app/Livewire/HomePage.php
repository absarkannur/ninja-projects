<?php

namespace App\Livewire;

use App\Models\HomePage as ModelsHomePage;
use Livewire\Component;

class HomePage extends Component
{
    public function render()
    {

        $data = ModelsHomePage::first();

        return view('livewire.home-page',[
            'home_data' => $data
        ]);
    }
}
