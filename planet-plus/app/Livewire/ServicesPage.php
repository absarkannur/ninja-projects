<?php

namespace App\Livewire;

use App\Models\Services;
use Livewire\Component;

class ServicesPage extends Component
{

    public $services;

    public function mount() {
        $this->services = Services::get();
    }

    public function render()
    {
        return view('livewire.services-page', [
            'services' => $this->services
        ]);
    }
}
