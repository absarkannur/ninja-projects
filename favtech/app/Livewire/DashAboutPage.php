<?php

namespace App\Livewire;

use Livewire\Component;

class DashAboutPage extends Component {

    public function create() {
        dd('Hello');
    }

    public function render() {
        return view('livewire.dash-about-page');
    }
}
