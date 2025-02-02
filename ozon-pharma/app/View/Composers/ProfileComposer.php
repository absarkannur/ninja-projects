<?php

namespace App\View\Composers;

use App\Repositories\UserRepository;
use Illuminate\View\View;
use App\Models\SiteInfo;
use App\Models\FacilitiesCategory;

class ProfileComposer {

    protected $site_data;
    protected $facilities;

    public function __construct() {

        // Site Information
        $this->site_data = SiteInfo::first();
        $this->facilities = FacilitiesCategory::get();

    }

    public function compose(View $view) {

        $view->with('site_info', $this->site_data );
        $view->with('facilities_footer', $this->facilities );

    }
}
