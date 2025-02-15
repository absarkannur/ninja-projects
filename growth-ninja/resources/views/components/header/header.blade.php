<section class="nav-wrapper">
    <nav class="navbar navbar-dark bg-dark navbar-expand-lg fixed-top">
        <div class="container">
            <div class="box">
                <a class="navbar-brand" href="{{ route('home') }}">
                    <img
                        alt="Logo" height="35"
                        class="d-inline-block align-text-top" src="{{ asset('ninja/images/logo_nav.png') }}" alt="Growth Ninja" title="Growth Ninja" />
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>

            <div class="collapse navbar-collapse aligb-navbar" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Digital Marketing Services
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('home').'#seo' }}">SEO & SEM</a></li>
                            <li><a class="dropdown-item" href="{{ route('home').'#influencer-marketing' }}">Influencer marketing</a></li>
                            <li><a class="dropdown-item" href="{{ route('home').'#lead-generation' }}">Lead Generation & Sales Campaigns</a></li>
                            <li><a class="dropdown-item" href="{{ route('home').'#brand-awareness' }}">Brand Awareness & Visibility</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('portfolio') }}">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home').'#contact' }}" >Contact Us</a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>
</section>
