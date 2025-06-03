<?php

namespace App\Livewire;

use App\Models\AboutUsWidgets;
use App\Models\MissionWidgets;
use App\Models\Teams;
use App\Models\VisionWidgets;
use Livewire\Component;

class AboutPage extends Component
{

    public $teams;

    public function mount(){

        $this->teams = Teams::get();

    }

    public function render()
    {

        $about_us = AboutUsWidgets::first();
        $mission = MissionWidgets::first();
        $vision = VisionWidgets::first();

        return view('livewire.about-page', [
            'teams' => $this->teams,
            'about_us' => $about_us,
            'mission' => $mission,
            'vision' => $vision
        ]);
    }
}
