<section class="home-products-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <h2 class="header {{ $pos }}">{{ $title }}</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <ul class="owl-carousel owl-theme product-list home_product_list">

                    @if( $products )
                        @foreach( $products as $product )
                        <li class="list-item">
                            <a href={{ route('product', ['slug'=> $product['product_name'] .'~'. $product['product_model'] .'~'. $product['color_name'] .'~'. $product['product_parts'] .'~'. $product['product_part_number'] ]) }}>
                            @if ( $product->product_latest == 1)
                            <span class="new">LATEST</span>
                            @endif
                            <div class="wrp">
                                @if( $product->product_price_aed == 0 )
                                <span class="soldout"><em>SOLD OUT</em></span>
                                @endif
                                <div class="image-wrapper">
                                    <div class="imagethmb">
                                        <div class="imagethmb_inner">
                                            <img src="{{ asset( 'storage/' . $product['product_image'] ) }}"
                                                title="{{ $product['product_name'] . ' ' . $product['product_class'] . '-' . $product['product_model'] . '-' .$product['product_parts'] . ' + ' .  $product['color_name'] . ' + ' . $product['product_part_number'] }}"
                                                alt="{{ $product['product_name'] . ' ' . $product['product_class'] . '-' . $product['product_model'] . '-' .$product['product_parts'] . ' + ' .  $product['color_name'] . ' + ' . $product['product_part_number'] }}" />
                                        </div>
                                    </div>
                                </div>
                                <div class="price-wrapper">
                                    <span class="price"><em>AED</em> {{ $product['product_price_aed'] }}</span>
                                    <span class="price">${{ $product['product_price_usd'] }}</span>
                                </div>
                            </div>
                            <div class="details-wrapper">
                                <div class="product_name">
                                    <span class="title">{{ $product['product_name'] . ' ' . $product['product_class'] . '-' . $product['product_model'] }}</span>
                                    <span class="tag">{{ $product['product_parts'] . ' + ' .  $product['color_name'] . ' + ' . $product['product_part_number'] }}</span>
                                </div>
                            </div>
                            </a>
                            <div class="details-wrapper">
                                <div class="product_enquiry">
                                    <a class="whatsapp" target="__blank" href="{{ 'https://wa.me/+971553351001/?text=I am interested with ' . $product['product_name'] . ' ' . $product['product_class'] . '-' . $product['product_model'] . '-' .$product['product_parts'] . ' + ' .  $product['color_name'] . ' + ' . $product['product_part_number'] }}">
                                        <svg width="24" height="24">
                                            <use xlink:href="{{ asset('fav/images/svg-sprint.svg#whatsapp-filled') }}"></use>
                                        </svg>
                                        Quick Enquiry
                                    </a>
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
