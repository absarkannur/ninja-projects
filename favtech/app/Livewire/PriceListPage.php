<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;
use App\Models\PriceList;

class PriceListPage extends Component {


    public $auth;

    public function mount() {

        // Check Auth
        $this->auth = session('user');

        if( $this->auth == null ) {
            $this->redirect('/signin');
        }

    }

    public function render() {

        $price_list = PriceList::get();

        return view( 'livewire.price-list-page', [
            'price_list' => $price_list
        ]);
    }

}
