<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\OurNumbers;
use App\Models\AboutPageContent;

class AboutPage extends Component
{
    public function render()
    {

        $about_content = AboutPageContent::first();

        return view('livewire.about-page' ,[
            'about_content' => $about_content
        ]);
    }
}
