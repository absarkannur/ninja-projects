<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Articles;

class HomePage extends Component
{
    public function render()
    {

        $articles = Articles::first();

        return view('livewire.home-page', [
            "articles" => $articles
        ]);
    }
}
