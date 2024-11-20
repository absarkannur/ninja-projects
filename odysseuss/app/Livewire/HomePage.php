<?php

namespace App\Livewire;

use App\Models\Teams;
use Livewire\Component;

class HomePage extends Component
{
    public function render() {

        $teams = Teams::get();

        return view('livewire.home-page', [
            'teams' => $teams,
        ]);
    }
}
