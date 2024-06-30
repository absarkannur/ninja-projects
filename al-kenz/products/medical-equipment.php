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
                    <h1>Medical Equipment</h1>
                    <ul>
                        <li><a href="index.php">Home</a> &gt;</li>
                        <li><a href="./../products.php">Products</a> &gt;</li>
                        <li>Medical Equipment</li>
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

                        <?php  $product = isset( $_GET['product'] ) ? $_GET['product'] : 'ADDITIONAL MEDICAL EQUIPMENT'; ?>

                        <ul class="product-category owl-carousel owl-theme">
                            <li class="item <?php if( $product == 'ADDITIONAL MEDICAL EQUIPMENT' ) { echo 'active'; } ?>">ADDITIONAL MEDICAL EQUIPMENT</li>
                            <li class="item <?php if( $product == 'GYNECOLOGY AND DIAGNOSTICS' ) { echo 'active'; }  ?>">GYNECOLOGY AND DIAGNOSTICS</li>
                            <li class="item <?php if( $product == 'NEONATAL EQUIPMENT' ) { echo 'active'; } ?>">NEONATAL EQUIPMENT</li>
                            <li class="item <?php if( $product == 'OPHTHALMOLOGY' ) { echo 'active'; } ?>">OPHTHALMOLOGY</li>
                            <li class="item <?php if( $product == 'RESPIRATORY EQUIPMENT' ) { echo 'active'; } ?>">RESPIRATORY EQUIPMENT</li>
                            <li class="item <?php if( $product == 'RESUSCITATION EQUIPMENT' ) { echo 'active'; } ?>">RESUSCITATION EQUIPMENT</li>
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
                    "ADDITIONAL MEDICAL EQUIPMENT" => array(
                        array(
                            "name" => "Endoprostheses of Large Joints with Nanostructured Porous Bioactive Coatings",
                            "desc" => "Endoprostheses of Large Joints with Nanostructured Porous Bioactive Coatings"
                        ),
                        array(
                            "name" => "Surgical Tools",
                            "desc" => "Surgical Tools"
                        ),
                        array(
                            "name" => "Installation for Metal Needles Destruction DS-S-1400",
                            "desc" => "Installation for Metal Needles Destruction DS-S-1400"
                        ),
                        array(
                            "name" => "Disposable Cardiographic Electrodes “EKO”",
                            "desc" => "Disposable Cardiographic Electrodes “EKO”"
                        ),
                        array(
                            "name" => "Photometer KFK 3-01",
                            "desc" => "Photometer KFK 3-01"
                        ),
                    ),
                    "GYNECOLOGY AND DIAGNOSTICS" => array(
                        array(
                            "name" => "Binocular Colposcopes KNB-01, KNB -02, KNB -04-01LED, KNB -04LED",
                            "desc" => "Binocular Colposcopes KNB-01, KNB -02, KNB -04-01LED, KNB -04LED"
                        ),
                        array(
                            "name" => "Apparatuses “Cascade A” and “Cascade A Synchro”",
                            "desc" => "Apparatuses “Cascade A” and “Cascade A Synchro”"
                        ),
                        array(
                            "name" => "Medical Chair №№-01, №№-01-01, №№-01-02",
                            "desc" => "Medical Chair №№-01, №№-01-01, №№-01-02"
                        ),
                    ),
                    "NEONATAL EQUIPMENT" => array(
                        array(
                            "name" => "Neonatal Intensive Care Incubator IDN-03",
                            "desc" => "Neonatal Intensive Care Incubator IDN-03"
                        ),
                        array(
                            "name" => "Lungs Artificial Ventilation Device For the Adults and Newborn Babies SLE 5000",
                            "desc" => "Lungs Artificial Ventilation Device For the Adults and Newborn Babies SLE 5000"
                        ),
                        array(
                            "name" => "Neonatal Table with Automated Heating Temperature Maintenance SNO",
                            "desc" => "Neonatal Table with Automated Heating Temperature Maintenance SNO"
                        ),
                        array(
                            "name" => "Neonatal IR-Warmer «Radiant Warmth- BONO»",
                            "desc" => "Neonatal IR-Warmer «Radiant Warmth- BONO»"
                        ),
                        array(
                            "name" => "Neonatal Warmer ODN-01",
                            "desc" => "Neonatal Warmer ODN-01"
                        ),
                        array(
                            "name" => "Neonatal Breathing Support Apparatus APDN-01",
                            "desc" => "Neonatal Breathing Support Apparatus APDN-01"
                        ),
                        array(
                            "name" => "Neonatal Artificial Lungs Ventilation Apparatus SLE 2000",
                            "desc" => "Neonatal Artificial Lungs Ventilation Apparatus SLE 2000"
                        ),
                    ),
                    "OPHTHALMOLOGY" => array(
                        array(
                            "name" => "Eyeglass Test Lenses Sets",
                            "desc" => "Eyeglass Test Lenses Sets"
                        ),
                        array(
                            "name" => "Refractor FA-01",
                            "desc" => "Refractor FA-01"
                        ),
                        array(
                            "name" => "Auto Ref/Keratometer",
                            "desc" => "Auto Ref/Keratometer"
                        ),
                        array(
                            "name" => "Signs Projector PZA-01",
                            "desc" => "Signs Projector PZA-01"
                        ),
                        array(
                            "name" => "Workplace of the Ophthalmologist RMO-01",
                            "desc" => "Workplace of the Ophthalmologist RMO-01"
                        ),
                        array(
                            "name" => "Workplace of the Ophthalmologist RM-200",
                            "desc" => "Workplace of the Ophthalmologist RM-200"
                        ),
                    ),
                    "RESPIRATORY EQUIPMENT" => array(
                        array(
                            "name" => "High-class ventilator «Aventa»",
                            "desc" => "High-class ventilator «Aventa»"
                        ),
                        array(
                            "name" => "Lung ventilator «Faza-21»",
                            "desc" => "Lung ventilator «Faza-21»"
                        ),
                        array(
                            "name" => "Multifunctional Inhalation Anesthesia Device For the Adults and Children MAIA-01",
                            "desc" => "Multifunctional Inhalation Anesthesia Device For the Adults and Children MAIA-01"
                        ),
                        array(
                            "name" => "Lungs Artificial Ventilation Device For the Adults and Newborn Babies SLE 5000",
                            "desc" => "Lungs Artificial Ventilation Device For the Adults and Newborn Babies SLE 5000"
                        ),
                        array(
                            "name" => "Lungs Artificial Ventilation Device For the Adults and Newborn Babies SLE 1000",
                            "desc" => "Lungs Artificial Ventilation Device For the Adults and Newborn Babies SLE 1000"
                        ),
                        array(
                            "name" => "Neonatal Transport Incubator ITN-01",
                            "desc" => "Neonatal Transport Incubator ITN-01"
                        ),
                    ),
                    "RESUSCITATION EQUIPMENT" => array(
                        array(
                            "name" => "Defibrillator Monitor Synchronized DFR-02",
                            "desc" => "Defibrillator Monitor Synchronized DFR-02"
                        ),
                        array(
                            "name" => "Slit Lamp LS-04",
                            "desc" => "Slit Lamp LS-04"
                        ),
                        array(
                            "name" => "Slit Lamp SL-P-04",
                            "desc" => "Slit Lamp SL-P-04"
                        ),
                        array(
                            "name" => "Universal Manual Ophthalmoscope OP-3B",
                            "desc" => "Universal Manual Ophthalmoscope OP-3B"
                        ),
                        array(
                            "name" => "Automatic Perimeter PKA-01",
                            "desc" => "Automatic Perimeter PKA-01"
                        ),
                        array(
                            "name" => "Automatic Computing Perimeter PKA-02",
                            "desc" => "Automatic Computing Perimeter PKA-02"
                        ),
                        array(
                            "name" => "Fundus Camera FK-01",
                            "desc" => "Fundus Camera FK-01"
                        ),
                        array(
                            "name" => "Signs Projector PZA-01",
                            "desc" => "Signs Projector PZA-01"
                        ),
                        array(
                            "name" => "Automatic Perimeter PKA-01",
                            "desc" => "Automatic Perimeter PKA-01"
                        ),
                        array(
                            "name" => "Automatic Lens-meter LMA-01",
                            "desc" => "Automatic Lens-meter LMA-01"
                        ),
                        array(
                            "name" => "Binocular Headband Ophthalmoscope NBP-3-01",
                            "desc" => "Binocular Headband Ophthalmoscope NBP-3-01"
                        ),
                        array(
                            "name" => "Monobinoscope MBS-02",
                            "desc" => "Monobinoscope MBS-02"
                        ),
                        array(
                            "name" => "Optical Dioptermeter DO-3",
                            "desc" => "Optical Dioptermeter DO-3"
                        ),
                        array(
                            "name" => "Projection Analyzer of the Field of View APPZ-01",
                            "desc" => "Projection Analyzer of the Field of View APPZ-01"
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