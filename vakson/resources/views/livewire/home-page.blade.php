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
                                        <span class="value"><span id="num{{ $key+1 }}" data-value="{{ $numbers['value'] }}">0</span>{{ $numbers['suffix'] }}</span>
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


    @foreach ( $properties as $key => $properties)

        <section class="section-home-latest-project" id="project_{{ $key }}">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                        <div class="property-info-wrap">
                            <h2 class="title light">{{$properties['title']}}</h2>
                            <h3 class="sub-title light">{{$properties['sub_title']}}</h3>
                            <p class="description light">{{$properties['description']}}</p>

                            @if(!empty($properties['amenities']))
                                <ul class="amenities_list">
                                    @foreach ( $properties['amenities'] as $amenities )
                                        <li class="list">
                                            <img src="{{ asset( 'storage/' . $amenities['icon'] ) }}" alt="" />
                                            <span class="title light">{{ $amenities['title'] }}</span>
                                        </li>
                                    @endforeach
                                </ul>
                            @endif

                            <div class="button-wrap">
                                <button class="default-btn small darker js_contact-model">
                                    <span class="text" style="margin: 0 0.9em 0 0.9em">Check Availability</span>
                                </button>
                                @if(!empty($properties['floor_paln_pdf']))
                                    <a href="{{ asset( 'storage/' . $properties['floor_paln_pdf'] ) }}" download>
                                        <button class="default-btn small dark">
                                            <span class="text" style="margin: 0 0.9em 0 0.9em">Download floor plan</span>
                                        </button>
                                    </a>
                                @endif
                                @if(!empty($properties['video']))
                                    <button class="default-btn small light js_video_btn">
                                        <span class="text" style="margin: 0 0.9em 0 0.9em">View Video</span>
                                    </button>
                                @endif
                            </div>

                        </div>
                        <div class="property-video-model" id="js_property_video_model">
                            <div class="video-wrap">
                                <span class="close">x</span>
                                <video class="property-video" id="video" controls muted autoplay loop>
                                    <source src="{{ asset( 'storage/' . $properties['video'] ) }}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-7 col-xl-7"></div>
                </div>
            </div>
            <div class="property-carousel-bg owl-carousel owl-theme">
                @foreach ( $properties['image_slider'] as $slider )
                    <div class="item" style="background-image: url('{{ asset( 'storage/' . $slider['image'] ) }}');">
                    </div>
                @endforeach
            </div>
        </section>

        @if(empty($properties['location_description']))
            @if(!empty($properties['location_image']))
                <section class="section section-home-project-locaion" style="background-color: #363437;">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <h3>Convenient Location</h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="image-wrap">
                                    <a href="{{ $properties['location_google_map'] }}" target="_blank">
                                        <img src="{{ asset( 'storage/' . $properties['location_image'] ) }}" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            @endif
        @else
            <section class="section section-home-project-locaion">
                <div class="container">

                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                            <div class="row">
                                <div class="col">
                                    <h3>Convenient Location</h3>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                    <ul class="near-by-locations">

                                        @if(!empty($properties['convenient_location_distance']))
                                            @foreach ( $properties['convenient_location_distance'] as $key => $nearby )
                                                <li class="list">
                                                    <h3><em id="l_num{{ $key+1 }}" data-value="{{ $nearby['value'] }}">0</em> {{ $nearby['suffix'] }}</h3>
                                                    <p>{{ $nearby['title'] }}</p>
                                                </li>
                                            @endforeach
                                        @endif

                                    </ul>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <div class="image-wrap">
                                        <a href="{{ $properties['location_google_map'] }}" target="_blank">
                                            <img src="{{ asset( 'storage/' . $properties['location_image'] ) }}" alt=""
                                                style="width: 100%;height: auto;" />
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                            <div class="flex"
                                style="height: 100%;display: flex;align-items: center;justify-content: center;flex-wrap: wrap;flex-direction: column;">
                                <p style="color: #fff;">{{ $properties['location_description'] }}</p>
                                <a href="https://www.rivaresidence.net/">
                                    <button class="default-btn light full-width" style="width: 200px;">Know More</button>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
        @endif

    @endforeach


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

    <script>
        $(function() {

            // Window Scroll animation
            $(window).scroll(function() {
                var scroll = $(this).scrollTop();
                var firstTop = $(".banner-wrapper").offset().top;

                var shiftDistance = firstTop * 0.5;
                $(".banner-wrapper").css(
                    "transform",
                    "translateY(-" + shiftDistance + "px)"
                );
            });

            $('.property-carousel-bg').each(function() {
                $(this).owlCarousel({
                    loop: true,
                    margin: 0,
                    nav: true,
                    dots: false,
                    items: 1,
                    autoplay: true,
                    autoplayTimeout: 3000,
                    autoplayHoverPause: false,
                });
            });

            $('.js_video_btn').click(function() {
                $(this).parent().parent().parent().find('#js_property_video_model').show();
            });

            $('#js_property_video_model .close').click(function() {
                $(this).parent().parent().hide();
            });


            $('.js_contact-model').click(function() {
                $('.contact-form-model').show();
            });

            $('.contact-form-model .close').click(function() {
                $('.contact-form-model').hide();
            });


        });
    </script>

</div>
