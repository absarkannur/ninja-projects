<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="{{ $header_data->description }}"/>
        <meta name="keywords" content="{{ implode(',', $header_data->keywords ) }}">

        <title>{{ $title ?? 'OZON Pharmaceuticals' }}</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Figtree:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

        <link rel="stylesheet" href="{{ asset('ozon/css/bootstrap.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('ozon/css/owl.carousel.css') }}" />
        <link rel="stylesheet" href="{{ asset('ozon/css/owl.theme.default.css') }}" />
        <link rel="stylesheet" href="{{ asset('ozon/css/tiptap-custom.css') }}" />
        <link rel="stylesheet" href="{{ asset('ozon/css/init.css') }}" />
        <link rel="stylesheet" href="{{ asset('ozon/css/styles.css') }}" />
        <link rel="stylesheet" href="{{ asset('ozon/css/inner-styles.css') }}" />

        @livewireStyles

        {!! $header_data->scripts !!}

    </head>
    <body>

        <x:header.topbar />
        <x:header.header />

        {{ $slot }}

        <x:footer.footer />

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src={{ asset('ozon/js/owl.carousel.min.js') }}></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <script src={{ asset( 'ozon/js/script.js' ) }}></script>

        @livewireScripts

    </body>
</html>
