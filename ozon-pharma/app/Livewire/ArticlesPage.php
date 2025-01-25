<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Articles;

class ArticlesPage extends Component
{

    public $articles;

    public function mount( $slug ) {
        $this->articles = Articles::where( 'slug', $slug )->orderBy( 'created_at', 'DESC' )->first();
    }

    public function render()
    {

        return view('livewire.articles-page', [
            "articles" => $this->articles
        ]);
    }
}
