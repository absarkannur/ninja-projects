<?php

namespace App\Livewire;

use App\Models\JourneyList;
use App\Models\JourneyPage as ModelsJourneyPage;
use Livewire\Component;

class JourneyPage extends Component
{
    public function render()
    {

        $data = ModelsJourneyPage::first();
        $journy_list = JourneyList::get();

        return view('livewire.journey-page', [
            'journey_data' => $data,
            'journy_list' => $journy_list
        ]);
    }
}
