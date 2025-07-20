<div>

    <section class="inner-page-banner vide-banner">
        <video class="our-jounery-video" id="video" poster="{{ asset( 'storage/' . $journey_data->banner_video_poster ) }}" muted autoplay loop>
            <source src="{{ asset( 'storage/' . $journey_data->banner_video ) }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="journey-banner-header">
            <h1>50 years</h1>
            <h2>OF OUR JOURNEY</h2>
        </div>
    </section>


    <section class="section section-inner-our-jounery">
        <div class="container">
            <div class="row">
                <div class="col">

                    <ul class="jounery-list">

                        @if ( $journy_list )
                            @foreach ( $journy_list as $journy)

                                <li class="list">
                                    <div class="image-wrap">
                                        <div class="imagethmb">
                                            <div class="imagethmb_inner">
                                                <img src="{{ asset( 'storage/' . $journy['journey_image'] ) }}" alt="" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="content-wrap">
                                        <span class="year">{{ $journy['journey_year'] }}</span>
                                        <span class="title">{{ $journy['journey_title'] }}</span>
                                        <span class="description">{{ $journy['journey_desc'] }}</span>

                                        <span></span>

                                        @if( $journy['journey_properties'][0]['image'] != '' )
                                            <span class="read_more js_journey_click">View More</span>
                                        @endif

                                    </div>

                                    <div class="journey-model">
                                        <div class="journey-m-wrap">
                                            <span class="close">x</span>

                                            <button class="js_jr_in_prev">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd"
                                                        d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8" />
                                                </svg>
                                            </button>
                                            <button class="js_jr_in_next">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd"
                                                        d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
                                                </svg>
                                            </button>

                                            <ul class="journey_slider owl-carousel owl-theme">

                                                @if ($journy['journey_properties'])
                                                    @foreach ( $journy['journey_properties'] as $journy )
                                                        <li class="list">
                                                            <div class="image-wrap">
                                                                <div class="imagethmb">
                                                                    <div class="imagethmb_inner">
                                                                        <img src="{{ asset( 'storage/' . $journy['image'] ) }}" alt="" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="content-wrap">
                                                                <span class="year">{{ $journy['year'] }}</span>
                                                                <span class="title">{{ $journy['title'] }}</span>
                                                                <span class="location">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                                        fill="currentColor" class="bi bi-geo-alt-fill"
                                                                        viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6" />
                                                                    </svg>
                                                                    <em>{{ $journy['location'] }}</em>
                                                                </span>
                                                                <span class="description">{{ $journy['desc'] }}</span>
                                                            </div>
                                                        </li>
                                                    @endforeach
                                                @endif
                                            </ul>

                                        </div>
                                    </div>

                                </li>

                            @endforeach
                        @endif

                    </ul>

                </div>
            </div>
        </div>
    </section>

    @script
        <script>
            $('.js_journey_click').click(function() {

                $(this).parent().parent().find('.journey-model').show();

                var owl = $(this).parent().parent().find('.journey-model').find('.journey_slider').owlCarousel({
                    loop: true,
                    margin: 0,
                    nav: false,
                    dots: false,
                    items: 1,
                    autoplay: true,
                    autoplayTimeout: 2000,
                });

                $('.js_jr_in_prev').click(function() {
                    owl.trigger("prev.owl.carousel");
                });

                $('.js_jr_in_next').click(function() {
                    owl.trigger("next.owl.carousel");
                });


            });

            $('.close').click(function() {
                $('.journey-model').hide();
            });
        </script>
    @endscript

    <section class="section-inner-our-jounery-excellence">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8">
                    <h2 class="title">{{ $journey_data->excellence_title }}</h2>
                    <h3 class="desc">{{ $journey_data->excellence_desc }}</h3>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-inner-our-jounery-excellence-list">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <ul class="list">

                        @if ($journey_data->excellence)
                            @foreach ( $journey_data->excellence as $excellence )
                                <li class="item"
                                    style="background-image: url('{{ asset( 'storage/' . $excellence['image'] ) }}');">
                                    <span class="title">{{ $excellence['title'] }}</span>
                                </li>
                            @endforeach
                        @endif


                    </ul>
                </div>
            </div>
        </div>
    </section>

</div>
