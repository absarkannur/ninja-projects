<main>
    <section class="container-fluid services-wrapper">
        <div class="container">

            <div class="row">
                <div class="col">
                    <h1 class="heading-inner">Our Services</h1>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    @if($services)
                    <ul class="service-list">
                        @foreach ( $services as $service )
                            <li class="list" style="background-image: url({{ asset( 'storage/' . $service['service_short_image'] ) }})">
                                <div class="row">
                                    <div class="col-sm-12 col-md-8 col-lg-8 col-xl-8">
                                        <h2 class="header">{{ $service['service_list_header'] }}</h2>
                                        <p class="text">{{ $service['service_short_description'] }}</p>
                                    </div>
                                    <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 flex-center">
                                        <a class="nav-link no-padding" href="{{ route( 'service', [ $service->service_slug ] ) }}">
                                            <button class="odys-blue-btn">
                                                Learn More
                                                <img src={{ asset('odys_assets/images/icons/btn-arrow-dark.svg') }} alt="">
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                    @endif
                </div>
            </div>

        </div>
    </section>
</main>
