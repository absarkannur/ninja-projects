<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="{{ $header_data->description }}"/>
        <meta name="keywords" content="{{ implode(',', $header_data->keywords ) }}">

        <title>Favtech FZCO | Service Pack Lcd - Original Samsung &amp; Xiaomi &amp; iPhone Huawei  Mobile Spare Parts</title>
        <link rel="icon" type="image/x-icon" href={{ asset( 'fav/images/favicon.ico' ) }} >
        <link rel="canonical" href="{{ url()->current() }}" />

        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

        <!-- Site Style -->
        <link rel="stylesheet" href={{ asset( 'fav/bootstrap.min.css?v=2232323232323' ) }}>
        <link rel="stylesheet" href={{ asset( 'fav/assets/owl.carousel.min.css?v=2232323232323' ) }}>
        <link rel="stylesheet" href={{ asset( 'fav/assets/owl.theme.default.min.css?v=2232323232323' ) }}>
        <link rel="stylesheet" href={{ asset( 'fav/assets/owl.theme.green.min.css?v=2232323232323' ) }}>
        <link rel="stylesheet" href={{ asset( 'fav/select2.min.css?v=2232323232323' ) }}>
        <link rel="stylesheet" href={{ asset( 'fav/init.css?v=2232323232323' ) }}>
        <link rel="stylesheet" href={{ asset( 'fav/site.css?v=2232323232323' ) }}>

        @livewireStyles

        {!! $header_data->scripts !!}

    </head>
    <body>

        <x:header.header />

        {{ $slot }}

        <x:footer.footer />

        <!-- Scripts -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src={{ asset( 'fav/bootstrap.bundle.min.js?v=h5s8d8' ) }}></script>
        <script src={{ asset( 'fav/owl.carousel.min.js?v=h5s8d8' ) }}></script>
        <script src={{ asset( 'fav/select2.min.js?v=h5s8d8' ) }}></script>
        <script src={{ asset( 'fav/script.js?v=h5s8d8' ) }}></script>

        @livewireScripts

    </body>
</html>
