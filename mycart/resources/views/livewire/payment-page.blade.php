<div class="container payment-wrapper">

    <form wire:submit="fn_checkout">
        <div class="cart-section">
            <fieldset class="payment-fieldset">
                <legend>Cart Items:</legend>
                <div class="fieldset-body">

                    <ul class="cart-list">
                        @foreach ( $cart_items as $item )
                            <li class="cart-item">
                                <div class="image">
                                    <img height="50" src="{{ asset('storage/' . $item['product_images'][0] ) }}" alt="" />
                                </div>
                                <div class="title">{{ $item['product_name'] }}</div>
                                <div class="sales_price">{{ Number::currency( $item['product_sales_price'], $currency ) }}</div>
                                <div class="quantity">
                                    <div class="product-qty">
                                        <button wire:click.prevent="decrementCart({{ $item['product_id'] }})" type="button" class="input-quantity-btn quantity-left-minus" data-type="minus">
                                            <svg width="16" height="16"><use xlink:href="{{ asset('front-end/images/svg-sprint.svg#minus-thick') }}"></use></svg>
                                        </button>
                                        <input min="1" max="{{ $item['options']['product_qty_in_stock'] }}" readonly type="text" id="quantity" name="quantity" class="input-quantity" value="{{ $item['product_qty'] }}">
                                        <button wire:click.prevent="incrementCart({{ $item['product_id'] }})" type="button" class="input-quantity-btn quantity-right-plus" data-type="plus">
                                            <svg width="16" height="16"><use xlink:href="{{ asset('front-end/images/svg-sprint.svg#plus-thick') }}"></use></svg>
                                        </button>
                                    </div>
                                </div>
                                <div class="total_price">{{ Number::currency( $item['product_total_amount'], $currency ) }}</div>
                                <div class="delete" wire:click.prevent="removeCart({{ $item['product_id'] }})">
                                    <svg width="16" height="16"><use xlink:href="{{ asset('front-end/images/svg-sprint.svg#bin-thick-shape') }}"></use></svg>
                                </div>
                            </li>
                        @endforeach
                    </ul>

                </div>
            </fieldset>

            <fieldset class="payment-fieldset">
                <legend>Payment Methods</legend>
                <div class="fieldset-body">

                    <ul class="payment-methods-list">

                        @foreach ( $payment_methods as $methods )
                            <li class="list" wire:key="{{ $methods->id }}">
                                <label for="payment_option_{{ $methods->payment_type_short }}">
                                    <span>
                                        <input type="radio" wire:model.live="payment_option" name="payment_option" id="payment_option_{{ $methods->payment_type_short }}" value="{{ $methods->payment_type_short }}" />
                                    </span>
                                    <span class="title">
                                        {{ $methods->payment_type }}
                                    </span>
                                    <span class="cards">
                                        @if ( $methods->payment_type_short === 'COD' )
                                            <img data-width="35" src="{{ asset( 'front-end/images/delivery-truck.png' ) }}" alt="">
                                        @elseif( $methods->payment_type_short === 'CAD' )
                                            <img src="{{ asset( 'front-end/images/visa.png' ) }}" alt="">
                                            <img src="{{ asset( 'front-end/images/master.png' ) }}" alt="">
                                        @elseif( $methods->payment_type_short === 'PAP' )
                                            <img data-width="70" src="{{ asset( 'front-end/images/paypal.png' ) }}" alt="">
                                        @endif
                                    </span>
                                </label>
                            </li>
                        @endforeach

                    </ul>

                    @if ( $payment_option == 'CAD' )
                        <div class="cards-wrap">
                            <ul class="card-list">

                                @foreach ( $payment_info as $card )
                                    <li wire:click="cardCheck({{ $card->id }})" class="card {{ ( $card->card_type === 'visa' ) ? 'visa': 'master' }} {{ ( $payment_card == $card->id ) ? 'active': ''  }}">

                                        @if ($card->card_type === 'visa')
                                            <img src="{{ asset('front-end/images/visa.png') }}" alt="">
                                        @else
                                            <img src="{{ asset('front-end/images/master.png') }}" alt="">
                                        @endif

                                        <span class="number">** {{ substr( $card->card_no , -4 ) }}</span>
                                    </li>
                                @endforeach

                                <li class="card new">
                                    <svg width="20" height="20"><use xlink:href="{{ asset('front-end/images/svg-sprint.svg#plus-thick') }}"></use></svg>
                                    <span>New Card</span>
                                </li>

                            </ul>
                        </div>
                    @endif


                    @error('payment_option')
                        <br/>
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                </div>
            </fieldset>

            <fieldset class="payment-fieldset">
                <legend>Shipping Details</legend>
                <div class="fieldset-body">
                    <ul class="address-list">
                        @foreach ( $address as $item )
                            <li class="address">
                                <input wire:model="shipping_address" type="radio" name="address" value="{{ $item['id'] }}" id="address_{{ $item['id'] }}" />
                                <label for="address_{{ $item['id'] }}">
                                    <address>
                                        <span>{{ $current_session['customer_name'] }}</span>
                                        <span>{{ $item->address_line_1 }}</span>
                                        <span>{{ $item->address_line_2 }}</span>
                                        <span>{{ $item->country_name }}</span>
                                        <span>{{ $item->city }},{{ $item->postal_code }}</span>
                                        <span>Landmark: {{ $item->landmark }}</span>
                                        <span>Mobile: {{ $item->phone_number }}</span>
                                        <span>Email: {{ $current_session['customer_email'] }}</span>
                                    </address>
                                </label>
                            </li>
                        @endforeach
                    </ul>

                    @error('shipping_address')
                        <br/>
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                </div>
            </fieldset>

        </div>
        <div class="checkout-section">
            <div class="head-wrap">
                <span>Total</span>
                <span class="value">{{ Number::currency( $grand_total, $currency ) }}</span>
            </div>
            <div class="price-wrap">
                <span>Discount</span>
                <span class="value">{{ Number::currency( 34.90, $currency ) }}</span>
            </div>
            <div class="price-wrap">
                <span>TAX</span>
                <span class="value">{{ Number::currency( 5.90, $currency ) }}</span>
            </div>
            <div class="price-wrap">
                <span>Shipping</span>
                <span class="value">{{ Number::currency( 20, $currency ) }}</span>
            </div>
            <div class="head-wrap">
                <span>Grand Total</span>
                <span class="value">{{ Number::currency( $grand_total, $currency ) }}</span>
            </div>
            <div class="button-wrap">
                <button class="btn btn-primary">CHECKOUT</button>
            </div>
        </div>
    </form>

</div>
