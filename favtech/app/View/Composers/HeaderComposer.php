<?php

namespace App\View\Composers;

use App\Repositories\UserRepository;
use Illuminate\View\View;
use App\Models\Header;

class HeaderComposer {

    protected $header_data;

    public function __construct() {

        // Header
        $this->header_data = Header::first();

    }

    public function compose(View $view) {

        $view->with('header_data', $this->header_data );

    }
}
