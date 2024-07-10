<?php

namespace App\Livewire;

use App\Models\Services;
use Livewire\Component;

class ShowService extends Component
{

    public $service;
    public $services_list;

    public function mount( $id ) {
        $this->service = Services::findOrFail( $id );
    }

    public function render() {

        // Get All services
        $this->services_list = Services::get();

        return view('livewire.show-service', [
            'service' => $this->service,
            'services_list' => $this->services_list
        ]);
    }
}
