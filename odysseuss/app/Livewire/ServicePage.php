<?php

namespace App\Livewire;

use App\Models\Services;
use Livewire\Component;

class ServicePage extends Component
{

    public $service;

    public function mount( $slug ) {
        $this->service = Services::where( 'service_slug', $slug )->get()->first();
    }

    public function render() {
        return view('livewire.service-page', [
            "service" => $this->service
        ]);
    }
}
