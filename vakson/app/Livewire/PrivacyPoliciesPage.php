<?php

namespace App\Livewire;

use App\Models\PrivacyPolicies;
use Livewire\Component;

class PrivacyPoliciesPage extends Component
{
    public function render()
    {
        $data = PrivacyPolicies::first();

        return view('livewire.privacy-policies-page', [
            'data' => $data
        ]);
    }
}
