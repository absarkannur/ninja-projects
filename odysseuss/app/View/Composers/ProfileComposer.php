<?php

namespace App\View\Composers;

use App\Repositories\UserRepository;
use Illuminate\View\View;
use App\Models\SiteInfo;

class ProfileComposer {

    protected $site_data;
    protected $facilities;

    public function __construct() {

        // Site Information
        $this->site_data = SiteInfo::first();

    }

    public function compose(View $view) {

        $view->with('site_info', $this->site_data );

    }
}
