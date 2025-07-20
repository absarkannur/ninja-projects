<div>

    <section class="banner-wrapper">
        <video class="bannger-video" poster="{{ asset( 'storage/' . $home_data->banner_video_poster ) }}" playsinline muted autoplay loop>
            <source src="{{ asset( 'storage/' . $home_data->banner_video ) }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>

        <div class="container">
            <div class="row">
                <div class="col">

                    <div class="banner-content">
                        <h1 class="title">{{ $home_data->banner_title }}</h1>
                        <h2 class="sub-title">{{ $home_data->banner_sub_title }}</h2>
                        <button class="default-btn gold">
                            <a href="{{ $home_data->banner_url }}">
                                <div class="text" style="margin: 0 0.9em 0 0.9em">Read More</div>
                            </a>
                        </button>
                    </div>

                </div>
            </div>
        </div>

        <div class="scroll-indicator">
            <div class="scroll-text">Scroll Down</div>
            <div class="scroll-line"></div>
        </div>

    </section>

    <section class="section section-home-about">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="about-content">
                        <h3 class="sub-title">{{ $home_data->about_title }}</h3>
                        <h2 class="title">{!! $home_data->about_sub_title !!}</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="about-numbers">
                        <ul class="number-list">
                            @if( $home_data->about_numbers )
                                @foreach ( $home_data->about_numbers as $key => $numbers )
                                    <li class="list">
                                        <span class="icon">
                                            <img src="{{ asset( 'storage/' . $numbers['icon'] ) }}" alt=""/>
                                        </span>
                                        <span class="value" id="num{{ $key+1 }}" data-value="{{ $numbers['value'] }}">0</span>
                                        <span class="title">{{ $numbers['title'] }}</span>
                                    </li>
                                @endforeach
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Projects 1 --}}
    {{-- Projects 2 --}}

    <section class="section section-home-journey-us">

        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-sm-12 col-md-12 col-lg-9 col-xl-9">
                    <div class="row history">
                        <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">
                            <img class="logo" src="{{ asset('vakson-assets/images/header-logo.png') }}" alt="" />
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8">
                            <h3>{{ $home_data->journey_sub_title }}</h3>
                            <p>{{ $home_data->journey_desc }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="space60">&nbsp;</div>
        </div>

        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-sm-12 col-md-12 col-lg-9 col-xl-9">
                    <h2 class="title">{!! $home_data->journey_title !!}</h2>
                </div>
            </div>
            <div class="space60">&nbsp;</div>
        </div>

    </section>

    <div class="section-home-footer-video" id="footer_video">
        <video class="footer-video" id="video" poster="{{ asset('storage/' . $home_data->footer_video_poster ) }}" muted autoplay loop>
            <source src="{{ asset('storage/' . $home_data->footer_video ) }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>

</div>
