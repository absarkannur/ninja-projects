<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

class HomePage extends Component
{

    #[Title("Growth Ninjas | UAE's LEADING DIGITAL MARKETING AGENCY")]

    public function render() {
        return view('livewire.home-page');
    }
}
