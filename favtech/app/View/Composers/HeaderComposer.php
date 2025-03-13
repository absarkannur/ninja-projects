<?php

namespace App\View\Composers;

use App\Repositories\UserRepository;
use Illuminate\View\View;
use App\Models\Header;
use App\Models\SiteInfo;

class HeaderComposer {

    protected $header_data;
    protected $info;

    public function __construct() {

        // Header
        $this->header_data = Header::first();
        // Site Info
        $this->info = SiteInfo::first();

    }

    public function compose(View $view) {

        $view->with('header_data', $this->header_data );
        $view->with('site_info', $this->info );


    }
}
