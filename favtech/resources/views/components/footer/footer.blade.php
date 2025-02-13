<footer>
    <div class="footer-navbar">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                    <ul class="footer-nav">
                        <li class="header">Address</li>
                        <li>
                            <svg width="16" height="16">
                                <use xlink:href={{ asset('fav/images/svg-sprint.svg#building-2-shape') }}></use>
                            </svg>
                            <span>4WA Building</span>
                        </li>
                        <li>
                            <svg width="16" height="16">
                                <use xlink:href={{ asset('fav/images/svg-sprint.svg#phone-shape') }}></use>
                            </svg>
                            <span>+971 55 335 1001</span>
                        </li>
                        <li>
                            <svg width="16" height="16">
                                <use xlink:href={{ asset('fav/images/svg-sprint.svg#envelope-shape') }}></use>
                            </svg>
                            <span>info@favtech.ae</span>
                        </li>
                        <li>
                            <svg width="16" height="16">
                                <use xlink:href={{ asset('fav/images/svg-sprint.svg#map-pin-thick-shape') }}></use>
                            </svg>
                            <span>G25 Dubai Airport Freezone ,Dubai , UAE</span>
                        </li>
                    </ul>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                    <ul class="footer-nav">
                        <li class="header">Links</li>
                        <li><a href="{{ route('about-us') }}" rel="noreferrer">About Us</a></li>
                        <li><a href="{{ route( 'products', ['slug'=>'all'] ) }}" rel="noreferrer">Products</a></li>
                        <li><a href=href="{{ route('contact-us') }}" rel="noreferrer">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                    <ul class="footer-nav">
                        <li class="header">Connect with Us</li>
                        <li>
                            <a href="https://www.facebook.com/" rel="noreferrer">
                                <span class="social-icon">
                                    <svg width="30" height="30" class="fb">
                                        <use xlink:href={{ asset('fav/images/svg-sprint.svg#social-facebook-shape') }}></use>
                                    </svg>
                                </span>
                            </a>
                            <a href="https://www.instagram.com/" rel="noreferrer">
                                <span class="social-icon">
                                    <svg width="30" height="30" class="insta">
                                        <use xlink:href={{ asset('fav/images/svg-sprint.svg#social-instagram-shape') }}></use>
                                    </svg>
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <p class="copyright">Copyright © 2024 - favtech</p>

</footer>
