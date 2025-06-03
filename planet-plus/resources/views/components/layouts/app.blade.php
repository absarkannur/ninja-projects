<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{{ $site_header->description }}"/>
    <meta name="keywords" content="{{ $site_header->keywords }}"/>

    <title>{{ $site_header->page_title }}</title>

    <!--CSS-->
    <link rel="stylesheet" href="{{ asset('planet-assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('planet-assets/css/fontawesome.css') }}" />
    <link rel="stylesheet" href="{{ asset('planet-assets/css/magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ asset('planet-assets/css/nice-select.css') }}" />
    <link rel="stylesheet" href="{{ asset('planet-assets/css/slick-slider.css') }}" />
    <link rel="stylesheet" href="{{ asset('planet-assets/css/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('planet-assets/css/aos.css') }}" />
    <link rel="stylesheet" href="{{ asset('planet-assets/css/mobile-menu.css') }}" />
    <link rel="stylesheet" href="{{ asset('planet-assets/css/init.css') }}" />
    <link rel="stylesheet" href="{{ asset('planet-assets/css/main.css') }}" />
    <link rel="stylesheet" href="{{ asset('planet-assets/css/styles.css') }}" />

    @livewireStyles

</head>

    <body class="body tg-heading-subheading animation-style3">

    <x:header.topbar />
    <x:header.header />
    <x:header.mobile-header />
    <x:header.mobile-slider />

    {{ $slot }}

    <x:footer.footer />

    </body>

    <!-- Footer Script -->
    <script src="{{ asset('planet-assets/js/jquery-3-7-1.min.js') }}"></script>
    <script src="{{ asset('planet-assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('planet-assets/js/aos.js') }}"></script>
    <script src="{{ asset('planet-assets/js/fontawesome.js') }}"></script>
    <script src="{{ asset('planet-assets/js/jquery.countup.js') }}"></script>
    <script src="{{ asset('planet-assets/js/mobile-menu.js') }}"></script>
    <script src="{{ asset('planet-assets/js/jquery.magnific-popup.js') }}"></script>
    <script src="{{ asset('planet-assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('planet-assets/js/slick-slider.js') }}"></script>
    <script src="{{ asset('planet-assets/js/gsap.min.js') }}"></script>
    <script src="{{ asset('planet-assets/js/ScrollTrigger.min.js') }}"></script>
    <script src="{{ asset('planet-assets/js/Splitetext.js') }}"></script>
    <script src="{{ asset('planet-assets/js/text-animation.js') }}"></script>
    <script src="{{ asset('planet-assets/js/jquery.lineProgressbar.js') }}"></script>
    <script src="{{ asset('planet-assets/js/ripple-btn.js') }}"></script>
    <script src="{{ asset('planet-assets/js/main.js') }}"></script>

     @livewireScripts

</html>
