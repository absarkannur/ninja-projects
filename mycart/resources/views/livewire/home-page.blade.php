<main class="home-page-wrapper">
    <div class="container">
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
                                    <span class="price"><em>AED</em> {{ $product->product_sales_price }}</span>
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
    </div>

</main>
