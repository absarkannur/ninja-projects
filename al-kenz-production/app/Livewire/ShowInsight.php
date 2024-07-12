<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Posts;

class ShowInsight extends Component
{

    public $posts;

    public function mount( $id ) {
        $this->posts = Posts::findOrFail( $id );
    }

    public function render(){
        return view('livewire.show-insight', [
            'posts' => $this->posts
        ]);
    }
}
