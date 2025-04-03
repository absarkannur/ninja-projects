<div class="container payment-wrapper">

    <form action="">
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
                                <div class="sales_price">{{ Number::currency( $item['product_sales_price'], 'AED' ) }}</div>
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
                                <div class="total_price">{{ Number::currency( $item['product_total_amount'], 'AED' ) }}</div>
                                <div class="delete" wire:click.prevent="removeCart({{ $item['product_id'] }})">
                                    <svg width="16" height="16"><use xlink:href="{{ asset('front-end/images/svg-sprint.svg#bin-thick-shape') }}"></use></svg>
                                </div>
                            </li>
                        @endforeach
                            <li>

                            </li>
                    </ul>

                </div>
            </fieldset>

            <fieldset class="payment-fieldset">
                <legend>Payment Methods</legend>
                <div class="fieldset-body">

                    <ul class="payment-methods-list">
                        <li class="list">
                            <label for="payment_option_cod">
                                <span>
                                    <input type="radio" name="payment_option" id="payment_option_cod" checked />
                                </span>
                                <span class="title">
                                    Cash On Delivery
                                </span>
                                <span class="cards">
                                    <img data-width="35" src="{{ asset( 'front-end/images/delivery-truck.png' ) }}" alt="">
                                </span>
                            </label>
                        </li>
                        <li class="list">
                            <label for="payment_option_card">
                                <span>
                                    <input type="radio" name="payment_option" id="payment_option_card" />
                                </span>
                                <span class="title">
                                    Debit | Credit
                                </span>
                                <span class="cards">
                                    <img src="{{ asset( 'front-end/images/master.png' ) }}" alt="">
                                    <img src="{{ asset( 'front-end/images/visa.png' ) }}" alt="">
                                </span>
                            </label>
                        </li>
                        <li class="list">
                            <label for="payment_option_paypal">
                                <span>
                                    <input type="radio" name="payment_option" id="payment_option_paypal" />
                                </span>
                                <span class="title">
                                    PayPal
                                </span>
                                <span class="cards">
                                    <img data-width="70" src="{{ asset( 'front-end/images/paypal.png' ) }}" alt=""/>
                                </span>
                            </label>
                        </li>
                    </ul>

                    <div class="cards-wrap">
                        <ul class="card-list">

                            @foreach ( [1,2,3,4] as $a )
                                <li class="card visa">
                                    <img src="{{ asset('front-end/images/visa.png') }}" alt="">
                                    <span class="number">** 6765</span>
                                </li>
                            @endforeach

                            <li class="card new">
                                <svg width="20" height="20"><use xlink:href="{{ asset('front-end/images/svg-sprint.svg#plus-thick') }}"></use></svg>
                                <span>New Card</span>
                            </li>

                        </ul>
                    </div>

                </div>
            </fieldset>

            <fieldset class="payment-fieldset">
                <legend>Shipping Details</legend>
                <div class="fieldset-body">
                    sdsd
                </div>
            </fieldset>

        </div>
        <div class="checkout-section">
            <div class="head-wrap">
                <span>Total</span>
                <span class="value">$6567.98</span>
            </div>
            <div class="price-wrap">
                <span>Discount</span>
                <span class="value">$34.90</span>
            </div>
            <div class="price-wrap">
                <span>TAX</span>
                <span class="value">$5.90</span>
            </div>
        </div>
    </form>

</div>
