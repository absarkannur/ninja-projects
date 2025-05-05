<div class="innerpage-wrapper">
    <div class="authentication-wrap">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-6">
                    <h4>Login</h4>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-6">
                    <form wire:submit.prevent="submit">

                        <div class="input-field">
                            @error('name')
                                <span class="input-error">{{ $message }}</span>
                            @enderror
                            <input wire:model="email" type="email" class="primary-input" required="" id="email2" placeholder="Email Address *">
                        </div>

                        <div class="input-field">
                            @error('name')
                                <span class="input-error">{{ $message }}</span>
                            @enderror
                            <input wire:model="password" type="password" class="primary-input" required="" id="password2" placeholder="Password *">
                        </div>

                        <div class="input-field">
                            <button type="submit" class="full-width primary-button no-arrow">Login</button>
                        </div>

                        <div class="flex space-between input-field">
                            <a class="block pt10 pb10 f14" href="{{ route('password.request') }}">Forgot Password</a>
                            <p class="block pt10 pb10 f14">Don&rsquo;t have an account ? <a href="{{ route('register') }}"><b>Register</b></a></p>
                        </div>

                        @if (session()->has('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
