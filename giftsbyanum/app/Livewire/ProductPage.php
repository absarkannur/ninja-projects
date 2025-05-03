<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

class ProductPage extends Component
{
    #[Title('Gifts By Anum')]

    public $a = 'cake';

    public function render() {
        return view('livewire.product-page');
    }
}
