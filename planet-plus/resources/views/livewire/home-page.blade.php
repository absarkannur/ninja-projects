<div>
    <!--HERO AREA START-->
    <div class="hero1"
        style="background-image: url({{ asset('planet-assets/img/bg/hero1-bg.png') }}); background-position: center; background-repeat: no-repeat; background-size: cover;">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="main-headding">
                        <span class="span">
                            {{ $banner->banner_slogan }}
                        </span>
                        <h1 class="title tg-element-title">
                            {{ $banner->banner_title }}
                        </h1>
                        <div class="space16"></div>
                        <p>
                            {{ $banner->banner_description }}
                        </p>
                        <div class="space30"></div>
                        <div class="buttons">
                            <a class="theme-btn1" href="{{ route('contact') }}">
                                Get Started Now
                                <span>
                                    <i class="fa-solid fa-arrow-right"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="hero1-all-images">
                        <div class="image1 ">
                            <img src="{{ asset('planet-assets/img/hero/hero1-image1.png') }}" alt="" />
                        </div>
                        <div class="image2 reveal">
                            <img src="{{ asset('planet-assets/img/hero/hero1-image2.png') }}" alt="" />
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--HERO AREA END-->

    <!--HERO BOTTOM AREA START-->
    <div class="">
        <div class="container">
            <div class="row hero-bottom-area">
                <div class="col-lg-3">
                    <div class="single-box">
                        <div class="icon">
                            <img src="{{ asset('planet-assets/img/icons/hero-bottom-icon2.png') }}" alt="">
                        </div>
                        <div class="headding">
                            <h5>{{ $site_data->year_experience }} Years</h5>
                            <p>Field Experience</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="single-box">
                        <div class="icon">
                            <img src="{{ asset('planet-assets/img/icons/costumer.png') }}" alt="">
                        </div>
                        <div class="headding">
                            <h5>{{ $site_data->customers }}</h5>
                            <p>Happy Customers</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="single-box">
                        <div class="icon">
                            <img src="{{ asset('planet-assets/img/icons/user.png') }}" alt="">
                        </div>
                        <div class="headding">
                            <h5>{{ $site_data->client_satisfaction }}</h5>
                            <p>Client Satisfaction</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="single-box">
                        <div class="icon">
                            <img src="{{ asset('planet-assets/img/icons/hero-bottom-icon4.png') }}" alt="">
                        </div>
                        <div class="headding">
                            <h5>{{ $site_data->established }}</h5>
                            <p>We Established On</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--HERO BOTTOM AREA END-->

    <!--ABOUT AREA START-->
    <div class="about1 sp">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-image">
                        <div class="image1 reveal">
                            <img src="{{ asset( 'planet-assets/img/about/about1-img1.png' )}}" alt="" />
                        </div>
                        <div class="image2 reveal image-anime">
                            <img src="{{ asset( 'planet-assets/img/about/about1-img2.png' )}}" alt="" />
                        </div>
                        <div class="icon-box">
                            <h4>24/7 Support</h4>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="heading1">
                        <span class="span" data-aos="zoom-in-left" data-aos-duration="700">Who We Are:</span>
                        <h2 class="title tg-element-title">{{ $whoarewe->title }}</h2>
                        <div class="space16"></div>
                        <div>
                            {!! $whoarewe->content !!}
                        </div>

                        <div class="space30"></div>
                        <div class="" data-aos="fade-left" data-aos-duration="900">
                            <a class="theme-btn1" href="{{ route('about') }}">Learn More <span><i
                                        class="fa-solid fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--ABOUT AREA END-->

    <!--SERVICE AREA START-->
    <div class="service sp">
        <div class="container">

            <div class="row">
                <div class="col-lg-8 m-auto text-center">
                    <div class="heading1">
                        <span class="span" data-aos="zoom-in-left" data-aos-duration="700">Our Services</span>
                        <h2 class="title tg-element-title">Empower Your Business With Our Comprehensive Technology & IT
                            Solutions</h2>
                    </div>
                </div>
            </div>

            <div class="space30"></div>

            <div class="row">

                @if( $services )
                    @foreach ( $services as $service )
                        <div class="col-lg-6" data-aos="zoom-in-up" data-aos-duration="700">
                            <div class="single-box">
                                <div class="icon">
                                    <img src="{{ asset('storage/'. $service['service_icon'] ) }}" alt="{{ $service['service_title'] }}" />
                                </div>
                                <div class="heading1">
                                    <h4><a href="{{ route('service' , ['slug'=> $service['service_slug'] ] ) }}">{{ $service['service_title'] }}</a></h4>
                                    <div class="space16"></div>
                                    <p>
                                        <a href="{{ route('service' , ['slug'=> $service['service_slug'] ] ) }}">
                                            {!! str($service['service_short_description'])->sanitizeHtml() !!}
                                        </a>
                                    </p>
                                    <br>
                                    <div class="space16"></div>
                                    <a href="{{ route('service' , ['slug'=> $service['service_slug'] ] ) }}" class="learn">Learn More <span><i
                                                class="fa-solid fa-arrow-right"></i></span></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif


            </div>
        </div>
    </div>

    <!--SERVICE AREA END-->

    <!--BRANDS AREA START-->
    <div class="brands sp">
        <div class="container">

            <div class="row">
                <div class="col-lg-8 m-auto text-center">
                    <div class="heading1">
                        <span class="span" data-aos="zoom-in-left" data-aos-duration="700">Our Brands</span>
                        <h2 class="title tg-element-title">Forging Success Together: Explore Our Trusted Partnerships
                        </h2>
                    </div>
                </div>
            </div>
            <div class="space30"></div>
            <div class="row">
                <div class="col">
                    <ul class="brands-list">

                        @if( $brands )
                            @foreach ( $brands as $brand )
                            <a href="{{ route('products', [ 'brand[0]' => $brand['id'] ] ) }}">
                                <li class="list" style="background-image: url('{{ asset( 'storage/' . $brand['brand_logo'] ) }}');"></li>
                            </a>
                            @endforeach
                        @endif

                    </ul>
                </div>
            </div>

        </div>
    </div>
    <!--BRANDS AREA END-->

    <!--PRODUCTS AREA START-->
    <div class="products sp">
        <div class="container">

            <div class="row">
                <div class="col-lg-8 m-auto text-center">
                    <div class="heading1">
                        <span class="span" data-aos="zoom-in-left" data-aos-duration="700">Our Products</span>
                        <h2 class="title tg-element-title">Driving Success Through Innovative IT Solution</h2>
                    </div>
                </div>
            </div>

            <div class="space30"></div>

            <div class="row">
                <div class="col">

                    <ul class="proucts-list">

                        @if( $products )
                            @foreach ( $products as $product )
                            <li class="product">
                                <a href="{{ route( 'product', ['slug' => $product->product_slug ] ) }}">
                                <div class="image-wrap">
                                    <div class="imagethmb">
                                        <div class="imagethmb_inner">
                                            <img src="{{ asset( 'storage/' . $product['product_image'] ) }}" alt="{{ $product['product_name'] }}" />
                                        </div>
                                    </div>
                                </div>
                                <div class="title-wrap">
                                    <span class="title">{{ $product['product_name'] }}</span>
                                </div>
                                </a>
                                <div class="button-wrap">
                                    <a target="__blank" href="https://api.whatsapp.com/send/?phone={{ $site_data->company_whatsapp }}&text=I am interested with {{ $product['product_name'] }}&type=phone_number&app_absent=0"
                                        class="btn">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                            class="bi bi-whatsapp" viewBox="0 0 16 16">
                                            <path
                                                d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232" />
                                        </svg>
                                        <span>Quick Enquiry</span>
                                    </a>
                                </div>
                            </li>
                            @endforeach
                        @endif

                    </ul>

                </div>
            </div>

        </div>
    </div>
    <!--PRODUCTS AREA END-->

    <x:ui.cta />

</div>
