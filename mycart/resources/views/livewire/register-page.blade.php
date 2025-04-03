<div class="login_form_wrapper">
    <div class="container text-center">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <!-- login_wrapper -->
                <form wire:submit.prevent="submit">
                    <div class="login_wrapper">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
                                <a href="#" class="btn btn-primary facebook"> <span>Signup with Facebook</span> <i class="fa fa-facebook"></i> </a>
                            </div>
                            <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
                                <a href="#" class="btn btn-primary google-plus"> Signup  with Google <i class="fa fa-google-plus"></i> </a>
                            </div>
                        </div>
                        <h2>or</h2>
                        <div class="formsix-pos">
                            <div class="form-group i-name">
                                <input wire:model="name" type="name" class="form-control" id="name2" placeholder="Full Name *">
                                @error('name')
                                    <span style="display:block;color: red;text-align:right;">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="formsix-pos">
                            <div class="form-group i-email">
                                <input wire:model="email" type="email" class="form-control" id="email2" placeholder="Email Address *">
                                @error('email')
                                    <span style="display:block;color: red;text-align:right;">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="formsix-e">
                            <div class="form-group i-password">
                                <input wire:model="password" type="password" class="form-control" id="password2" placeholder="Password *">
                                @error('password')
                                    <span style="display:block;color: red;text-align:right;">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="formsix-e">
                            <div class="form-group i-confirm_password">
                                <input wire:model="password_confirmation" type="password" class="form-control" id="confirm_password2" placeholder="Confirm Password *">
                                @error('password_confirmation')
                                    <span style="display:block;color: red;text-align:right;">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="login_btn_wrapper">
                            <button type="submit" style="width: 100%;height: 50px;" class="btn btn-primary login_btn">Register</button>
                        </div>

                        @if (session()->has('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                    </div>
                </form>
                <!-- /.login_wrapper-->
            </div>
        </div>
    </div>
</div>