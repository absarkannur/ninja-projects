<div>
    <div style="height: 100px;">&nbsp;</div>

    <section class="section section-inner-all-properties">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="top-header">LEASING</h2>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col">

                    <ul class="properties_list">
                        @if( $lease_properties )
                            @foreach ( $lease_properties as $property )
                                <li class="property">
                                    <div class="image-wrap"
                                        style="background-image: url('{{ asset( 'storage/' . $property['thumbnail'] ) }}');">
                                    </div>
                                    <div class="content-wrap">
                                        <h3 class="title">{{ $property['title'] }}</h3>
                                        <span class="status" style="text-transform: capitalize">{{ $property['status'] }}</span>
                                        <a href="{{ route( 'property', ['slug' => $property['slug'] ] ) }}">
                                            <span class="view-more">View More</span>
                                        </a>
                                    </div>
                                </li>
                            @endforeach
                        @endif
                    </ul>

                </div>
            </div>
        </div>
        <div style="height: 100px;">&nbsp;</div>
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="top-header">FOR SALE</h2>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col">

                    <ul class="properties_list">
                        @if( $sale_properties )
                            @foreach ( $sale_properties as $property )
                                <li class="property">
                                    <div class="image-wrap"
                                        style="background-image: url('{{ asset( 'storage/' . $property['thumbnail'] ) }}');">
                                    </div>
                                    <div class="content-wrap">
                                        <h3 class="title">{{ $property['title'] }}</h3>
                                        <span class="status" style="text-transform: capitalize">{{ $property['status'] }}</span>
                                        <a href="{{ route( 'property', ['slug' => $property['slug'] ] ) }}">
                                            <span class="view-more">View More</span>
                                        </a>
                                    </div>
                                </li>
                            @endforeach
                        @endif
                    </ul>

                </div>
            </div>
        </div>
    </section>

    <section class="section section-home-journey-us">

        <div class="container-fluid j-slider" style="position: relative;">
            <div class="row">
                <div class="col">

                    <button class="js_jr_prev">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-arrow-left" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8" />
                        </svg>
                    </button>
                    <button class="js_jr_next">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-arrow-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
                        </svg>
                    </button>

                    <div class="journey-slider owl-carousel owl-theme">
                        @foreach ( $journy_list as $list )
                            <div class="item">
                                <img src="{{ asset( 'storage/' . $list->image ) }}"
                                    alt="" />
                                <span>{{ $list->title }}</span>
                            </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </section>

</div>
