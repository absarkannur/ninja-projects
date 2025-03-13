<section>

    <section class="container-banner">
        <div class="owl-carousel owl-theme banner_slider">
            @if( $banners )
                @foreach( $banners as $banner )
                <div class="item">
                    <img src="{{ asset( 'storage/'. $banner['banner_image'] ) }}" title={{ $banner['banner_title'] }} alt="{{ $banner['banner_title'] }}" />
                </div>
                @endforeach
            @endif
        </div>
    </section>

    <section class="home-info-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                    <div class="info-wrap">
                        {{-- <h3 class="sub-heading">Hola</h3> --}}
                        <h1 class="heading">Dominate your market. Start today.</h1>
                        <h2 class="text">Tired of the same old stock struggles? It's not just about filling shelves; it's about strategically reinventing your inventory with the right wholesale partner. Enter Favtech FZCO, your solution to the persistent challenges of securing competitive pricing and consistent, reliable quantity. We understand the tightrope walk of balancing cost and availability. That's why Favtech FZCO is dedicated to streamlining your procurement process, offering a pathway to unlock the potential of your stock through optimized wholesale solutions.</h2>
                        <a href="{{ route('about-us') }}" class="fancy-btn">&nbsp;&nbsp;&nbsp; Learn More &nbsp;&nbsp;&nbsp;</a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                    <ul class="info-list">
                        <li class="list">
                            <div class="wrap" style="background-image: url('{{ asset('fav/images/fast-delivery.jpg') }}')">
                                <span class="layer"></span>
                                <svg width="50" height="50" style="position: relative;z-index: 99">
                                    <use xlink:href="{{ asset('fav/images/svg-sprint.svg#car_clock-thick') }}"></use>
                                </svg>
                                <div style="position: relative;z-index: 99">
                                    <span class="title">Fast Delivery</span>
                                    <span class="sub-title">Same day shipping</span>
                                </div>
                            </div>
                        </li>
                        <li class="list">
                            <div class="wrap" style="background-image: url('{{ asset('fav/images/professional-team.jpg') }}')">
                                <span class="layer"></span>
                                <svg width="50" height="50" style="position: relative;z-index: 99">
                                    <use xlink:href="{{ asset('fav/images/svg-sprint.svg#worker-thick') }}"></use>
                                </svg>
                                <div style="position: relative;z-index: 99">
                                    <span class="title">Professional team</span>
                                    <span class="sub-title">Multilingual communication</span>
                                </div>
                            </div>
                        </li>
                        <li class="list">
                            <div class="wrap" style="background-image: url('{{ asset('fav/images/secure-shopping.jpg') }}')">
                                <span class="layer"></span>
                                <svg width="40" height="40" style="position: relative;z-index: 99">
                                    <use xlink:href="{{ asset('fav/images/svg-sprint.svg#shield-checkmark-shape') }}"></use>
                                </svg>
                                <div style="position: relative;z-index: 99">
                                    <span class="title">Secure Shopping</span>
                                    <span class="sub-title">Best security features</span>
                                </div>
                            </div>
                        </li>
                        <li class="list">
                            <div class="wrap" style="background-image: url('{{ asset('fav/images/unlimited-stocks.jpg') }}')">
                                <span class="layer"></span>
                                <svg width="40" height="40" style="position: relative;z-index: 99">
                                    <use xlink:href="{{ asset('fav/images/svg-sprint.svg#layers-shape') }}"></use>
                                </svg>
                                <div style="position: relative;z-index: 99">
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

    <x:products :products="$products" :title="$title='LATEST PRODUCTS'" :pos="$pos=''" />

    <div style="background-color: rgb(250, 250, 250)">
        <x:products :products="$most_viewed" :title="$title='Customers also viewed'" :pos="$pos=''" />
    </div>

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
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <h2 class="header">Our trusted partners</h2>
                </div>
            </div>

            <div class="row">
                <div class="col">

                    @if( $brands )
                        <ul class="brands-list owl-carousel owl-theme">
                            @foreach( $brands as $brand )
                            <li class="list">
                                <img src="{{ asset( 'storage/' . $brand['brand_image'] ) }}" title="null" alt="null" />
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
                            <svg width="30" height="30">
                                <use xlink:href={{ asset('fav/images/svg-sprint.svg#building-2-shape') }}></use>
                            </svg>
                            <span class="text" style="display:block;width:70%">{{ $site_info->compnay_address }}</span>
                        </li>
                        <li>
                            <svg width="30" height="30">
                                <use xlink:href={{ asset('fav/images/svg-sprint.svg#phone-shape') }}></use>
                            </svg>
                            <span class="text">{{ $site_info->compnay_phone }}</span>
                        </li>
                        <li>
                            <svg width="30" height="30">
                                <use xlink:href={{ asset('fav/images/svg-sprint.svg#envelope-shape') }}></use>
                            </svg>
                            <span class="text">{{ $site_info->compnay_email }}</span>
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
