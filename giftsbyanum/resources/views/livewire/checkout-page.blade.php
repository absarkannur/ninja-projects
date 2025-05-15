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

                                    <label class="input-label">Name on Card</label>
                                    <input class="primary-input" 
                                        placeholder="Cardholder Name"
                                        maxlength="26"
                                        type="text"
                                        wire:model="card_name" />
                                    @error('card_name')
                                        <span class="input-error">{{ $message }}</span>
                                    @enderror

                                    <div class="row">
                                        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                                            <label class="input-label">Card Number</label>
                                            <input class="primary-input cc_number" 
                                                placeholder="0000 0000 0000 0000"
                                                x-mask="9999-9999-9999-9999"
                                                wire:model="card_number" />
                                            @error('card_number')
                                                <span class="input-error">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-sm-12 col-md-12 col-lg-2 col-xl-2">
                                            <label class="input-label">Expiry</label>
                                            <select class="primary-input" 
                                                placeholder="MM"
                                                wire:model="card_month">
                                                <option value="01">01</option>
                                                <option value="02">02</option>
                                                <option value="03">03</option>
                                                <option value="04">04</option>
                                                <option value="05">05</option>
                                                <option value="06">06</option>
                                                <option value="07">07</option>
                                                <option value="08">08</option>
                                                <option value="09">09</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                            </select>

                                            @error('card_month')
                                                <span class="input-error">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-sm-12 col-md-12 col-lg-2 col-xl-2">
                                            <label class="input-label">&nbsp;</label>
                                            <select class="primary-input" 
                                                placeholder="YYYY"
                                                wire:model="card_year">

                                                @foreach ($card_years as $year)   
                                                <option value="{{ $year }}">{{ $year }}</option>
                                                @endforeach

                                            </select>

                                            @error('card_year')
                                                <span class="input-error">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-sm-12 col-md-12 col-lg-2 col-xl-2">
                                            <label class="input-label">CVV</label>
                                            <input class="primary-input" maxlength="4" placeholder="CVV" type="text" wire:model="card_cvv" />
                                            @error('card_cvv')
                                                <span class="input-error">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <label class="input-label" style="font-size: 14px;margin-top: 10px;" for="save_payment_details">
                                                <input type="checkbox" id="save_payment_details" wire:model="save_payment_details" >
                                                Save my payment details for future purchases
                                            </label>
                                        </div>
                                    </div>

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
                                
                                <div class="row">
                                    <div class="col">
                                        <label class="input-label">Address 1</label>
                                        <textarea class="primary-textarea" rows="3" wire:model="address_1"></textarea>
                                        @error('address_1')
                                            <span class="input-error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <label class="input-label">Address 1</label>
                                        <textarea class="primary-textarea" rows="3" wire:model="address_2"></textarea>
                                    </div>
                                </div>
                                
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