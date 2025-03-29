<div class="login_form_wrapper">
    <div class="container text-center">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <!-- login_wrapper -->
                <form wire:submit="submit">
                    <div class="login_wrapper">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
                                <a href="#" class="btn btn-primary facebook"> <span>Login with Facebook</span> <i class="fa fa-facebook"></i> </a>
                            </div>
                            <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
                                <a href="#" class="btn btn-primary google-plus"> Login  with Google <i class="fa fa-google-plus"></i> </a>
                            </div>
                        </div>
                        <h2>or</h2>
                        <div class="formsix-pos">
                            <div class="form-group i-email">
                                <input wire:model="email" type="email" class="form-control" required="" id="email2" placeholder="Email Address *">
                            </div>
                        </div>
                        <div class="formsix-e">
                            <div class="form-group i-password">
                                <input wire:model="password" type="password" class="form-control" required="" id="password2" placeholder="Password *">
                            </div>
                        </div>
                        @if (session()->has('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif
                        <div class="login_remember_box">
                            <label class="control control--checkbox">Remember me
                                <input type="checkbox">
                                <span class="control__indicator"></span>
                            </label>
                            <a href="#" class="forget_password">
                                Forgot Password
                            </a>
                        </div>
                        <div class="login_btn_wrapper">
                            {{-- <a href="#" class="btn btn-primary login_btn"> Login </a> --}}
                            <button type="submit" style="width: 100%;height: 50px;" class="btn btn-primary login_btn">Login</button>
                        </div>
                        <div class="login_message">
                            <p>Don&rsquo;t have an account ? <a href="#"> Sign up </a> </p>
                        </div>
                    </div>
                </form>
                <!-- /.login_wrapper-->
            </div>
        </div>
    </div>
</div>