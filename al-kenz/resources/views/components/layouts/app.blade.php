<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>{{ $title ?? 'Al Kenz Pharmaceutical' }}</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Figtree:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href={{ asset( "kenz-assets/styles/animate.min.css" ) }} />
    <link rel="stylesheet" href={{ asset( "kenz-assets/styles/bootstrap.min.css" ) }}  crossorigin="anonymous">
    <link rel="stylesheet" href={{ asset( "kenz-assets/styles/owl.carousel.min.css" ) }} />
    <link rel="stylesheet" href={{ asset( "kenz-assets/styles/owl.theme.default.min.css" ) }} />
    <link rel="stylesheet" href={{ asset( "kenz-assets/styles/init.css" ) }} />
    <link rel="stylesheet" href={{ asset( "kenz-assets/styles/common.css" ) }} />
    <link rel="stylesheet" href={{ asset( "kenz-assets/styles/site.css" ) }} />

    @livewireStyles

</head>
<body>

    <header class="ak-container ml-0 mr-0 ak-header">
        <div class="topbar">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3">
                        <ul class="topbar-list">
                            <li class="topbar-time no-padding">
                                <img class="time-icon" src={{ asset( "kenz-assets/assets/icons/time.svg" ) }} alt="Time">
                                <span>Mon - Sat 8:00-1800, Sun - Closed</span>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-9 col-xl-9">
                        <ul class="topbar-list fr">
                            <li class="phone separator">
                                <img src={{ asset( "kenz-assets/assets/icons/phone.svg")}} alt="Phone">
                                <span>+971 428 2230</span>
                            </li>
                            <li class="email separator">
                                <img src={{ asset( "kenz-assets/assets/icons/mail.svg")}} alt="Email">
                                <span>info@alkenz.com</span>
                            </li>
                            <li class="address">
                                <img src={{ asset( "kenz-assets/assets/icons/map.svg")}} alt="Address">
                                <span>Office No.74, Al Habtoor Warehouse Ind. Area 3, Al Qusais, Dubai, UAE</span>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
        
                <a class="navbar-brand" href="{{ route('home') }}">
                    <img src={{ asset( "kenz-assets/assets/h-logo.svg" )}} alt="Al Kenz Pharmaceutical">
                </a>
                
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNavAltMarkup" style="justify-content: end;">
                    <div class="navbar-nav">
                        <a class="nav-link" aria-current="page" href="{{ route('about') }}">About Us</a>
                        <a class="nav-link" href="{{ route('home') }}#teams">Our Team</a>
                        <a class="nav-link" href="{{ route('home') }}#partners">Partners</a>
                        <a class="nav-link" href="{{route('prodcts')}}">Products</a>
                        <a class="nav-link" href="{{ route('insights') }}">Insights</a>
                        <a class="nav-link" href="{{ route('serives') }}">Services</a>

                        <a class="nav-link social" href="https://www.facebook.com/alkenzpharma0" target="_blank">
                            <div class="social-link">
                                <img src={{ asset( "kenz-assets/assets/icons/fb.svg" ) }} alt="">
                            </div>
                        </a>
                        <a class="nav-link social" href="https://www.instagram.com/alkenzpharma/" target="_blank">
                            <div class="social-link">
                                <img src={{ asset( "kenz-assets/assets/icons/insta.svg" ) }} alt="">
                            </div>
                        </a>
                        
                        <a class="nav-link no-padding" href="contact.php">
                            <button class="ak-dft-btn p-l-10 center">
                                <img src={{ asset( "kenz-assets/assets/icons/mail-w.svg" ) }} alt="">
                                Contact Us
                            </button>
                        </a>
                    </div>
                </div>

            </div>
        </nav>

    </header>

    {{ $slot }}

    <footer class="ak-container ak-footer">
        <span class="scroll-top">&and;</span>

        <div class="first-footer">

            <div class="container-fluid">

                <div class="row">
                    <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3">
                        <a href="#">
                            <img src={{ asset( "kenz-assets/assets/f-logo.svg") }} alt="Al Kenz Pharmaceutical">
                        </a>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 flex-center">
                        <ul class="footer-navbar">
                            <li><a href="{{route('about')}}">About Us</a></li>
                            <li><a href="{{route('home')}}#teams">Our Team</a></li>
                            <li><a href="{{route('home')}}index.php#partners">Partners</a></li>
                            <li><a href="{{route('prodcts')}}">Products</a></li>
                            <li><a href="{{ route('insights') }}">Insights</a></li>
                            <li><a href="{{ route('serives') }}">Services</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3 flex-end">
                        <ul class="footer-navbar">
                            <li>
                                <a class="nav-link social" href="https://www.facebook.com/alkenzpharma0" target="_blank">
                                    <div class="social-link">
                                        <img src={{ asset( "kenz-assets/assets/icons/fb.svg") }} alt="">
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="nav-link social" href="https://www.instagram.com/alkenzpharma/" target="_blank">
                                    <div class="social-link">
                                        <img src={{ asset( "kenz-assets/assets/icons/insta.svg") }} alt="">
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
            
        </div>
        <div class="second-footer">
            
            <div class="container-fluid">

                <div class="row">
                    <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
                        <div class="copyright">Copyright © 2024 - Al Kanz Pharmaceutical Products</div>
                    </div>
                    <div class="col-sm-12 col-md-8 col-lg-8 col-xl-8">

                        <ul class="bottombar-list fr">
                            <li class="phone separator">
                                <img src={{ asset( "kenz-assets/assets/icons/phone.svg" ) }} alt="Phone">
                                <span>+971 428 2230</span>
                            </li>
                            <li class="email separator">
                                <img src={{ asset( "kenz-assets/assets/icons/mail.svg" ) }} alt="Email">
                                <span>info@alkenz.com</span>
                            </li>
                            <li class="address">
                                <img src={{ asset( "kenz-assets/assets/icons/map.svg" ) }} alt="Address">
                                <span>Office No.74, Al Habtoor Warehouse Ind. Area 3, Al Qusais, Dubai, UAE</span>
                            </li>
                        </ul>
                        
                    </div>
                </div>

            </div>

        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src={{ asset( "kenz-assets/scripts/owl.carousel.js" ) }}></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/animation.gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js"></script>

    <script src={{ asset( "kenz-assets/scripts/bootstrap.bundle.min.js" ) }} crossorigin="anonymous"></script>
    <script src={{ asset( "kenz-assets/scripts/scripts.js" ) }}></script>

    @livewireScripts

</body>
</html>