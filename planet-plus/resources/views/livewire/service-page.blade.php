<div>
    <div class="common-hero"
        style="background-image: url('{{ asset( 'planet-assets/img/banner-images/service.jpg' ) }}');">
        <span class="layer"></span>
        <div class="container">
            <div class="row align-items-center text-center">
                <div class="col-lg-6 m-auto">
                    <div class="main-heading">

                        <h1>{{ $service->service_title }}</h1>
                        <div class="space16"></div>
                        <span class="span">
                            <a href="index.html">Home</a>
                            <span class="arrow">
                                <i class="fa-regular fa-angle-right"></i>
                            </span> Our Services
                            <span class="arrow">
                                <i class="fa-regular fa-angle-right"></i>
                            </span> {{ $service->service_title }}
                        </span>
                    </div>
                </div>

            </div>
        </div>
    </div>

        <div class="service-details-area-all sp">
        <div class="container">
            <div class="row">

                <div class="col-lg-8 details-right-space">
                    <div class="service-details-post">
                        <article>
                            <div class="details-post-area">
                                {!! tiptap_converter()->asHTML($service->service_content) !!}
                            </div>
                        </article>
                    </div>
                </div>

                <div class="col-lg-4">

                    <div class="sidebar-box-area sidebar-bg mb-40">
                        <h3>Our Services</h3>
                        <ul class="features-list">
                            @if($service_list)
                                @foreach ( $service_list as $serv )
                                    @if( $service['service_slug'] != $serv->service_slug )
                                    <li><a href="{{ route( 'service', ['slug' => $serv->service_slug] ) }}">{{ $serv->service_title }}<span><i
                                            class="fa-regular fa-angle-right"></i></span></a></li>
                                    @endif
                                @endforeach
                            @endif
                        </ul>
                    </div>

                    @if( $service->service_brochure )
                    <div class="sidebar-box-area sidebar-bg mb-40">
                        <h3>Download Brochure</h3>
                        <p>With a focus on excellence &amp; commitment to exceeding expectations, our experienced
                            team is here to empower Solution.</p>
                        <div class="download-btns">
                            <a class="daownload1" download href="{{ asset( 'storage/'. $service->service_brochure ) }}">PDF Download</a>
                        </div>
                    </div>
                    @endif

                </div>

            </div>
        </div>
    </div>

    <x:ui.cta />

</div>
