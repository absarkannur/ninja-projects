<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="{{ $header_data->description }}"/>
        <meta name="keywords" content="{{ implode(',', $header_data->keywords ) }}">

        <title>{{ $title ?? 'Page Title' }}</title>
        <link rel="icon" type="image/x-icon" href={{ asset( 'fav/images/favicon.ico' ) }} >
        <link rel="canonical" href="https://growthninjas.agency" />

        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet" />

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
        <link rel="stylesheet" href="{{ asset('ninja/css/animate.min.css') }}" />

        <link rel="stylesheet" href="{{ asset('ninja/css/global.css') }}" />
        <link rel="stylesheet" href="{{ asset('ninja/css/style.css') }}" />
        <link rel="stylesheet" href="{{ asset('ninja/css/media.css') }}" />

        @livewireStyles

        {!! $header_data->scripts !!}

    </head>
    <body>

        <x:header.header/>

        <x:widget.whatsapp />

        {{ $slot }}

        <x:footer.footer/>

        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <script src="{{ asset('ninja/scripts/form.js') }}"></script>
        <script src="{{ asset('ninja/scripts/script.js') }}"></script>

        @livewireScripts

    </body>
</html>
