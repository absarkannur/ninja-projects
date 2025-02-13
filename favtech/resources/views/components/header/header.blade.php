<header class="wrapper-header" itemscope itemtype="http://schema.org/LocalBusiness">
    <div class="top-bar">
        <div class="container-fluid">

            <span class="social-wrap">
                <span class="social-icon">
                    <svg width="16" height="16" class="fb">
                        <use xlink:href={{ asset('fav/images/svg-sprint.svg#social-facebook-shape') }}></use>
                    </svg>
                </span>

                <span class="social-icon">
                    <svg width="16" height="16" class="insta">
                        <use xlink:href={{ asset('fav/images/svg-sprint.svg#social-instagram-shape') }}></use>
                    </svg>
                </span>

                <span class="social-icon">
                    <a href="mailto:info@favtech.ae" style="font-size: 11px;">
                        <svg width="16" height="16" class="insta">
                            <use xlink:href={{ asset('fav/images/svg-sprint.svg#envelope-filled-shape') }}></use>
                        </svg>
                    </a>
                </span>

                <span class="social-icon">
                    <a href="tel:+971553351001" style="font-size: 11px;">
                        <svg width="16" height="16" class="insta">
                            <use xlink:href={{ asset('fav/images/svg-sprint.svg#phone-filled-shape') }}></use>
                        </svg>
                    </a>
                </span>

            </span>

            <x-top-nav/>

        </div>
    </div>
    <nav class="navbar navbar-expand-lg" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('home') }}" rel="noreferrer">
                <img class="site-header-logo" src={{ asset('/fav/images/logo.png') }} title="Favtech FZCO" alt="Favtech FZCO" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" href="{{ route('home') }}" rel="noreferrer">Home</a>
                    <a class="nav-link" href="{{ route('about-us') }}" rel="noreferrer">About Us</a>
                    <a class="nav-link" href="{{ route( 'products', ['slug'=>'all'] ) }}" rel="noreferrer">Products</a>
                    <a class="nav-link" href="{{ route('contact-us') }}" rel="noreferrer">Contact Us</a>
                    <a class="nav-link btn" href="{{ route('price-list') }}" rel="noreferrer">Price List</a>
                </div>
            </div>
        </div>
    </nav>
</header>
