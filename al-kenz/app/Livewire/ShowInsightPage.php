<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Posts;

class ShowInsightPage extends Component {

    public function render() {

        $posts = Posts::orderBy( 'created_at', 'DESC' )->get();

        return view('livewire.show-insight-page', [
            'posts' => $posts
        ]);
    }
}
