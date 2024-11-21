<?php

namespace App\Livewire;

use App\Models\Services;
use App\Models\ServicesCategories;
use Livewire\Component;

class ServicePage extends Component
{

    public $service;
    public $service_id;
    public $services_categories;
    public $service_list;

    public function mount( $slug ) {

        $this->service = Services::where( 'service_slug', $slug )->get()->first();
        $this->service_id = $this->service['id'];

        $this->services_categories = ServicesCategories::where( 'services_id', $this->service_id )->get();

        $this->service_list = $this->getServiceList( $this->services_categories );

    }

    private function getServiceList( $service_list ){

        dd( $service_list );

    }

    public function render() {
        return view('livewire.service-page', [
            "service" => $this->service,
            "service_cat" => $this->services_categories
        ]);
    }
}
