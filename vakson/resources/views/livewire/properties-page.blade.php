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
</div>
