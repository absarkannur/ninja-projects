<?php

namespace App\Livewire;

use App\Models\Services;
use App\Models\ServicesCategories;
use App\Models\ServicesCategoriesContent;
use Illuminate\Support\Arr;
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

        $temp_service = array();

        foreach ( $service_list as $key => $service ) {

            $service_contents = ServicesCategoriesContent::where('services_categories_id' , $service->id )->get();

            $a = array(
                "service_category_name" => $service->service_category_name,
                "service_contents" => array()
            );

            foreach ($service_contents as $key => $content) {

                $stack = array(
                    "service_category_contect_image" => $content->service_category_contect_image,
                    "service_category_contect_description" => $content->service_category_contect_description,
                );

                array_push( $a['service_contents'], $stack);

            }

            array_push( $temp_service, $a );

        }

        return $temp_service;

    }

    public function render() {
        return view('livewire.service-page', [
            "service" => $this->service,
            "service_list" => $this->service_list
        ]);
    }
}
