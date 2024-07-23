<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Services;


class ShowServicesPage extends Component
{

    public $services;

    public function render()
    {

        // Get All services
        $this->services = Services::select( 'id', 'title','slug','description','thumbnail')->get();

        return view('livewire.show-services-page', [
            'services' => $this->services
        ]);
    }
}
