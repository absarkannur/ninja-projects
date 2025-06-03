<div>

    <div class="common-hero" style="background-image: url('{{ asset('planet-assets/img/banner-images/banner-bg.jpg') }}');">
        <span class="layer"></span>
        <div class="container">
            <div class="row align-items-center text-center">
                <div class="col-lg-6 m-auto">
                    <div class="main-heading">
                        <h1>About Us</h1>
                        <div class="space16"></div>
                        <span class="span"><a href="{{ route('home') }}">Home</a>
                            <span class="arrow"><i class="fa-regular fa-angle-right"></i></span> About</span>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- About Us -->
    <div class="about2 about-page-sec sp">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about2-images">
                        <div class="image1">
                            <img src="{{ asset('planet-assets/img/about/about2-img1.png')}}" alt=""/>
                        </div>
                        <div class="image2">
                            <img src="{{ asset('planet-assets/img/about/about2-img2.png')}}" alt=""/>
                        </div>
                        <div class="image3">
                            <img src="{{ asset('planet-assets/img/about/about2-img3.png')}}" alt=""/>
                        </div>
                        <div class="counter-box">
                            <h3>{{ $site_data->year_experience }}</h3>
                            <p>Years Of <br> Experience</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="heading1">
                        <span class="span">About Us</span>
                        <h2>{{ $about_us->title }}</h2>
                        <div class="space16"></div>
                        {!! $about_us->content !!}
                        <div class="space30"></div>
                        <div class="button">
                            <a class="theme-btn1" href="{{ route('contact') }}">Get A Quote <span><i
                                        class="fa-solid fa-arrow-right"></i></span></a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Our Mission -->
    <div class="solution sp bg1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="heading1">
                        <span class="span">Our Mission</span>
                        <h2>{{ $mission->title }}</h2>
                        <div class="space16"></div>
                        <p>{!! $mission->content !!}</p>
                        <div class="space16"></div>

                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="solution-images">
                        <div class="image2">
                            <img src="{{ asset( 'planet-assets/img/about/about3-image1.png' ) }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Our Vision -->
    <div class="solution about-solution sp">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="images">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="image">
                                    <img src="{{ asset('planet-assets/img/about/visiton-img1.png') }}" alt="">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="space30"></div>
                                <div class="image">
                                    <img src="{{ asset('planet-assets/img/about/visiton-img2.png') }}" alt="">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="space30"></div>
                                <div class="image">
                                    <img src="{{ asset('planet-assets/img/about/visiton-img3.png') }}" alt="">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="heading1">
                        <span class="span">Our Vision</span>
                        <h2>{{ $vision->title }}</h2>
                        <div class="space16"></div>
                        {!! $vision->content !!}
                        <div class="space30"></div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Our Team -->
    <div class="team2 about-page-team sp bg1">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto text-center">
                    <div class="heading1">
                        <span class="span">Our Team</span>
                        <h2>Meet With Our Expert Team</h2>
                    </div>
                </div>
            </div>

            <div class="space30"></div>

            <div class="row">

                @if($teams)
                    @foreach ( $teams as $team )
                    <div class="col-lg-3 col-md-6">
                        <div class="team-box">
                            <div class="image-area">
                                <div class="image">
                                    <img src="{{ asset( 'storage/' . $team->employee_image ) }}" alt="">
                                </div>
                                <div class="icon-area">
                                    <ul>
                                        @if( $team->employee_linkedin )
                                        <li><a href="{{ $team->employee_linkedin }}"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                        @endif

                                        @if( $team->employee_twitter )
                                        <li><a href="{{ $team->employee_twitter }}"><i class="fa-brands fa-x-twitter"></i></a></li>
                                        @endif

                                        @if( $team->employee_facebook )
                                        <li><a href="{{ $team->employee_facebook }}"><i class="fa-brands fa-facebook"></i></a></li>
                                        @endif

                                        @if( $team->employee_instagram )
                                        <li><a href="{{ $team->employee_instagram }}"><i class="fa-brands fa-instagram"></i></a></li>
                                        @endif

                                    </ul>
                                </div>
                            </div>

                            <div class="space30"></div>
                            <div class="heading1">
                                <h4><a href="#">{{ $team->employee_name }}</a></h4>
                                <div class="space10"></div>
                                <p>{{ $team->employee_designation }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                @endif


            </div>

        </div>
    </div>

    <x:ui.cta />

</div>
