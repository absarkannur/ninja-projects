<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="{{ $site_header->description }}" />
        <meta name="keywords" content="{{ $site_header->keywords }}" />

        <title>{{ $site_header->page_title }}</title>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&family=Wix+Madefor+Display:wght@400..800&display=swap"
            rel="stylesheet">

        <link rel="stylesheet" href="{{ asset('vakson-assets/styles/bootstrap.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('vakson-assets/styles/owl.carousel.css') }}" />
        <link rel="stylesheet" href="{{ asset('vakson-assets/styles/owl.theme.default.css') }}" />
        <link rel="stylesheet" href="{{ asset('vakson-assets/styles/animate.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('vakson-assets/styles/global.css') }}" />
        <link rel="stylesheet" href="{{ asset('vakson-assets/styles/main.css') }}" />

        <script src="{{ asset( 'vakson-assets/scripts/jquery.min.js' ) }}"></script>
        <script src="{{ asset( 'vakson-assets/scripts/parallax.min.js' ) }}"></script>

        {!! $site_header->scripts !!}

    </head>
    <body>

        <x:header.header/>

        {{ $slot }}

        <x:footer.footer/>

        <x:widgets.social_icon />

        <script src="{{ asset('vakson-assets/scripts/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('vakson-assets/scripts/owl.carousel.min.js') }}"></script>

        <script src="{{ asset('vakson-assets/scripts/TweenMax.min.js') }}"></script>
        <script src="{{ asset('vakson-assets/scripts/ScrollMagic.min.js') }}"></script>
        <script src="{{ asset('vakson-assets/scripts/animation.gsap.min.js') }}"></script>
        <script src="{{ asset('vakson-assets/scripts/debug.addIndicators.min.js') }}"></script>

        <script src="{{ asset('vakson-assets/scripts/countDown.js') }}"></script>
        <script src="{{ asset('vakson-assets/scripts/animation.js') }}"></script>
        <script src="{{ asset('vakson-assets/scripts/scripts.js') }}"></script>

    </body>
</html>
