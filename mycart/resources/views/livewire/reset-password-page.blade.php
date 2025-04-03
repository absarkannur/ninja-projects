<div class="login_form_wrapper">
    <div class="container text-center">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <!-- reset_wrapper -->
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
                                <input wire:model="password" type="password" class="form-control" id="password" placeholder="password *">
                                @error('password')
                                    <span style="display:block;color: red;text-align:right;">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="formsix-pos">
                            <div class="form-group i-email">
                                <input wire:model="password_confirmation" type="password" class="form-control" id="password_confirmation" placeholder="Password Confirmation *">
                                @error('password_confirmation')
                                    <span style="display:block;color: red;text-align:right;">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="login_btn_wrapper">
                            {{-- <a href="#" class="btn btn-primary login_btn"> Login </a> --}}
                            <button type="submit" style="width: 100%;height: 50px;" class="btn btn-primary login_btn">Login</button>
                        </div>
                        <div class="login_message">
                            <p>Don&rsquo;t have an account ? <a href="{{ route('register') }}"> Sign up </a> </p>
                        </div>

                    </div>
                </form>
                <!-- /.reset_wrapper-->
            </div>
        </div>
    </div>
</div>