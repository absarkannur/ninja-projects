<header>
    <div class="header-area header-area1 header-area-all d-none d-lg-block" id="header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="header-elements">

                        <div class="site-logo">
                            <a href="{{ route('home') }}">
                                <img src="{{ asset( 'storage/' . $site_data->header_logo ) }}" alt="">
                            </a>
                        </div>

                        <div class="main-menu-ex main-menu-ex1">
                            <ul>
                                <li>
                                    <a href="{{ route('home') }}">Home</a>
                                </li>
                                <li>
                                    <a href="{{ route('about') }}">About Us</a>
                                </li>
                                <li>
                                    <a href="{{ route('products') }}">Products</a>
                                </li>
                                <li>
                                    <a href="{{ route('services') }}">Our Services</a>
                                </li>
                                <li>
                                    <a href="{{ route('contact') }}">Contact Us</a>
                                </li>
                            </ul>
                        </div>

                        <div class="header1-buttons">
                            <div class="contact-btn">
                                <div class="icon">
                                    <img src="{{ asset('planet-assets/img/icons/header1-icon.png') }}" alt="">
                                </div>
                                <div class="headding">
                                    <p>Make a Call</p>
                                    <a href="tel:{{ $site_data->compnay_phone1 }}">{{ $site_data->compnay_phone1 }}</a>
                                </div>
                            </div>
                            <div class="button">
                                <a class="theme-btn1" href="{{ route('contact') }}">
                                    Get A Quote
                                    <span><i class="fa-solid fa-arrow-right"></i></span>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
