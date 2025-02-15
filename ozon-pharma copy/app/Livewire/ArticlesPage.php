<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Articles;

class ArticlesPage extends Component
{

    public function render() {

        $articles = Articles::orderBy( 'created_at', 'DESC' )->paginate(10);

        return view('livewire.articles-page', [
            "articles" => $articles
        ]);
    }
}
