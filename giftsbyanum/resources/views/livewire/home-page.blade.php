<main class="home-page-wrapper">

    <div class="home-page-banner">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                    <div class="banner-title-wrap">
                        <div class="content">
                            <h4>10% OFF ON YOUR FIRST ORDER</h4>
                            <h1>Personalised gifts for kids</h1>
                            <button class="primary-button">Collections</button>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                    <div class="slider-wrap">
                        <div class="imagethmb">
                            <div class="imagethmb_inner">
                                <img src="{{ asset('front-end/images/h3-slider01.png') }}" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="home-page-categories">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">

                    <ul class="category">
                        <li class="list">
                            <span class="image-thumb">
                                <img src="https://www.fnp.com/assets/images/custom/new-desk-home/hero-banners/Mothers_Day_Desk_14-04.jpg" alt="">
                            </span>
                            <span class="title">Test</span>
                        </li>
                        <li class="list">
                            <span class="image-thumb">
                                <img src="https://www.fnp.com/assets/images/custom/new-desk-home/hero-banners/Birthday_Desk-28-03.jpg" alt="">
                            </span>
                            <span class="title">Birthday</span>
                        </li>
                        <li class="list">
                            <span class="image-thumb">
                                <img src="https://www.fnp.com/assets/images/custom/new-desk-home/hero-banners/luxe_new_desk-09-02-2025.jpg" alt="">
                            </span>
                            <span class="title">Test</span>
                        </li>
                        <li class="list">
                            <span class="image-thumb">
                                <img src="https://www.fnp.com/assets/images/custom/new-desk-home/hero-banners/2hourdelivery_Squircle_41224.jpg" alt="">
                            </span>
                            <span class="title">Test</span>
                        </li>
                        <li class="list">
                            <span class="image-thumb">
                                <img src="https://www.fnp.com/assets/images/custom/new-desk-home/hero-banners/Hatke_gifts_Desk.jpg" alt="">
                            </span>
                            <span class="title">Test</span>
                        </li>
                        <li class="list">
                            <span class="image-thumb">
                                <img src="https://www.fnp.com/assets/images/custom/new-desk-home/hero-banners/Flowers_Squircle.jpg" alt="">
                            </span>
                            <span class="title">Test</span>
                        </li>
                        <li class="list">
                            <span class="image-thumb">
                                <img src="https://www.fnp.com/assets/images/custom/new-desk-home/hero-banners/Anniversary_desk_10-03-2025.jpg" alt="">
                            </span>
                            <span class="title">Test</span>
                        </li>
                        <li class="list">
                            <span class="image-thumb">
                                <img src="https://www.fnp.com/assets/images/custom/new-desk-home/hero-banners/Plants_Squircle-24-02-2025.jpg" alt="">
                            </span>
                            <span class="title">Test</span>
                        </li>
                        <li class="list">
                            <span class="image-thumb">
                                <img src="https://www.fnp.com/assets/images/custom/new-desk-home/hero-banners/Fashion_Squircle-23-04.jpg" alt="">
                            </span>
                            <span class="title">Test</span>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </div>


    {{-- <div class="container">
        <div class="row">
            <div class="col">
                <h3>All Products</h3>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col products-wrapper">
                <ul class="products">

                    @if ( $products )
                        @foreach ( $products as $product )
                            <li class="product-list" wire:key="{{ $product->id }}">
                                <span wire:loading wire:target="addToCart({{ $product->id }},1)" class="loading"><em>Loading...</em></span>
                                <div class="image-wrap">
                                    <div class="imagethmb">
                                        <div class="imagethmb_inner">
                                            <img src="{{ asset( 'storage/' . $product->product_images[0]  ) }}" alt="" />
                                        </div>
                                    </div>
                                </div>
                                <div class="title-wrap">
                                    <h2 class="title">{{ $product->product_name }}</h2>
                                    <span class="price">{{ Number::currency( $product->product_sales_price, $currency ) }}</span>
                                </div>
                                <div class="button-wrap">
                                    <div class="box">

                                        <div class="product-qty">
                                            <button type="button" class="input-quantity-btn quantity-left-minus" data-type="minus">
                                                <svg width="16" height="16"><use xlink:href="{{ asset('front-end/images/svg-sprint.svg#minus-thick') }}"></use></svg>
                                            </button>
                                            <input min="1" max="{{ $product->product_qty_in_stock }}" readonly type="text" id="quantity" name="quantity" class="input-quantity" value="1">
                                            <button type="button" class="input-quantity-btn quantity-right-plus" data-type="plus">
                                                <svg width="16" height="16"><use xlink:href="{{ asset('front-end/images/svg-sprint.svg#plus-thick') }}"></use></svg>
                                            </button>
                                        </div>

                                    </div>
                                    <div class="box">
                                        <button class="addtocart" id="addtocart" product-id={{ $product->id }} wire:click.prevent='addToCart({{ $product->id }},1)'>ADD TO CART</button
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    @endif

                </ul>
            </div>
        </div>
    </div> --}}

</main>
