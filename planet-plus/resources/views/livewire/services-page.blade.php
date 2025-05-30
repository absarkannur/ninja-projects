<div>
    <div class="common-hero"
        style="background-image: url('{{ asset('planet-assets/img/banner-images/services.jpg') }}');">
        <span class="layer"></span>
        <div class="container">
            <div class="row align-items-center text-center">
                <div class="col-lg-6 m-auto">
                    <div class="main-heading">
                        <h1>Our Services</h1>
                        <div class="space16"></div>
                        <span class="span"><a href="{{ route('home') }}">Home</a>
                            <span class="arrow"><i class="fa-regular fa-angle-right"></i></span> Our Services</span>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="space100"></div>

        <div class="servcie2 service-page-sec">
        <div class="container">
            <div class="row">

                @if( $services )
                    @foreach ( $services as $service )
                        <div class="col-lg-4 col-md-6">
                            <div class="">
                                <div class="servcie2-box">
                                    <div class="icon">
                                        <img src="{{ asset('storage/'. $service['service_icon'] ) }}" alt="{{ $service['service_title'] }}" />
                                    </div>
                                    <a href="{{ route('service' , ['slug'=> $service['service_slug'] ] ) }}" class="arrow"><i class="fa-solid fa-arrow-right"></i></a>
                                    <div class="heading1">
                                        <h4><a href="{{ route('service' , ['slug'=> $service['service_slug'] ] ) }}">{{ $service['service_title'] }}</a></h4>
                                        <div class="space16"></div>
                                        <p><a href="{{ route('service' , ['slug'=> $service['service_slug'] ] ) }}">{!! str($service['service_short_description'])->sanitizeHtml() !!}</a></p>
                                        <br>
                                        <div class="space16"></div>
                                        <a href="{{ route('service' , ['slug'=> $service['service_slug'] ] ) }}" class="learn">Learn More <span><i
                                                    class="fa-solid fa-arrow-right"></i></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif

            </div>
        </div>
    </div>

    <div class="space100"></div>

    <x:ui.cta />


</div>
