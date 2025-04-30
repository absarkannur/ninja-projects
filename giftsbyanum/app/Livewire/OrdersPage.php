<?php

namespace App\Livewire;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Title;
use Livewire\Component;

class OrdersPage extends Component
{
    #[Title('Orders | MyCart')]

    public $sessions;

    public function mount() {
        $request = Request();

        // Initial Load
        $this->sessions = $request->session()->get('users_session');

    }

    public function render() {
        return view('livewire.orders-page',[
            'sessions' => $this->sessions
        ]);
    }
}
