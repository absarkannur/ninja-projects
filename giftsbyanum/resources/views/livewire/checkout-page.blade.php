<div class="innerpage-wrapper">
    <div class="checkout-wrap">

        {{-- <div class="container">
            <div class="row">
                <div class="col">
                    <h3 class="header">Checkout Page</h3>
                </div>
            </div>
        </div> --}}

        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-md-8 col-lg-8 col-xl-8">
                    <div class="payment-wrap">

                        <fieldset class="payment-fieldset">

                            <legend>
                                <span>Payment Methods</span>
                                <span>
                                    {{-- <span class="url" wire:click="newAddress">{{ $payment_option }}</span> --}}
                                </span>
                            </legend>

                            <div class="fieldset-body">
                                
                                <div>
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
                                                        @elseif( $methods->payment_type_short === 'CCD' )
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
                                </div>
                                
                                @if( $payment_option === 'CCD' )
                                <div class="card-details">
                                    Hello Absar
                                </div>
                                @endif

                            </div>

                        </fieldset>
                        
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
                                @error('full_name')
                                    <span class="input-error">{{ $message }}</span>
                                @enderror
                                

                                <label class="input-label">Address 1</label>
                                <textarea class="primary-textarea" rows="3" wire:model="address_1"></textarea>
                                @error('address_1')
                                    <span class="input-error">{{ $message }}</span>
                                @enderror

                                <label class="input-label">Address 1</label>
                                <textarea class="primary-textarea" rows="3" wire:model="address_2"></textarea>

                                <div class="row">
                                    <div class="col">
                                        <label class="input-label">Country</label>
                                        <select class="primary-input" wire:model="country">
                                            <option value="null" selected>Select Country</option>
                                            @foreach ( $countries as $item )
                                            <option value="{{ $item->id }}">{{ $item->country_name }}</option>
                                            @endforeach
                                        </select>
                                        @error('country')
                                            <span class="input-error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <label class="input-label">City</label>
                                        <input class="primary-input" type="text" wire:model="city" />
                                        @error('city')
                                            <span class="input-error">{{ $message }}</span>
                                        @enderror
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
                                @error('phone_number')
                                    <span class="input-error">{{ $message }}</span>
                                @enderror

                                <br/><br/>
                                <button class="primary-button no-arrow" wire:ignore wire:click="fn_saveAddress">Save Address</button>

                            </div>
                            @endif

                            <div class="fieldset-body">
                                <ul class="address-list">
                                    @foreach ( $address as $item )
                                        <li class="address">
                                            <div style="width: 10%;">
                                                <input wire:model="shipping_address" type="radio" name="address" value="{{ $item['id'] }}" id="address_{{ $item['id'] }}" />
                                            </div>
                                            <div style="width: 90%;">
                                                <label for="address_{{ $item['id'] }}" style="display: block;">
                                                    <address>
                                                        <span>{{ $item->full_name }}</span>
                                                        <span>{{ $item->address_line_1 }}, {{ $item->address_line_2 }}</span>
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

                        </fieldset>

                    </div>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                    <div class="summary-wrap">
                        <button class="primary-button full-width no-arrow" wire:click="fn_checkout">Submit</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>