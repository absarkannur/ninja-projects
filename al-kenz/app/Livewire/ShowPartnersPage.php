<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Partner;

class ShowPartnersPage extends Component
{
    public function render() {
        
        $partners = Partner::get();

        return view('livewire.show-partners-page', [
            'partners' => $partners,
        ]);
    }
}
