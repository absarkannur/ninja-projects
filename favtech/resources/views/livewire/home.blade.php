<section>
    
    <section class="container-banner">
        <div class="owl-carousel owl-theme banner_slider">
            @if( $banners )
                @foreach( $banners as $banner )
                <div class="item">
                    <div class="title">
                        <h1>{{ $banner['banner_title'] }}</h1>
                        <h6>{{ $banner['banner_subtitle'] }}</h6>
                    </div>
                    <img src={{ asset( 'storage/'. $banner['banner_image'] ) }} alt="" />
                </div>
                @endforeach
            @endif
        </div>
    </section>

    <section class="container-fluid home-info-wrapper">
        <div class="row justify-content-md-center">
            <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8">
                <ul class="info-list">
                    <li class="list">
                        <svg width="50" height="50">
                            <use xlink:href={{ asset('fav/images/svg-sprint.svg#car_clock-thick') }}></use>
                        </svg>
                        <div>
                            <span class="title">Fast Delivery</span>
                            <span class="sub-title">Same day shipping</span>
                        </div>
                    </li>
                    <li class="list">
                        <svg width="50" height="50">
                            <use xlink:href={{ asset('fav/images/svg-sprint.svg#worker-thick') }}></use>
                        </svg>
                        <div>
                            <span class="title">Professional team</span>
                            <span class="sub-title">Multilingual communication</span>
                        </div>
                    </li>
                    <li class="list">
                        <svg width="40" height="40">
                            <use xlink:href={{ asset('fav/images/svg-sprint.svg#shield-checkmark-shape') }}></use>
                        </svg>
                        <div>
                            <span class="title">Secure Shopping</span>
                            <span class="sub-title">Best security features</span>
                        </div>
                    </li>
                    <li class="list">
                        <svg width="40" height="40">
                            <use xlink:href={{ asset('fav/images/svg-sprint.svg#layers-shape') }}></use>
                        </svg>
                        <div>
                            <span class="title">Unlimited Stocks</span>
                            <span class="sub-title">Always physical stocks</span>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    
    <section class="container-fluid home-products-wrapper">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <h2 class="header">LATEST PRODUCTS</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <ul class="owl-carousel owl-theme product-list home_product_list">

                    @if( $products )
                        @foreach( $products as $product )
                        <li class="list-item">
                            <div class="image-wrapper">
                                <div class="imagethmb">
                                    <div class="imagethmb_inner">
                                        <img src={{ asset( 'storage/' . $product['product_image'] ) }} alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="details-wrapper">
                                <div class="product_name">
                                    <span class="tag">{{ $product['product_name'] }}</span>
                                    <span class="title">{{ $product['product_name'] }}+{{ $product['product_model'] }}+{{ $product['product_part_number'] }}</span>
                                </div>
                                <div class="product_enquiry">
                                    <a class="whatsapp" target="__blank" href="{{ 'https://wa.me/+971553351001/?text=I am interested with ' .  $product['product_model']. '-' . $product['product_part_number'] }}">
                                        <svg width="24" height="24">
                                            <use xlink:href={{ asset('fav/images/svg-sprint.svg#whatsapp-filled') }}></use>
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


    </section>

</section>
