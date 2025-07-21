<?php

namespace App\View\Composers;

use App\Repositories\UserRepository;
use Illuminate\View\View;
use App\Models\Header;
use App\Models\HeaderScripts;
use App\Models\SiteInfo;

class HeaderComposer {

    protected $site_data;
    protected $site_header;

    public function __construct() {
        $this->site_data = SiteInfo::first();
        $this->site_header = HeaderScripts::first();
    }

    public function compose(View $view) {
        $view->with('site_data', $this->site_data );
        $view->with('site_header', $this->site_header );
    }
}
