<div class="innerpage-wrapper">
    <div class="checkout-wrap">

        <div class="container">
            <div class="row">
                <div class="col">
                    <h3 class="header">Checkout Page</h3>
                </div>
            </div>
        </div>

        <form wire:submit="fn_checkout">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-md-8 col-lg-8 col-xl-8">
                        <div class="payment-wrap">
                            
                            <fieldset class="payment-fieldset">

                                <legend>
                                    <span>Shipping Details</span>
                                    <span>
                                        <a class="url" href="">Add Address</a>
                                    </span>
                                </legend>

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
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                        <div class="summary-wrap">
                            sdsdsd
                        </div>
                    </div>
                </div>
            </div>
        </form>

    </div>
</div>