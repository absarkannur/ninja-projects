<section class="home-contact-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <h2>Contact Us</h2>

                <ul class="address">
                    <li>
                        <svg width="30" height="30">
                            <use xlink:href={{ asset('fav/images/svg-sprint.svg#building-2-shape') }}></use>
                        </svg>
                        <span class="text" style="display:block;width:70%">{{ $site_info->compnay_address }}</span>
                    </li>
                    <li>
                        <svg width="30" height="30">
                            <use xlink:href={{ asset('fav/images/svg-sprint.svg#phone-shape') }}></use>
                        </svg>
                        <span class="text">{{ $site_info->compnay_phone }}</span>
                    </li>
                    <li>
                        <svg width="30" height="30">
                            <use xlink:href={{ asset('fav/images/svg-sprint.svg#envelope-shape') }}></use>
                        </svg>
                        <span class="text">{{ $site_info->compnay_email }}</span>
                    </li>
                </ul>

            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <x-contact-form />
            </div>
        </div>
    </div>
</section>
