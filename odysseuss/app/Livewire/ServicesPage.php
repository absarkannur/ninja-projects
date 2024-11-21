<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Services;

class ServicesPage extends Component
{
    public function render()
    {

        $services = Services::get();

        return view('livewire.services-page', [
            "services" => $services
        ]);
    }
}
