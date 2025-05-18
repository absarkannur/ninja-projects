<div class="innerpage-wrapper">
    <div class="cart-wrap">

        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <ul class="cart-list">

                        @if ($cart_items)

                            <li class="cart header">
                                <div class="title">Name</div>
                                <div class="sales_price">Price</div>
                                <div class="quantity">Qty</div>
                                <div class="tax">Tax</div>
                                <div class="total_price">Total</div>
                                <div class="delete">&nbsp;</div>
                            </li>

                            @foreach ( $cart_items as $item )

                                <li class="cart" wire:key='{{ $item['product_id'] }}'>
                                    <div class="image">
                                        <img height="40" src="{{ asset('storage/' . $item['product_images'][0] ) }}" alt="">
                                    </div>
                                    <div class="title">{{ $item['product_name'] }}</div>
                                    <div class="sales_price">{{ Number::currency( $item['product_price'], 'AED' ) }}</div>
                                    <div class="quantity">
                                        <span class="product-qty">
                                            <button wire:click.prevent="decrementCart({{ $item['product_id'] }})" type="button" class="input-quantity-btn quantity-left-minus" data-type="minus">
                                                <svg width="16" height="16"><use xlink:href="{{ asset('front-end/images/svg-sprint.svg#minus-thick') }}"></use></svg>
                                            </button>
                                            <input min="1" max="{{ $item['options']['product_qty_in_stock'] }}" readonly type="text" id="quantity" name="quantity" class="input-quantity" value="{{ $item['product_qty'] }}">
                                            <button wire:click.prevent="incrementCart({{ $item['product_id'] }})" type="button" class="input-quantity-btn quantity-right-plus" data-type="plus">
                                                <svg width="16" height="16"><use xlink:href="{{ asset('front-end/images/svg-sprint.svg#plus-thick') }}"></use></svg>
                                            </button>
                                        </span>
                                    </div>
                                    <div class="tax">{{ Number::currency( $item['product_total_tax'], 'AED' ) }}</div>
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

                        <div class="summary">
                            {{-- <div class="price-wrap">
                                <span>Sub Total</span>
                                <span class="value">{{ Number::currency( $grand_sub_total, $currency ) }}</span>
                            </div> --}}
                            <div class="price-wrap">
                                <span>Discount</span>
                                <span class="value">- {{ Number::currency( $grand_discount_total, $currency ) }}</span>
                            </div>
                            <div class="price-wrap">
                                <span>TAX</span>
                                <span class="value">{{ Number::currency( $grand_tax_total, $currency ) }}</span>
                            </div>
                            <div class="head-wrap">
                                <span>Grand Total</span>
                                <span class="value">{{ Number::currency( $grand_total, $currency ) }}</span>
                            </div>
                        </div>

                        <a href="{{ route('checkout') }}">
                            <button class="full-width primary-button no-arrow" style="width: 100%">Checkout</button>
                        </a>

                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

