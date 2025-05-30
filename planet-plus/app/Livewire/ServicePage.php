<?php

namespace App\Livewire;

use App\Models\Services;
use Livewire\Component;

class ServicePage extends Component
{

    public $service;
    public $service_list;

    public function mount( $slug ){

        $this->service_list = Services::get();
        $this->service = Services::where( 'service_slug', $slug )->first();

    }

    public function render()
    {
        return view('livewire.service-page', [
            'service' => $this->service,
            '$service_list' => $this->service_list
        ]);
    }
}
