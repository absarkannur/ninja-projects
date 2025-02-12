<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\OurNumbers;

class AboutPage extends Component
{
    public function render()
    {

        $ourNumbers = OurNumbers::get();

        return view('livewire.about-page', [
            "ourNumbers" => $ourNumbers
        ]);
    }
}
