<div class="mobile-sidebar d-block d-lg-none">
    <div class="logo-m">
        <a href="{{ route('home') }}"><img src="{{ asset( 'storage/' . $site_data->mobile_header_logo ) }}" alt=""></a>
    </div>
    <div class="menu-close">
        <i class="fa-solid fa-xmark"></i>
    </div>
    <div class="mobile-nav">

        <ul>
            <li><a href="{{ route('home') }}">Home </a></li>
            <li><a href="{{ route('about') }}">About Us</a></li>
            <li><a href="{{ route('products') }}">Products</a></li>
            <li><a href="{{ route('services') }}">Our Services</a></li>
            <li><a href="{{ route('contact') }}">Contact Us</a></li>
        </ul>

        <div class="single-footer-items">
            <h3>Contact Us</h3>

            <div class="contact-box">
                <div class="icon">
                    <img src="{{ asset('planet-assets/img/icons/footer1-icon1.png') }}" alt="">
                </div>
                <div class="pera">
                    <a href="tel:{{ $site_data->compnay_phone1 }}">{{ $site_data->compnay_phone1 }}</a>
                </div>
            </div>

            <div class="contact-box">
                <div class="icon">
                    <img src="{{ asset('planet-assets/img/icons/footer1-icon2.png') }}" alt="">
                </div>
                <div class="pera">
                    <a href="tel:{{ $site_data->compnay_phone2 }}">{{ $site_data->compnay_phone2 }}</a>
                </div>
            </div>

            <div class="contact-box">
                <div class="icon">
                    <img src="{{ asset('planet-assets/img/icons/footer1-icon3.png') }}" alt="">
                </div>
                <div class="pera">
                    <a href="mailto:{{ $site_data->compnay_email }}">{{ $site_data->compnay_email }}</a>
                </div>
            </div>
        </div>

        <div class="contact-infos">
            <h3>Our Location</h3>
            <ul class="social-icon">

                <li><a href="{{ $site_data->compnay_linkd }}"><i class="fa-brands fa-linkedin-in"></i></a></li>
                <li><a href="{{ $site_data->compnay_x }}"><i class="fa-brands fa-x-twitter"></i></a></li>
                <li><a href="{{ $site_data->compnay_fb }}"><i class="fa-brands fa-facebook"></i></a></li>
                <li><a href="{{ $site_data->compnay_insta }}"><i class="fa-brands fa-instagram"></i></a></li>

            </ul>
        </div>

    </div>
</div>
