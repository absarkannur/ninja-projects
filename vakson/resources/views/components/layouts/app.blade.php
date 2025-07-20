<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description"
        content="Vakson Development is a leading real estate developer in Dubai, specialising in luxury residential and commercial properties. Explore our latest projects today!">
        <meta name="keywords"
        content="real estate developer, luxury properties, Dubai real estate, residential projects, commercial properties, Vakson Development, new construction Dubai">

        <title>{{ $title ?? 'Vakson Development | Premier Real Estate Developer in Dubai' }}</title>

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
