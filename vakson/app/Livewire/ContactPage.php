<?php

namespace App\Livewire;

use App\Models\ContactPage as ModelsContactPage;
use Livewire\Component;

class ContactPage extends Component
{
    public function render()
    {

        $data = ModelsContactPage::first();

        return view('livewire.contact-page', [
            'contact_data' => $data
        ]);
    }
}
