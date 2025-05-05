<div class="innerpage-wrapper">

    <div class="authentication-wrap">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-6">
                    <h4>Register</h4>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-6">
                    <form wire:submit.prevent="submit">

                        <div class="input-field">
                            @error('name')
                                <span class="input-error">{{ $message }}</span>
                            @enderror
                            <input wire:model="name" type="name" class="primary-input" id="name2" placeholder="Full Name *">
                        </div>

                        <div class="input-field">
                            @error('email')
                                <span class="input-error">{{ $message }}</span>
                            @enderror
                            <input wire:model="email" type="email" class="primary-input" id="email2" placeholder="Email Address *">
                        </div>

                        <div class="input-field">
                            @error('password')
                                <span class="input-error">{{ $message }}</span>
                            @enderror
                            <input wire:model="password" type="password" class="primary-input" id="password2" placeholder="Password *">
                        </div>

                        <div class="input-field">
                            @error('password_confirmation')
                                <span class="input-error">{{ $message }}</span>
                            @enderror
                            <input wire:model="password_confirmation" type="password" class="primary-input" id="confirm_password2" placeholder="Confirm Password *">
                        </div>

                        <div class="input-field">
                            <button type="submit" class="full-width primary-button no-arrow">Register</button>
                        </div>

                        <div class="flex space-between input-field">
                            <span>&nbsp;</span>
                            <p class="block pt10 pb10 f14">Already have an account ? <a href="{{ route('login') }}"><b>Login</b></a></p>
                        </div>

                        @if (session()->has('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                    </form>
                </div>
            </div>

        </div>
    </div>

</div>
