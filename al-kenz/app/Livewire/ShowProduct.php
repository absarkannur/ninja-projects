<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\DrugClasses;
use App\Models\Drugs;
use App\Models\ProductCategories;
use Illuminate\Support\Arr;

class ShowProduct extends Component
{

    public $drug_classes;
    public $drug_list;
    public $product;

    public function mount( $id ) {
        
        $this->product = ProductCategories::findOrFail( $id );
        $this->drug_classes = DrugClasses::where('product_categories_id' , $id )->get();
        $this->drug_list = $this->get_drug( $this->drug_classes );
        
    }

    private function get_drug( $drug_classes){

        $temp_drugs = array();

        foreach ( $drug_classes as $key => $classes ) {

            $drugs = Drugs::where('drug_classes_id' , $classes->id )->get();

            $a = array(
                "class" => $classes->name,
                "drug" => array()
            );

            foreach ( $drugs as $key => $drug ) {

                $stack = array(
                    "name" => $drug->name,
                    "desc" => $drug->description,
                    "attach" => $drug->attachment,
                    "image" => $drug->image,
                );

                array_push( $a['drug'], $stack);

            }

            array_push( $temp_drugs, $a );

        }


        return $temp_drugs;

    }

    public function render(){
        return view('livewire.show-product', [
            'product' => $this->product,
            'drug_classes' => $this->drug_classes,
            'drug_list' => $this->drug_list,
        ]);
    }
}
