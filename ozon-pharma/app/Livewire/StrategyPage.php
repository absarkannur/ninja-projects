<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\StrategyPageContent;

class StrategyPage extends Component
{
    public function render()
    {

        $strategy_content = StrategyPageContent::first();

        return view('livewire.strategy-page', [
            "strategy_content" => $strategy_content
        ]);
    }
}
