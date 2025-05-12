<div class="innerpage-wrapper">

    <div class="breadcrumbs-wrap">
        <div class="container">
            <div class="row">
                <div class="col">
                    <ul class="breadcrumbs">
                        <li class="list"><a href="">Home &nbsp;&gt;</a></li>
                        <li class="list"><a href="">Products &nbsp;&gt;</a></li>
                        <li class="list">{{ $product->product_slug }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                <div class="product-image-slider-wrap">

                    <div class="slider-wrap">

                        <div class="thumbs-view">
                            <span class="scroll-up js_click_up">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-up" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M7.646 4.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 5.707l-5.646 5.647a.5.5 0 0 1-.708-.708z"/>
                                </svg>
                            </span>
                            <ul class="image-thumbs" id="js_thumb">
                                @foreach ( $product->product_images as $image )
                                <li class="list" style="background-image: url('{{ asset( 'storage/' . $image ) }}')"></li>
                                @endforeach
                            </ul>
                            @if( sizeof( $product->product_images ) > 4 )
                                <span class="scroll-down js_click_down">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708"/>
                                    </svg>
                                </span>
                            @endif
                        </div>


                        <div wire:ignore class="image-view owl-carousel owl-theme" id="js_product_slider">

                            @foreach ( $product->product_images as $image_t )
                                <div class="imgae-wrap">
                                    <div class="imagethmb">
                                        <div class="imagethmb_inner">
                                            <img src="{{ asset( 'storage/' . $image_t ) }}" alt=""/>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>

                        @script
                            <script>

                                document.addEventListener("livewire:load", function(event) {
                                    window.livewire.hook('message.processed', (component) => {
                                        alert('hello absar')
                                    })
                                });

                                $(document).ready(function() {

                                    var owl_product_slider = $('#js_product_slider').owlCarousel({
                                        loop:true,
                                        margin:20,
                                        nav:false,
                                        dots: false,
                                        items: 1
                                    });

                                    $('#js_thumb .list').click(function(){
                                        var index = $(this).index();
                                        owl_product_slider.trigger('to.owl.carousel', [ index, 500 ]);
                                    });

                                });

                            </script>
                        @endscript

                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                <div class="product-info-wrap">

                    <div class="header-content">
                        <h1>{{ $product->product_name }}</h1>
                        <span class="price">
                            <span class="new-price">{{ Number::currency( $product->product_sales_price, env('APP_CURRENCY') ) }}</span>
                            <span class="old-price">{{ Number::currency( $product->product_sales_price, env('APP_CURRENCY') ) }}</span>
                            <span class="offer-percent">{{ $product->offer_discount_percent }}% Off</span>
                        </span>
                    </div>

                    <div class="product-customize">
                        <div>
                            <h3 class="title">Message On Cake</h3>
                            <input placeholder="Your message" class="primary-input" />
                        </div>
                        <div>
                            <h3 class="title">Add Personalised Details</h3>
                            <input placeholder="Your message" class="primary-input" />
                        </div>
                    </div>

                    <br/>

                    <div class="button-wrap">
                        <div class="flex product-qty">
                            <button type="button" class="input-quantity-btn quantity-left-minus" data-type="minus">
                                <svg width="16" height="16"><use xlink:href="{{ asset('front-end/images/svg-sprint.svg#minus-thick') }}"></use></svg>
                            </button>
                            <input min="1" max="{{ $product->product_qty_in_stock }}" readonly type="text" id="quantity" name="quantity" class="input-quantity" value="1">
                            <button type="button" class="input-quantity-btn quantity-right-plus" data-type="plus">
                                <svg width="16" height="16"><use xlink:href="{{ asset('front-end/images/svg-sprint.svg#plus-thick') }}"></use></svg>
                            </button>
                        </div>
                        <button
                            type="button"
                            id="addtocart"
                            product-id={{ $product->id }}
                            wire:click.prevent="addToCart({{ $product->id }},1)"
                            class="primary-button no-arrow">ADD TO CART</button>
                    </div>

                    <br/>

                    <div class="about-product">

                        <h3 class="title">About the product</h3>

                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Product Description
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        {{ $product->product_description }}
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Care Instructions
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Delivery Information
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>


</div>
