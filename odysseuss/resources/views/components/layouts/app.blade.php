<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Odysseus Strategies' }}</title>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href={{ asset( 'odys_assets/css/bootstrap.min.css' ) }}>

        <link rel="stylesheet" href={{ asset( 'odys_assets/css/animate.min.css' ) }}>
        <link rel="stylesheet" href={{ asset( 'odys_assets/css/init.css' ) }}>
        <link rel="stylesheet" href={{ asset( 'odys_assets/css/styles.css' ) }}>


        @livewireStyles

    </head>
    <body>

        <x:inc.topbar />
        <x:header.header />

        {{ $slot }}

        <x:inc.connect />

        <x:footer.footer />

        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/animation.gsap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js"></script>

        <script src={{ asset( 'odys_assets/js/jquery.min.js' ) }}></script>
        <script src={{ asset( 'odys_assets/js/parallax.min.js' ) }}></script>
        <script src={{ asset( 'odys_assets/js/bootstrap.bundle.min.js' ) }}></script>
        <script src={{ asset( 'odys_assets/js/script.js' ) }}></script>

        <script>
            // Banner Image View
            $('.banner-wrapper').parallax({imageSrc:  "{{ asset('odys_assets/images/banner.png') }}" });
        </script>

        @livewireScripts

    </body>
</html>
