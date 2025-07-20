<div>
    <div class="common-hero"
        style="background-image: url('{{ asset('planet-assets/img/banner-images/product.jpg') }}');">
        <span class="layer"></span>
        <div class="container">
            <div class="row align-items-center text-center">
                <div class="col-lg-6 m-auto">
                    <div class="main-heading">
                        <h1>Products</h1>
                        <div class="space16"></div>
                        <span class="span">
                            <a href="index.html">Home</a>
                            <span class="arrow">
                                <i class="fa-regular fa-angle-right"></i>
                            </span> Products
                        </span>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="service-details-area-all">
        <div class="container">

            {{-- <div class="row">
                <div class="col-lg-8 m-auto text-center">
                    <div class="heading1">
                        <span class="span" data-aos="zoom-in-left" data-aos-duration="700">&nbsp;</span>
                        <h2 class="title tg-element-title">Top Categories</h2>
                    </div>
                </div>
            </div> --}}

            <div class="row">
                <div class="col">
                    @if ($categories)
                        <ul class="product-categories">
                            @foreach ( $categories as $category )
                            <a href="{{ route( 'products', ['category' => $category['category_slug'] ] ) }}">
                                <li class="list image-anime" style="background-image: url('{{ asset( 'storage/' . $category['category_image'] ) }}')">
                                    <span class="title">{{ $category['category_name'] }}</span>
                                </li>
                            </a>
                            @endforeach
                        </ul>
                    @endif
                </div>
            </div>
        </div>
    </div>

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
                    <ul class="brands-list owl-carousel owl-theme js_brand_slider">

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
    @script
    <script>

        $(function(){
            $('.js_brand_slider').owlCarousel({
                loop: true,
                margin: 10,
                nav: false,
                dots: false,
                responsive:{
                    0:{
                        items:2
                    },
                    600:{
                        items:2
                    },
                    1000:{
                        items:4
                    }
                },
                autoplay:true,
                autoplayTimeout:3000,
                autoplayHoverPause:false,
            });
        });

    </script>
    @endscript

    <x:ui.cta />

</div>

