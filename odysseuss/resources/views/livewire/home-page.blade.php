<main>

    <section class="container-fluid banner-wrapper">
        <div class="container">
            <div class="box">
                <h2 class="heading-2">WE ARE ODYSSEUSS. WE ARE GROWTH ARCHITECTS</h2>
                <h1 class="heading-1">We aim to give companies fuel for sustainable growth</h1>
                <h2 class="heading-2">through consumer-centric strategy, memorable story-telling and strategic innovation</h2>
                <a href="{{ route('contact-us') }}" class="btn odys-black-btn">
                    Let's Connect
                    <img src={{ asset('odys_assets/images/icons/btn-arrow-white.svg') }} alt="">
                </a>
            </div>
        </div>
    </section>

    <section class="container-fluid whyus-wrapper" id="js_whyus">
        <div class="container">

            <div class="row">
                <div class="col">
                    <h3 class="heading animate__animated visibility">Why Us</h3>
                </div>
            </div>

            <div class="row">
                <div class="col">

                    <ul class="whyus-list">
                        <li class="list animate__animated visibility">

                            <div class="row">
                                <div class="col-3 flex-center">
                                    <span class="image-circle">
                                        <img src={{ asset('odys_assets/images/section-icons/whyus-1.png') }} alt="" srcset="">
                                    </span>
                                </div>
                                <div class="col-9">
                                    <span class="text blue">Effectively performed transformative, strategic, agile</span>
                                    <span class="text">innovation / renovation for incremental growth</span>
                                </div>
                            </div>

                        </li>
                        <li class="list animate__animated visibility">

                            <div class="row">
                                <div class="col-3 flex-center">
                                    <span class="image-circle">
                                        <img src={{ asset('odys_assets/images/section-icons/whyus-2.png') }} alt="" srcset="">
                                    </span>
                                </div>
                                <div class="col-9">
                                    <span class="text blue">Boosted relevance & sales via global or local</span>
                                    <span class="text">brand building / rejuvenation</span>
                                </div>
                            </div>

                        </li>
                        <li class="list animate__animated visibility">
                            <div class="row">
                                <div class="col-3 flex-center">
                                    <span class="image-circle">
                                        <img src={{ asset('odys_assets/images/section-icons/whyus-3.png') }} alt="" srcset="">
                                    </span>
                                </div>
                                <div class="col-9">
                                    <span class="text blue">Successfully done local, regional, European scale</span>
                                    <span class="text">business turnarounds from 20 to 800M $</span>
                                </div>
                            </div>
                        </li>
                    </ul>

                    <ul class="whyus-list">
                        <li class="list animate__animated visibility">
                            <div class="row">
                                <div class="col-3 flex-center">
                                    <span class="image-circle">
                                        <img src={{ asset('odys_assets/images/section-icons/whyus-4.png') }} alt="" srcset="">
                                    </span>
                                </div>
                                <div class="col-9">
                                    <span class="text blue">We’re all about results</span>
                                    <span class="text">and have made it happen before</span>
                                </div>
                            </div>
                        </li>
                        <li class="list animate__animated visibility">
                            <div class="row">
                                <div class="col-3 flex-center">
                                    <span class="image-circle">
                                        <img src={{ asset('odys_assets/images/section-icons/whyus-5.png') }} alt="" srcset="">
                                    </span>
                                </div>
                                <div class="col-9">
                                    <span class="text blue">We can activate a network</span>
                                    <span class="text">of high professionals task-purposed</span>
                                </div>
                            </div>
                        </li>
                    </ul>


                </div>
            </div>


        </div>
    </section>

    <section class="container-fluid growth-wrapper" id="js_growth">
        <div class="container">

            <div class="row">
                <div class="col">
                    <h2 class="sub-heading animate__animated visibility">OUR MODEL</h2>
                    <h2 class="heading animate__animated visibility">The Growth Wheel</h2>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <ul class="growth-highlights">
                        <li class="list animate__animated visibility"><span>Holistic / Modular Approach</span></li>
                        <li class="list animate__animated visibility"><span>Consumer centric approach</span></li>
                        <li class="list animate__animated visibility"><span>Aiming to respect, evolve & grow <br/>brand equity</span></li>
                    </ul>
                </div>
            </div>

            <div class="row">
                <div class="col">

                    <div class="growth-wheel">
                        <img class="growth_image_circle animate__animated visibility" src={{ asset('odys_assets/images/growth-wheel.svg') }} alt="">
                    </div>

                </div>
            </div>


        </div>
    </section>

    <section class="container-fluid service-wrapper" id="js_services">
        <div class="container">

            <div class="row">
                <div class="col">
                    <h2 class="sub-heading animate__animated visibility">WHAT WE DO</h2>
                    <h2 class="heading animate__animated visibility">Our Services</h2>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <ul class="service-list animate__animated visibility">

                        @if($services)
                            @foreach ($services as $service)
                                <li class="list">
                                    <div class="image-wrap" style="background-image: url({{ asset( 'storage/' . $service['service_list_image'] ) }})">
                                    </div>
                                    <div class="service-info">
                                        <h2 class="header">{{ $service['service_list_header'] }}</h2>
                                        {!! $service['service_list_description'] !!}
                                    </div>

                                </li>
                            @endforeach
                        @endif

                    </ul>
                </div>
            </div>

        </div>
    </section>

    <section class="container-fluid webelieve-wrapper" id="js_webelieve">
        <div class="container">

            <div class="row">
                <div class="col">
                    <h2 class="sub-heading animate__animated visibility">OUR COMPASS IS THE CONSUMER</h2>
                    <h2 class="heading animate__animated visibility">We Believe In</h2>
                </div>
            </div>

            <div class="row">
                <div class="col">

                    <ul class="highlights">
                        <li class="list animate__animated visibility">
                            <div class="image-wrap">
                                <div class="imagethmb">
                                    <div class="imagethmb_inner">
                                        <img src={{ asset('odys_assets/images/section-icons/webelieve-1.svg') }} alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="text-wrap">
                                <span>Winning & <br/>Growing</span>
                            </div>
                        </li>
                        <li class="list animate__animated visibility">
                            <div class="image-wrap">
                                <div class="imagethmb">
                                    <div class="imagethmb_inner">
                                        <img src={{ asset('odys_assets/images/section-icons/webelieve-2.svg') }} alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="text-wrap">
                                <span>Problem solving & <br/>creating value</span>
                            </div>
                        </li>
                        <li class="list animate__animated visibility">
                            <div class="image-wrap">
                                <div class="imagethmb">
                                    <div class="imagethmb_inner">
                                        <img src={{ asset('odys_assets/images/section-icons/webelieve-3.svg') }} alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="text-wrap">
                                <span>Sustainable competitive <br/>advantage</span>
                            </div>
                        </li>
                        <li class="list animate__animated visibility">
                            <div class="image-wrap">
                                <div class="imagethmb">
                                    <div class="imagethmb_inner">
                                        <img src={{ asset('odys_assets/images/section-icons/webelieve-4.svg') }} alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="text-wrap">
                                <span>Long term <br/>partnership</span>
                            </div>
                        </li>
                    </ul>

                </div>
            </div>


        </div>
    </section>

    <section class="container-fluid teams-wrapper" id="js_teams">
        <div class="container">

            <div class="row">
                <div class="col">
                    <h2 class="sub-heading animate__animated visibility">THE MINDS BEHIND THE MAGIC</h2>
                    <h2 class="heading animate__animated visibility">Our Executive Team</h2>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <ul class="team-list animate__animated visibility">

                        @if( $teams )

                            @foreach ( $teams as $team )

                                <li class="list">
                                    <div class="image-wrap">
                                        <img src={{ asset( 'storage/' . $team['image'] ) }} alt="" />
                                    </div>
                                    <div class="heading-wrap">
                                        <h3>{{ $team['name'] }}</h3>
                                    </div>
                                    <div class="company-wrap">
                                        <ul>
                                            @if( $team['companies'] )
                                                @foreach ( $team['companies'] as $company )
                                                <li><img src={{ asset( 'storage/' . $company ) }} alt=""></li>
                                                @endforeach
                                            @endif
                                        </ul>
                                    </div>
                                    <div class="info-wrap">
                                        {!! $team['description'] !!}
                                    </div>
                                </li>

                            @endforeach

                        @endif


                    </ul>
                </div>
            </div>

        </div>
    </section>

</main>
