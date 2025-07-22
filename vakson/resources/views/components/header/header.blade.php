<header class="header-wrapper">

    <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
        <div class="container-fluid">

            <div class="header-compnay-year-logo">
                <div>
                    <img src="{{ asset( 'vakson-assets/images/header-logo.png' ) }}" alt="" />
                </div>
            </div>

            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="{{ asset( 'storage/' . $site_data->logo ) }}" alt="Vakson Development LLC" />
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>


            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown" id="js_nav">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">Properties</a>

                        <div class="cu-dropdown">
                            <div class="nav-section">
                                <ul class="nav-list">
                                    <li class="nav active"><a href="{{ route('properties') }}">All Properties</a></li>
                                    <li class="nav">Current Projects</li>
                                    <li class="nav">Upcoming Projects</li>
                                </ul>
                            </div>
                            <div class="image-section">
                                <div class="image active">
                                    <div class="cu-dropdown-sub">
                                        <div class="sub-nav-section">
                                            <ul class="sub-nav-list">
                                                @foreach ( $site_nav as $nav )
                                                    <li class="nav">
                                                        <a href="{{ route('property', ['slug' => $nav['slug'] ]) }}">{{ $nav['nav_title'] }}</a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        <div class="sub-image-section">
                                            @foreach ( $site_nav as $nav )
                                                @if( !empty($nav['nav_image']) )
                                                    <div class="sub-image active"
                                                        style="background-image: url('{{ asset( 'storage/' . $nav['nav_image'] ) }}');">
                                                    </div>
                                                @else
                                                    <div class="sub-image active"
                                                        style="background-image: url('{{ asset('vakson-assets/images/nav/properties.jpg') }}');">
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>
                                </div>

                                <div class="image">
                                    <div class="cu-dropdown-sub">
                                        <div class="sub-nav-section">
                                            <ul class="sub-nav-list">
                                                @foreach ( $site_nav_latest as $nav )
                                                    <li class="nav">
                                                        <a href="{{ route('property', ['slug' => $nav['slug'] ]) }}">{{ $nav['nav_title'] }}</a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        <div class="sub-image-section">
                                            @foreach ( $site_nav_latest as $nav )
                                                <div class="sub-image active"
                                                    style="background-image: url('{{ asset( 'storage/' . $nav['nav_image'] ) }}');">
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>

                                <div class="image">
                                    <div class="cu-dropdown-sub">
                                        <div class="sub-nav-section">
                                            <ul class="sub-nav-list">
                                                <li class="nav">
                                                    <a href="#">Coming Soon</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="sub-image-section">
                                            <div class="sub-image active"
                                                style="background-image: url('{{ asset('vakson-assets/images/nav/comingsoon.png') }}');">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">About Us</a>

                        <div class="cu-dropdown">
                            <div class="nav-section">
                                <ul class="nav-list">
                                    <li class="nav active"><a href="{{ route('profile') }}">Company Profile</a></li>
                                    <li class="nav"><a href="{{ route('journey') }}">Our Journey</a></li>
                                </ul>
                            </div>
                            <div class="image-section">
                                <div class="image active"
                                    style="background-image: url('{{ asset('vakson-assets/images/nav/profile.jpg') }}');"></div>
                                <div class="image"
                                    style="background-image: url('{{ asset('vakson-assets/images/nav/our_journey.jpg') }}');">
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('values') }}">Values</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>

</header>
