<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">

        <a class="navbar-brand">
            <img src={{ asset( 'ozon/images/ozon-logo.png' )}} alt="OZON Pharmaceuticals">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavAltMarkup" style="justify-content: end;">
            <div class="navbar-nav">
                <a class="nav-link" aria-current="page" href="{{ route('home') }}">Home</a>
                <a class="nav-link" href="{{ route('about') }}">About Us</a>
                <a class="nav-link">Facilities</a>
                <a class="nav-link">Products</a>
                <a class="nav-link">Sales & Distribution</a>

                <span class="social-icon-group">
                    <a class="nav-link social" href="https://www.facebook.com/0" target="_blank">
                        <div class="social-link">
                            <img src={{ asset("ozon/icons/facebook.png") }} alt="">
                        </div>
                    </a>
                    <a class="nav-link social" href="https://www.instagram.com/" target="_blank">
                        <div class="social-link">
                            <img src={{ asset("ozon/icons/insta.png") }} alt="">
                        </div>
                    </a>
                </span>

                <a class="nav-link no-padding">
                    <button class="oz-button-default p-l-10 center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                            <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z"/>
                        </svg>
                        &nbsp;Contact Us
                    </button>
                </a>
            </div>
        </div>

    </div>
</nav>
