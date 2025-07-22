<?php

namespace App\Livewire;

use App\Models\TermsConditions;
use Livewire\Component;

class TermsConditionsPage extends Component
{
    public function render()
    {
        $data = TermsConditions::first();

        return view('livewire.terms-conditions-page', [
            'data' => $data
        ]);
    }
}
