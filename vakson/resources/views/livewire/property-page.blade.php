<div>

    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/css/lightbox.min.css">


    @if( !empty($property_data->banner_video) )
        <section class="inner-page-banner vide-banner">
            <video class="property-video" id="video" poster="{{ asset( 'storage/' . $property_data->banner_video_poster ) }}" muted autoplay loop>
                <source src="{{ asset( 'storage/' . $property_data->banner_video ) }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </section>
    @else
        <div style="height: 100px;">&nbsp;</div>
    @endif


    @if($property_data->template === 1)
        <section class="section-home-latest-project">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                        <div class="property-info-wrap">
                            <h2 class="title light">{{$property_data->title}}</h2>
                            <h3 class="sub-title light">{{$property_data->sub_title}}</h3>
                            <p class="description light">{{$property_data->description}}</p>

                            @if(!empty($property_data->amenities))
                                <ul class="amenities_list">
                                    @foreach ( $property_data->amenities as $amenities )
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
                                @if(!empty($property_data->floor_paln_pdf))
                                    <a href="{{ asset( 'storage/' . $property_data->floor_paln_pdf ) }}" download>
                                        <button class="default-btn small dark">
                                            <span class="text" style="margin: 0 0.9em 0 0.9em">Download floor plan</span>
                                        </button>
                                    </a>
                                @endif
                                @if(!empty($property_data->video))
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
                                    <source src="{{ asset( 'storage/' . $property_data->video ) }}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6"></div>
                </div>
            </div>

            <div class="property-carousel-bg owl-carousel owl-theme">
                @foreach ( $property_data->image_slider as $slider )
                    <div class="item" style="background-image: url('{{ asset( 'storage/' . $slider['image'] ) }}');">
                    </div>
                @endforeach
            </div>

        </section>
    @else
        <section class="section-old-home-latest-project">
            <div class="property-info-wrap">
                <h2 class="title light">{{$property_data->title}}</h2>
                <h3 class="sub-title light">{{$property_data->sub_title}}</h3>
                <p class="description light">{{$property_data->description}}</p>

                @if(!empty($property_data->amenities))
                <ul class="amenities_list">
                    @foreach ( $property_data->amenities as $amenities )
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
                    @if(!empty($property_data->floor_paln_pdf))
                        <a href="{{ asset( 'storage/' . $property_data->floor_paln_pdf ) }}" download>
                            <button class="default-btn small dark">
                                <span class="text" style="margin: 0 0.9em 0 0.9em">Download floor plan</span>
                            </button>
                        </a>
                    @endif
                    @if(!empty($property_data->video))
                        <button class="default-btn small light js_video_btn">
                            <span class="text" style="margin: 0 0.9em 0 0.9em">View Video</span>
                        </button>
                    @endif
                </div>

            </div>
            <div class="property-slider-wrap">
                <div class="home-slider owl-carousel owl-theme">
                    @foreach ( $property_data->image_slider as $slider )
                        <img src="{{ asset( 'storage/' . $slider['image'] ) }}" alt="" />
                    @endforeach
                </div>

                <span class="next js_next">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                        class="bi bi-arrow-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
                    </svg>
                </span>
                <span class="prev js_prev">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                        class="bi bi-arrow-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8" />
                    </svg>
                </span>

            </div>
        </section>
    @endif

    @if(empty($property_data->location_description))
        @if(!empty($property_data->location_image))
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
                                <a href="{{ $property_data->location_google_map }}" target="_blank">
                                    <img src="{{ asset( 'storage/' . $property_data->location_image ) }}" alt="">
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

                                    @if(!empty($property_data->convenient_location_distance))
                                        @foreach ( $property_data->convenient_location_distance as $key => $nearby )
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
                                    <a href="{{ $property_data->location_google_map }}" target="_blank">
                                        <img src="{{ asset( 'storage/' . $property_data->location_image ) }}" alt=""
                                            style="width: 100%;height: auto;" />
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                        <div class="flex"
                            style="height: 100%;display: flex;align-items: center;justify-content: center;flex-wrap: wrap;flex-direction: column;">
                            <p style="color: #fff;">{{ $property_data->location_description }}</p>
                            <a href="https://www.rivaresidence.net/">
                                <button class="default-btn light full-width" style="width: 200px;">Know More</button>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    @endif

    @if(!empty($property_data->floor_plans))
        <section class="section section-home-project-plans">
            <div class="container">
                <div class="row">
                    <div class="col">

                        <div class="tabs">

                            <ul class="tab-header">
                                @foreach ( $property_data->floor_plans as $key => $plans )
                                    <li class="item {{ ($key == 0) ? 'active' : '' }}">{{ $plans['tab_header'] }}</li>
                                @endforeach
                            </ul>
                            <ul class="tab-content">
                                @foreach ( $property_data->floor_plans as $key => $plans )
                                    <li class="item {{ ($key == 0) ? 'active' : '' }}">
                                        <div class="owl-carousel owl-theme js_plans_carousel">
                                            @foreach ( $plans['plan_image'] as $image )
                                                <div class="image_wrap">
                                                    <div class="imagethmb">
                                                        <div class="imagethmb_inner">
                                                            <img src="{{ asset( 'storage/' . $image['p_image'] ) }}" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    @endif

    @if(!empty($property_data->gallery))
        <section class="section section-home-project-plans">
            <div class="container">
                <div class="row">
                    <div class="col">

                        <div class="tabs">

                            <ul class="tab-header">
                                @foreach ( $property_data->gallery as $key => $plans )
                                    <li class="item {{ ($key == 0) ? 'active' : '' }}">{{ $plans['tab_header'] }}</li>
                                @endforeach
                            </ul>
                            <ul class="tab-content">
                                @foreach ( $property_data->gallery as $key => $plans )
                                    <li class="item {{ ($key == 0) ? 'active' : '' }}">
                                        <ul class="image-gallery">
                                            @foreach ( $plans['gallery_image'] as $image )
                                                <a href="{{ asset( 'storage/' . $image['g_image'] ) }}"
                                                    data-lightbox="{{ asset( 'storage/' . $image['g_image'] ) }}" data-title="">
                                                    <li class="image"
                                                        style="background-image: url('{{ asset( 'storage/' . $image['g_image'] ) }}');">
                                                    </li>
                                                </a>
                                            @endforeach
                                        </ul>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    @endif


    <x:widgets.property_contact_footer />
    <x:widgets.property_contact_modal />


    <script src="//cdnjs.cloudflare.com/ajax/libs/prism/1.16.0/prism.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/prism/1.16.0/plugins/unescaped-markup/prism-unescaped-markup.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/js/lightbox-plus-jquery.min.js"></script>

    <script>

        $(function() {

            lightbox.option({
                'resizeDuration': 200,
                'wrapAround': true
            });

            var home_owl = $(".home-slider").owlCarousel({
                loop: true,
                margin: 0,
                nav: false,
                dots: false,
                items: 1,
                autoplay: true,
                autoplayTimeout: 2000,
                autoplayHoverPause: false,
            });

            $(".js_next").click(function () {
                home_owl.trigger("next.owl.carousel");
            });
            $(".js_prev").click(function () {
                home_owl.trigger("prev.owl.carousel");
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
                $('#js_property_video_model').show();
            })

            $('#js_property_video_model .close').click(function() {
                $('#js_property_video_model').hide();
            });

            $('.js_contact-model').click(function() {
                $('.contact-form-model').show();
            });

            $('.contact-form-model .close').click(function() {
                $('.contact-form-model').hide();
            });

            // Tabs carousel
            var owl_plan = $('.js_plans_carousel').each(function() {
                $(this).owlCarousel({
                    loop: true,
                    margin: 0,
                    nav: true,
                    dots: false,
                    items: 1,
                    autoplay: false,
                    autoplayTimeout: 3000,
                    autoplayHoverPause: false,
                });
            });


            // tabs
            $('.tabs').each(function() {

                var self = $(this);

                self.find('.tab-header .item').click(function() {
                    var index = $(this).index();

                    self.find('.tab-header .item').removeClass('active');
                    self.find('.tab-header .item').eq(index).addClass('active');

                    self.find('.tab-content .item').removeClass('active')
                    self.find('.tab-content .item').eq(index).addClass('active');

                });

            });

            // Tabs End



        });
    </script>

</div>
