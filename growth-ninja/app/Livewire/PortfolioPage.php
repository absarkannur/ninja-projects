<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

class PortfolioPage extends Component
{

    #[Title("Portfolio | Growth Ninjas UAE's LEADING DIGITAL MARKETING AGENCY")]

    public function render()
    {
        return view('livewire.portfolio-page');
    }
}
