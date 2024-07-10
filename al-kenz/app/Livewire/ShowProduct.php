<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\DrugClasses;

class ShowProduct extends Component
{

    public $drug_classes;

    public function mount( $id ) {
        $this->drug_classes = DrugClasses::get( );
    }

    public function render(){
        return view('livewire.show-product', [
            'drug_classes' => $this->drug_classes
        ]);
    }
}
