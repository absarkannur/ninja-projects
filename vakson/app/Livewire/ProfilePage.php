<?php

namespace App\Livewire;

use App\Models\ProfilePage as ModelsProfilePage;
use Livewire\Component;

class ProfilePage extends Component
{
    public function render()
    {

        $data = ModelsProfilePage::first();

        return view('livewire.profile-page', [
            'profile_data' => $data
        ]);
    }
}
