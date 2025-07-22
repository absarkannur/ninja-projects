<?php

namespace App\View\Composers;

use App\Repositories\UserRepository;
use Illuminate\View\View;
use App\Models\Header;
use App\Models\HeaderScripts;
use App\Models\PropertiesList;
use App\Models\SiteInfo;

class HeaderComposer {

    protected $site_data;
    protected $site_header;
    protected $site_nav;
    protected $site_nav_latest;

    public function __construct() {
        $this->site_data = SiteInfo::first();
        $this->site_header = HeaderScripts::first();

        $this->site_nav = PropertiesList::where('latest', 0)->orderBy('id','desc')->get();
        $this->site_nav_latest = PropertiesList::where('latest', 1)->orderBy('id','desc')->get();


    }

    public function compose(View $view) {
        $view->with('site_data', $this->site_data );
        $view->with('site_header', $this->site_header );
        $view->with('site_nav', $this->site_nav );
        $view->with('site_nav_latest', $this->site_nav_latest );
    }
}
