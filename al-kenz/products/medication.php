<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Al Kenz Pharmaceutical</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Figtree:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="./../styles/animate.min.css" />
    <link href="./../styles/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="./../styles/owl.carousel.min.css" />
    <link rel="stylesheet" href="./../styles/owl.theme.default.min.css" />
    <link rel="stylesheet" href="./../styles/init.css" />
    <link rel="stylesheet" href="./../styles/common.css" />
    <link rel="stylesheet" href="./../styles/site.css" />

</head>
<body>

    <?php include_once('./../inc/header.inc') ?>

    <section class="ak-container ak-inner-banner" style="background-image: url('<?php echo $actual_link; ?>/assets/images/inner-banner.png');">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="innerLayer"></div>
                    <h1>Medication</h1>
                    <ul>
                        <li><a href="index.php">Home</a> &gt;</li>
                        <li><a href="./../products.php">Products</a> &gt;</li>
                        <li>Medication</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="ak-container ak-inner-product-list">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <div class="category-nav-group">

                        <?php  $product = isset( $_GET['product'] ) ? $_GET['product'] : 'ANTIBIOTIC'; ?>

                        <ul class="product-category owl-carousel owl-theme">
                            <li class="item <?php if( $product == 'CARDIOVASCULAR DRUGS' ) { echo 'active'; } ?>">CARDIOVASCULAR DRUGS</li>
                            <li class="item <?php if( $product == 'EYE DROPS' ) { echo 'active'; }  ?>">EYE DROPS</li>
                            <li class="item <?php if( $product == 'ANTIBIOTIC' ) { echo 'active'; } ?>">ANTIBIOTIC</li>
                            <li class="item <?php if( $product == 'NEUROLOGICAL AND PSYCHOLOGICAL DRUGS' ) { echo 'active'; } ?>">NEUROLOGICAL AND PSYCHOLOGICAL DRUGS</li>
                            <li class="item <?php if( $product == 'ANTICOAGULANTS' ) { echo 'active'; } ?>">ANTICOAGULANTS</li>
                        </ul>
                        <div class="nav-group">
                            <span class="prev js_prev">
                                <img src="./../assets/icons/prev.svg" alt="">
                            </span>
                            <span class="next js_next">
                                <img src="./../assets/icons/next.svg" alt="">
                            </span>
                        </div>

                    </div>


                </div>
            </div>

            <?php

                $list = array(
                    "ANTIBIOTIC" => array(
                        array(
                            "name" => "Ampicillin",
                            "desc" => "Not Found"
                        ),
                        array(
                            "name" => "Ampicillin Trihydrate",
                            "desc" => "Not Found"
                        ),
                        array(
                            "name" => "Clarithromycin",
                            "desc" => "Not Found"
                        ),
                        array(
                            "name" => "Azithromycin",
                            "desc" => "Not Found"
                        ),
                        array(
                            "name" => "Biotaksim",
                            "desc" => "Not Found"
                        ),
                        array(
                            "name" => "Cefazolin",
                            "desc" => "Not Found"
                        ),
                        array(
                            "name" => "Cefoperazone",
                            "desc" => "Not Found"
                        ),
                        array(
                            "name" => "Cefotaxime",
                            "desc" => "Not Found"
                        ),
                        array(
                            "name" => "Ceftazidime",
                            "desc" => "Not Found"
                        ),
                        array(
                            "name" => "Ceftriaxone",
                            "desc" => "Not Found"
                        ),
                        array(
                            "name" => "Cefuroxime",
                            "desc" => "Not Found"
                        ),
                    ),
                    "EYE DROPS" => array(
                        array(
                            "name" => "EYE DROPS",
                            "desc" => "Not Found"
                        ),
                    ),
                    "CARDIOVASCULAR DRUGS" => array(
                        array(
                            "name" => "CARDIOVASCULAR DRUGS",
                            "desc" => "Not Found"
                        ),
                    ),
                    "NEUROLOGICAL AND PSYCHOLOGICAL DRUGS" => array(
                        array(
                            "name" => "PSYCHOLOGICAL",
                            "desc" => "Not Found"
                        ),
                    ),
                    "ANTICOAGULANTS" => array(
                        array(
                            "name" => "Test Ampicillin",
                            "desc" => "Not Found"
                        ),
                    ),
                );

            
            ?>

            <div class="row">
                <div class="col-12">
                    <ul class="product-list-item">

                        <?php foreach ( $list[ $product ] as $key => $value ) { ?>

                            <li class="item">
                                <h4><?php echo $value['name']; ?></h4>
                                <p><?php echo $value['desc'] ?></p>
                            </li>

                        <?php } ?>

                    </ul>
                </div>
            </div>

        </div>
    </section>

    <?php include_once('./../inc/footer.inc') ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="./../scripts/owl.carousel.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/animation.gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js"></script>

<script src="./../scripts/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="./../scripts/scripts.js"></script>

</body>
</html>