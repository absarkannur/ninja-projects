
    <?php
        $actual_link = (empty($_SERVER['HTTPS']) ? 'http' : 'https') . "://$_SERVER[HTTP_HOST]" . '/al-kenz/';
    ?>

    <header class="ak-container ml-0 mr-0 ak-header">
        <div class="topbar">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3">
                        <ul class="topbar-list">
                            <li class="topbar-time no-padding">
                                <img class="time-icon" src="<?php echo $actual_link; ?>/assets/icons/time.svg" alt="Time">
                                <span>Mon - Sat 8:00-1800, Sun - Closed</span>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-9 col-xl-9">
                        <ul class="topbar-list fr">
                            <li class="phone separator">
                                <img src="<?php echo $actual_link; ?>/assets/icons/phone.svg" alt="Phone">
                                <span>+971 428 2230</span>
                            </li>
                            <li class="email separator">
                                <img src="<?php echo $actual_link; ?>/assets/icons/mail.svg" alt="Email">
                                <span>info@alkenz.com</span>
                            </li>
                            <li class="address">
                                <img src="<?php echo $actual_link; ?>/assets/icons/map.svg" alt="Address">
                                <span>Office No.74, Al Habtoor Warehouse Ind. Area 3, Al Qusais, Dubai, UAE</span>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
        
                <a class="navbar-brand" href="index.php">
                    <img src="<?php echo $actual_link; ?>/assets/h-logo.svg" alt="Al Kenz Pharmaceutical">
                </a>
                
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNavAltMarkup" style="justify-content: end;">
                    <div class="navbar-nav">
                        <a class="nav-link" aria-current="page" href="<?php echo $actual_link; ?>about-us.php">About Us</a>
                        <a class="nav-link" href="<?php echo $actual_link; ?>index.php#teams">Our Team</a>
                        <a class="nav-link" href="<?php echo $actual_link; ?>index.php#partners">Partners</a>
                        <a class="nav-link" href="<?php echo $actual_link; ?>index.php#products">Products</a>
                        <a class="nav-link" href="#">Insights</a>
                        <a class="nav-link" href="#">Services</a>
                        <a class="nav-link social" href="#">
                            <div class="social-link">
                                <img src="<?php echo $actual_link; ?>/assets/icons/fb.svg" alt="">
                            </div>
                        </a>
                        <a class="nav-link social" href="#">
                            <div class="social-link">
                                <img src="<?php echo $actual_link; ?>/assets/icons/insta.svg" alt="">
                            </div>
                        </a>
                        <a class="nav-link no-padding" href="contact.php">
                            <button class="ak-dft-btn p-l-10 center">
                                <img src="<?php echo $actual_link; ?>/assets/icons/mail-w.svg" alt="">
                                Contact Us
                            </button>
                        </a>
                    </div>
                </div>

            </div>
        </nav>

    </header>
