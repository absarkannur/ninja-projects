<div>
    <div class="container">
        <div class="row">
            <div class="col">
                <h3>Cart Page</h3>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <ul class="cart-list">

                    @if ($cart_items)

                        {{-- {{ dd($cart_items)}} --}}

                        @foreach ( $cart_items as $item )

                            <li class="cart" wire:key='{{ $item['product_id'] }}'>
                                <div class="image">
                                    <img height="40" src="{{ asset('storage/' . $item['product_images'][0] ) }}" alt="">
                                </div>
                                <div class="title">{{ $item['product_name'] }}</div>
                                <div class="quantity">
                                    <div class="product-qty">
                                        <button wire:click.prevent="decrementCart({{ $item['product_id'] }})" type="button" class="input-quantity-btn quantity-left-minus" data-type="minus">
                                            <svg width="16" height="16"><use xlink:href="{{ asset('front-end/images/svg-sprint.svg#minus-thick') }}"></use></svg>
                                        </button>
                                        <input min="1" max="10" readonly type="text" id="quantity" name="quantity" class="input-quantity" value="{{ $item['product_qty'] }}">
                                        <button wire:click.prevent="incrementCart({{ $item['product_id'] }})" type="button" class="input-quantity-btn quantity-right-plus" data-type="plus">
                                            <svg width="16" height="16"><use xlink:href="{{ asset('front-end/images/svg-sprint.svg#plus-thick') }}"></use></svg>
                                        </button>
                                    </div>
                                </div>
                                <div class="sales_price">{{ Number::currency( $item['product_sales_price'], 'AED' ) }}</div>
                                <div class="total_price">{{ Number::currency( $item['product_total_amount'], 'AED' ) }}</div>
                                <div class="delete" wire:click.prevent="removeCart({{ $item['product_id'] }})">
                                    <svg width="16" height="16"><use xlink:href="{{ asset('front-end/images/svg-sprint.svg#bin-thick-shape') }}"></use></svg>
                                </div>
                            </li>

                        @endforeach

                    @else

                        <h5>Empty Cart</h5>

                    @endif

                </ul>
            </div>
            <div class="col-sm-4">
                <div class="cart-summary">
                    <h4 style="font-size: 30px">Summary</h4>
                    <br/>
                    <h4>AED {{ $grand_total }}</h4>
                    <br/>
                    <a href="{{ route('checkout') }}">
                        <button class="btn btn-primary" style="width: 100%">Checkout</button>
                    </a>
                </div>
            </div>
        </div>
    </div>

</div>

