<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ $title ?? 'Page Title' }}</title>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">


        <link rel="stylesheet" href="{{ asset('front-end/styles/bootstrap.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('front-end/styles/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('front-end/styles/owl.theme.default.min.css') }}">

        <link rel="stylesheet" href="{{ asset('front-end/styles/init.css') }}" />
        <link rel="stylesheet" href="{{ asset('front-end/styles/product.css') }}" />
        <link rel="stylesheet" href="{{ asset('front-end/styles/payments.css') }}" />
        <link rel="stylesheet" href="{{ asset('front-end/styles/cart.css') }}" />
        <link rel="stylesheet" href="{{ asset('front-end/styles/inner-styles.css') }}" />
        <link rel="stylesheet" href="{{ asset('front-end/styles/style.css') }}" />

        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

        @livewireStyles

    </head>
    <body>

        <x:header.header />

        {{ $slot }}

        <x:footer.footer />

        <script src="{{ asset('front-end/scripts/jquery.min.js') }}"></script>
        <script src="{{ asset('front-end/scripts/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('front-end/scripts/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('front-end/scripts/script.js') }}"></script>

        @livewireScripts


    </body>
</html>
