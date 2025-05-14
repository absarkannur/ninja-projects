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
                                        <span class="url" wire:click="newAddress">New Address</span>
                                    </span>
                                </legend>

                                @if ( $option_address )
                                <div class="fieldset-body" style="border-bottom: solid 1px #ddd;">
                                    
                                    <label class="input-label">Full Name</label>
                                    <input class="primary-input" type="text" wire:model="full_name" />

                                    <label class="input-label">Address 1</label>
                                    <textarea class="primary-textarea" rows="3" wire:model="address_1"></textarea>

                                    <label class="input-label">Address 1</label>
                                    <textarea class="primary-textarea" rows="3" wire:model="address_2"></textarea>

                                    <div class="row">
                                        <div class="col">
                                            <label class="input-label">Country</label>
                                            <select class="primary-input" wire:model="country">
                                                @foreach ( $countries as $item )
                                                <option value="{{ $item->id }}">{{ $item->country_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col">
                                            <label class="input-label">City</label>
                                            <input class="primary-input" type="text" wire:model="city" />
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <label class="input-label">Postal Code</label>
                                            <input class="primary-input" type="text" wire:model="postal_code" />
                                        </div>
                                        <div class="col">
                                            <label class="input-label">Landmark</label>
                                            <input class="primary-input" type="text" wire:model="landmark" />
                                        </div>
                                    </div>

                                    <label class="input-label">Phone Number</label>
                                    <input class="primary-input" type="text" wire:model="phone_number" />

                                    <br/>
                                    <br/>

                                </div>
                                @endif

                                @if ( !$option_address )
                                <div class="fieldset-body">
                                    <ul class="address-list">
                                        @foreach ( $address as $item )
                                            <li class="address">
                                                <div>
                                                    <input wire:model="shipping_address" type="radio" name="address" value="{{ $item['id'] }}" id="address_{{ $item['id'] }}" />
                                                </div>
                                                <div>
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
                                                </div>
                                            </li>
                                        @endforeach
                                    </ul>

                                    @error('shipping_address')
                                        <br/>
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror

                                </div>
                                @endif


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