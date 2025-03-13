<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\PharmacovigilancePageContent;
class PharmacovigilancePage extends Component
{
    public function render()
    {

        $pharmacovigilance = PharmacovigilancePageContent::first();

        return view('livewire.pharmacovigilance-page', [
            'pharmacovigilance' => $pharmacovigilance
        ]);
    }
}
