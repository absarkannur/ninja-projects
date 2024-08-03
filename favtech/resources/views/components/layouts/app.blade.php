<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ $title ?? 'favtech' }}</title>

        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        
        <!-- Site Style -->
        <link rel="stylesheet" href={{ asset( 'fav/bootstrap.min.css' ) }}>
        <link rel="stylesheet" href={{ asset( 'fav/assets/owl.carousel.min.css' ) }}>
        <link rel="stylesheet" href={{ asset( 'fav/assets/owl.theme.default.min.css' ) }}>
        <link rel="stylesheet" href={{ asset( 'fav/assets/owl.theme.green.min.css' ) }}>
        <link rel="stylesheet" href={{ asset( 'fav/init.css' ) }}>
        <link rel="stylesheet" href={{ asset( 'fav/site.css' ) }}>

    </head>
    <body>

        <header class="wrapper-header">
            <div class="top-bar">
                <div class="container-fluid">

                    <span class="social-wrap">
                        <span class="social-icon">
                            <svg width="18" height="18" class="fb">
                                <use xlink:href={{ asset('fav/images/svg-sprint.svg#social-facebook-shape') }}></use>
                            </svg>
                        </span>

                        <span class="social-icon">
                            <svg width="18" height="18" class="insta">
                                <use xlink:href={{ asset('fav/images/svg-sprint.svg#social-instagram-shape') }}></use>
                            </svg>
                        </span>

                        <span class="social-icon">
                            <a href="mailto:info@favtech.ae" style="font-size: 11px;">info@favtech.ae</a>
                        </span>

                        <span class="social-icon">
                            <a href="tel:+971553351001" style="font-size: 11px;">+971 55 335 1001</a>
                        </span>

                    </span>

                    <ul class="top-nav">
                        <li><a href="">Register</a></li>
                        <li><a href="">Sign In</a></li>
                    </ul>
                </div>
            </div>
            <nav class="navbar navbar-expand-lg" data-bs-theme="dark">
                <div class="container-fluid">
                    <a class="navbar-brand" href="{{ route('home') }}">
                        <img class="site-header-logo" src={{ asset('/fav/images/logo.png') }} alt="">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                            <a class="nav-link" href="{{ route('home') }}">Home</a>
                            <a class="nav-link" href="{{ route('about-us') }}">About Us</a>
                            <a class="nav-link" href="{{ route('products') }}">Products</a>
                            <a class="nav-link" href="{{ route('contact-us') }}">Contact Us</a>
                            <a class="nav-link btn" href="{{ route('price-list') }}">Price List</a>
                        </div>
                    </div>
                </div>
            </nav>
        </header>


        {{ $slot }}

        <footer>
            <div class="container-fluid footer-navbar">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                        <ul class="footer-nav">
                            <li class="header">Address</li>
                            <li>
                                <svg width="18" height="18">
                                    <use xlink:href={{ asset('fav/images/svg-sprint.svg#building-2-shape') }}></use>
                                </svg>
                                <span>4WA Building</span>
                            </li>
                            <li>
                                <svg width="18" height="18">
                                    <use xlink:href={{ asset('fav/images/svg-sprint.svg#phone-shape') }}></use>
                                </svg>
                                <span>+971 55 335 1001</span>
                            </li>
                            <li>
                                <svg width="18" height="18">
                                    <use xlink:href={{ asset('fav/images/svg-sprint.svg#envelope-shape') }}></use>
                                </svg>
                                <span>info@favtech.ae</span>
                            </li>
                            <li>
                                <svg width="18" height="18">
                                    <use xlink:href={{ asset('fav/images/svg-sprint.svg#map-pin-thick-shape') }}></use>
                                </svg>
                                <span>G25 Dubai Airport Freezone ,Dubai , UAE</span>
                            </li>
                        </ul>
                    </div>
                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                        <ul class="footer-nav">
                            <li class="header">Links</li>
                            <li><a href="">About Us</a></li>
                            <li><a href="">Products</a></li>
                            <li><a href="">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                        <ul class="footer-nav">
                            <li class="header">Connect with Us</li>
                            <li>
                                <a href="">
                                    <span class="social-icon">
                                        <svg width="30" height="30" class="fb">
                                            <use xlink:href={{ asset('fav/images/svg-sprint.svg#social-facebook-shape') }}></use>
                                        </svg>
                                    </span>
                                </a>
                                <a href="">
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

            <p class="copyright">Copyright © 2024 - favtech</p>

        </footer>

        <!-- Scripts -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src={{ asset( 'fav/bootstrap.bundle.min.js' ) }}></script>
        <script src={{ asset( 'fav/owl.carousel.min.js' ) }}></script>
        <script src={{ asset( 'fav/script.js' ) }}></script>

    </body>
</html>
