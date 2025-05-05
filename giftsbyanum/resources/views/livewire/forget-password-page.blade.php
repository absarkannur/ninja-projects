{{-- <div class="login_form_wrapper">
    <div class="container text-center">
        <div class="row">
            <div class="col-md-6 offset-md-3">

                <form wire:submit.prevent="submit">
                    <div class="login_wrapper">

                        @if (session()->has('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @elseif ( session()->has('error') )
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif

                        <br/>

                        <div class="formsix-pos">
                            <div class="form-group i-email">
                                <input wire:model="email" type="email" class="form-control" id="email2" placeholder="Email Address *">
                                @error('email')
                                    <span style="display:block;color: red;text-align:right;">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="login_btn_wrapper">
                            <button type="submit" style="width: 100%;height: 50px;" class="btn btn-primary login_btn">Login</button>
                        </div>
                        <div class="login_message">
                            <p>Don&rsquo;t have an account ? <a href="{{ route('register') }}"> Sign up </a> </p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div> --}}

<div class="innerpage-wrapper">
    <div class="authentication-wrap">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-6">
                    <h4>Forget Password?</h4>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-6">
                    <form wire:submit.prevent="submit">

                        <div class="input-field">
                            @error('email')
                                <span class="input-error">{{ $message }}</span>
                            @enderror
                            <input wire:model="email" type="email" class="primary-input" id="email2" placeholder="Email Address *">
                        </div>

                        <div class="input-field">
                            <button type="submit" class="full-width primary-button no-arrow">Submit</button>
                        </div>

                        <div class="flex space-between input-field">
                            <span>&nbsp;</span>
                            <p class="block pt10 pb10 f14">Don&rsquo;t have an account ? <a href="{{ route('register') }}"><b>Sign up</b></a> </p>
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
