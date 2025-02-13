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
                    <img src="{{ asset( 'storage/'. $banner['banner_image'] ) }}" title={{ $banner['banner_title'] }} alt="{{ $banner['banner_title'] }}" />
                </div>
                @endforeach
            @endif
        </div>
    </section>

    <section class="home-info-wrapper">
        <div class="container-fluid">
            <div class="row justify-content-md-center">
                <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8">
                    <ul class="info-list">
                        <li class="list">
                            <div class="wrap">
                                <svg width="50" height="50">
                                    <use xlink:href="{{ asset('fav/images/svg-sprint.svg#car_clock-thick') }}"></use>
                                </svg>
                                <div>
                                    <span class="title">Fast Delivery</span>
                                    <span class="sub-title">Same day shipping</span>
                                </div>
                            </div>
                        </li>
                        <li class="list">
                            <div class="wrap">
                                <svg width="50" height="50">
                                    <use xlink:href="{{ asset('fav/images/svg-sprint.svg#worker-thick') }}"></use>
                                </svg>
                                <div>
                                    <span class="title">Professional team</span>
                                    <span class="sub-title">Multilingual communication</span>
                                </div>
                            </div>
                        </li>
                        <li class="list">
                            <div class="wrap">
                                <svg width="40" height="40">
                                    <use xlink:href="{{ asset('fav/images/svg-sprint.svg#shield-checkmark-shape') }}"></use>
                                </svg>
                                <div>
                                    <span class="title">Secure Shopping</span>
                                    <span class="sub-title">Best security features</span>
                                </div>
                            </div>
                        </li>
                        <li class="list">
                            <div class="wrap">
                                <svg width="40" height="40">
                                    <use xlink:href="{{ asset('fav/images/svg-sprint.svg#layers-shape') }}"></use>
                                </svg>
                                <div>
                                    <span class="title">Unlimited Stocks</span>
                                    <span class="sub-title">Always physical stocks</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="home-products-wrapper">
        <div class="container-fluid">
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
                                @if ( $product->product_latest == 1)
                                <span class="new">LATEST</span>
                                @endif
                                <div class="image-wrapper">
                                    <div class="imagethmb">
                                        <div class="imagethmb_inner">
                                            <img src="{{ asset( 'storage/' . $product['product_image'] ) }}"
                                                title="{{ $product['brand_name'] . ' ' . $product['product_name'] . ' ' . $product['product_class'] . '-' . $product['product_model'] . '-' .$product['product_parts'] . ' + ' .  $product['color_name'] . ' + ' . $product['product_part_number'] }}"
                                                alt="{{ $product['brand_name'] . ' ' . $product['product_name'] . ' ' . $product['product_class'] . '-' . $product['product_model'] . '-' .$product['product_parts'] . ' + ' .  $product['color_name'] . ' + ' . $product['product_part_number'] }}" />
                                        </div>
                                    </div>
                                </div>
                                <div class="details-wrapper">
                                    <div class="product_name">
                                        <span class="title">{{ $product['brand_name'] . ' ' . $product['product_name'] . ' ' . $product['product_class'] . '-' . $product['product_model'] }}</span>
                                        <span class="tag">{{ $product['product_parts'] . ' + ' .  $product['color_name'] . ' + ' . $product['product_part_number'] }}</span>
                                    </div>
                                    <div class="product_enquiry">
                                        <a class="whatsapp" target="__blank" href="{{ 'https://wa.me/+971553351001/?text=I am interested with ' . $product['brand_name'] . ' ' . $product['product_name'] . ' ' . $product['product_class'] . '-' . $product['product_model'] . '-' .$product['product_parts'] . ' + ' .  $product['color_name'] . ' + ' . $product['product_part_number'] }}">
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

    <section class="home-info-block-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <p>100% BRAND NEW, ORIGINAL SPARE PARTS WHOLESALE SUPPLIER</p>
                </div>
            </div>
        </div>
    </section>

    <section class="home-brands-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <h2>Our trusted partners</h2>
                    <p>Favtech FZCO is specialized in dealing with genuine spare parts for mobile phones , such as SERVICE PACK LCD for all Brands</p>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">

                    @if( $brands )
                        <ul class="brands-list">
                            @foreach( $brands as $brand )
                            <li class="list">
                                <div class="imagethmb">
                                    <div class="imagethmb_inner">
                                        <img src="{{ asset( 'storage/' . $brand['brand_image'] ) }}" title="null" alt="null" />
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

    <section class="home-faq-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <div class="faq_wrap">

                        <h3>Some Important FAQ's</h3>
                        <h2>Common Frequently Asked Questions</h2>

                        <div class="accordion faq_accordion" id="faq_accordion">

                            @if( $faq )
                                @foreach( $faq as $key => $fq )
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button {{ ( $key === 0 ) ? '' : 'collapsed' }}" type="button" data-bs-toggle="collapse" data-bs-target={{ '#collapseOne_' . $key }} aria-expanded="false" aria-controls={{ 'collapseOne_' . $key }}>
                                            Q: {{ $fq->faq_question }}
                                        </button>
                                    </h2>
                                    <div id={{ 'collapseOne_' . $key }} class="accordion-collapse collapse {{ ( $key === 0 ) ? 'show' : '' }}" data-bs-parent="#faq_accordion">
                                        <div class="accordion-body">
                                            {{ $fq->faq_answer }}
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            @endif

                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <div class="image_wrapper">
                        <img src="{{ asset( 'fav/images/faq.png' ) }}" title="null" alt="null" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="home-contact-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <h2>Contact Us</h2>
                    <ul class="address">
                        <li>
                            <span class="text" itemprop="name">Favtech FZCO</span>
                        </li>
                        <li>
                            <svg width="24" height="24">
                                <use xlink:href="{{ asset('fav/images/svg-sprint.svg#building-2-shape') }}"></use>
                            </svg>
                            <span class="text">4WA Building</span>
                        </li>
                        <li>
                            <svg width="24" height="24">
                                <use xlink:href="{{ asset('fav/images/svg-sprint.svg#phone-shape') }}"></use>
                            </svg>
                            <span class="text" itemprop="telephone">+971 55 335 1001</span>
                        </li>
                        <li>
                            <svg width="24" height="24">
                                <use xlink:href="{{ asset('fav/images/svg-sprint.svg#envelope-shape') }}"></use>
                            </svg>
                            <span class="text" itemprop="email">info@favtech.ae</span>
                        </li>
                        <li itemprop="address" itemscope itemtype="http://schema.org/PostalAddress" itemref="_addressLocality6">
                            <svg width="24" height="24">
                                <use xlink:href="{{ asset('fav/images/svg-sprint.svg#map-pin-thick-shape') }}"></use>
                            </svg>
                            <span class="text"><span itemprop="streetAddress">G25 Dubai Airport Freezone</span>, <span itemprop="addressRegion">Dubai</span> , <span itemprop="addressCountry">UAE</span></span>
                        </li>
                    </ul>

                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <x-contact-form />
                </div>
            </div>
        </div>
    </section>

</section>
