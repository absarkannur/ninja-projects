<section class="container-fluid header-wrapper">
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">

            <a class="navbar-brand" href="#">
                <img src={{ asset( 'odys_assets/images/logo.png' ) }} alt="Odysseus Strategies">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNavAltMarkup" style="justify-content: end;">
                <div class="navbar-nav">

                    <a class="nav-link" href="{{ route('home') }}">Home</a>
                    <a class="nav-link" href="{{ route('services') }}">Services</a>
                    <a class="nav-link" href="{{ route('about-us') }}">About</a>
                    <a class="nav-link"></a>
                    {{-- <a class="nav-link" href="{{ route('home') }}">Case Studies</a> --}}


                    <a class="nav-link social" href="" target="_blank">
                        <div class="social-link fb">
                            <img src={{ asset( 'odys_assets/images/icons/facebook.png' ) }} alt="">
                        </div>
                    </a>
                    <a class="nav-link social" href="" target="_blank">
                        <div class="social-link in">
                            <img src={{ asset( 'odys_assets/images/icons/insta.png' ) }} alt="">
                        </div>
                    </a>

                    <a class="nav-link no-padding" href="{{ route('contact-us') }}">
                        <button class="odys-blue-btn">
                            Contact Us
                            <img src={{ asset('odys_assets/images/icons/btn-arrow-dark.svg') }} alt="">
                        </button>
                    </a>
                </div>
            </div>

        </div>
    </nav>
</section>
