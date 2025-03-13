<?php

namespace App\View\Composers;

use App\Repositories\UserRepository;
use Illuminate\View\View;
use App\Models\SiteInfo;
use App\Models\FacilitiesCategory;
use App\Models\Products;

class ProfileComposer {

    protected $site_data;
    protected $facilities;
    protected $products_count;

    public function __construct() {

        // Site Information
        $this->site_data = SiteInfo::first();
        $this->facilities = FacilitiesCategory::orderBy('id', 'ASC')->take(6)->get();
        $this->products_count = Products::get();

    }

    public function compose(View $view) {

        $view->with('site_info', $this->site_data );
        $view->with('facilities_footer', $this->facilities );
        $view->with('products_count', $this->products_count );

    }
}
