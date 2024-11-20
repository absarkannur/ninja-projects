<footer class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3">
                <div class="footer-logo">
                    <a href="#">
                        <img src={{ asset( 'odys_assets/images/logo.png' ) }} alt="Odysseus Strategies">
                    </a>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 flex-center">
                <ul class="footer-navbar">
                    <a class="nav-link" href="{{ route('home') }}">Home</a>
                    <a class="nav-link" href="{{ route('home') }}">Services</a>
                    <a class="nav-link" href="{{ route('home') }}">About</a>
                    <a class="nav-link" href="{{ route('home') }}">Case Studies</a>
                </ul>
            </div>
            <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3 flex-end">
                <ul class="footer-navbar mobile">
                    <li>
                        <a class="nav-link social" href="https://www.facebook.com/alkenzpharma0" target="_blank">
                            <div class="social-link">
                                <img src={{ asset( 'odys_assets/images/icons/facebook.png' ) }} alt="">
                            </div>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link social" href="https://www.instagram.com/alkenzpharma/" target="_blank">
                            <div class="social-link">
                                <img src={{ asset( 'odys_assets/images/icons/insta.png' ) }} alt="">
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
