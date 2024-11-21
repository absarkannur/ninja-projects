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
</main>
