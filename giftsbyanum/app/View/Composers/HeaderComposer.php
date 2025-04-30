<?php

namespace App\View\Composers;

use Livewire\Component;
use App\Repositories\UserRepository;
use Illuminate\Support\Facades\Session;
use Illuminate\View\View;
use Illuminate\Http\Request;

class HeaderComposer extends Component{

    protected $header_session;


    public function __construct() {

        $session = Session::get('users_session');
        $this->header_session = $session;

    }

    public function compose(View $view) {

        $view->with('header_session', $this->header_session );

    }

}
