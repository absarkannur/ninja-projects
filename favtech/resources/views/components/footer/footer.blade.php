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
                            <span>{{ $site_info->compnay_address }}</span>
                        </li>
                        <li>
                            <svg width="16" height="16">
                                <use xlink:href={{ asset('fav/images/svg-sprint.svg#phone-shape') }}></use>
                            </svg>
                            <span>{{ $site_info->compnay_phone }}</span>
                        </li>
                        <li>
                            <svg width="16" height="16">
                                <use xlink:href={{ asset('fav/images/svg-sprint.svg#envelope-shape') }}></use>
                            </svg>
                            <span>{{ $site_info->compnay_email }}</span>
                        </li>
                        {{-- <li>
                            <svg width="16" height="16">
                                <use xlink:href={{ asset('fav/images/svg-sprint.svg#map-pin-thick-shape') }}></use>
                            </svg>
                            <span>G25 Dubai Airport Freezone ,Dubai , UAE</span>
                        </li> --}}
                    </ul>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                    <ul class="footer-nav">
                        <li class="header">Links</li>
                        <li><a href="{{ route('about-us') }}" rel="noreferrer">About Us</a></li>
                        <li><a href="{{ route( 'products', ['slug'=>'all'] ) }}" rel="noreferrer">Products</a></li>
                        <li><a href="{{ route('contact-us') }}" rel="noreferrer">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                    <ul class="footer-nav">
                        <li class="header">Connect with Us</li>
                        <li>
                            <a href="{{ $site_info->compnay_fb }}" rel="noreferrer">
                                <span class="social-icon">
                                    <svg width="30" height="30" class="fb">
                                        <use xlink:href={{ asset('fav/images/svg-sprint.svg#social-facebook-shape') }}></use>
                                    </svg>
                                </span>
                            </a>
                            <a href="{{ $site_info->compnay_insta }}" rel="noreferrer">
                                <span class="social-icon">
                                    <svg width="30" height="30" class="insta">
                                        <use xlink:href={{ asset('fav/images/svg-sprint.svg#social-instagram-shape') }}></use>
                                    </svg>
                                </span>
                            </a>
                            <a href="{{ $site_info->compnay_linkd }}" rel="noreferrer">
                                <span class="social-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                                        <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z"/>
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
