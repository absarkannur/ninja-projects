<?php

namespace App\Livewire;

use App\Models\Services;
use Livewire\Component;

class ShowService extends Component
{

    public $service;
    public $services_list;

    public function mount( $slug ) {
        $this->service = Services::where( 'slug', $slug )->orderBy( 'created_at', 'DESC' )->first();
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
