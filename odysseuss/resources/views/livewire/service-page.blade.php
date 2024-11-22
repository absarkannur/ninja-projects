<main class="service-inner-wrapper">

    <section class="container-fluid innerpage-banner" style="background-image: url({{ asset( 'storage/' . $service['service_short_image'] ) }})">
        <div class="container">
            <h1 class="heading-inner">{{ $service['service_list_header'] }}</h1>
        </div>
    </section>

    <section class="container-fluid content-wrapper">
        <div class="container">

            <div class="row">
                <div class="col">
                    {!! $service['service_inner_page'] !!}
                </div>
            </div>
        </div>
    </section>

    @if($service_list)
        <ul class="service_list">
            @foreach ( $service_list as $service )
            <li class="list">
                <div class="container">
                    <h4>{{ $service['service_category_name'] }}</h4>
                    <ul>
                        @foreach ( $service['service_contents'] as $content )
                        <li>
                            <img src={{ asset( 'storage/'. $content['service_category_contect_image'] ) }} alt="">
                            <div>
                                {!! $content['service_category_contect_description'] !!}
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </li>
            @endforeach
        </ul>
    @endif

</main>
