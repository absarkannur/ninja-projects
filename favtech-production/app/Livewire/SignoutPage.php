<?php

namespace App\Livewire;

use Livewire\Component;

class SignoutPage extends Component {

    public function mount() {
        session()->flush();
        $this->redirect('/signin');
    }
    
    public function render() {
        return view( 'components.signout' );
    }

}
