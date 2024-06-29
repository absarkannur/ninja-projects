<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Al Kenz Pharmaceutical</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Figtree:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="./styles/animate.min.css" />
    <link href="./styles/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="./styles/owl.carousel.min.css" />
    <link rel="stylesheet" href="./styles/owl.theme.default.min.css" />
    <link rel="stylesheet" href="./styles/init.css" />
    <link rel="stylesheet" href="./styles/common.css" />
    <link rel="stylesheet" href="./styles/site.css" />

</head>
<body>

    <?php include_once('./inc/header.inc') ?>

    <section class="ak-container ak-inner-banner" style="background-image: url('./assets/images/inner-banner.png');">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="innerLayer"></div>
                    <h1>Contact Us</h1>
                    <ul>
                        <li><a href="index.php">Home</a> &gt;</li>
                        <li>Contact Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="ak-container ak-inner-contact">
        
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Lets Get Connected</h2>
                </div>
            </div>
        </div>

        <div class="container">
            <form action="">
            <div class="row">
                <div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                    <input type="text" name="name" placeholder="Your Name" />
                </div>
                <div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                    <input type="text" name="phone" placeholder="Your Phone" />
                </div>
                <div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                    <input type="text" name="email" placeholder="Your Email" />
                </div>
            </div>
            <div class="row">   
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <textarea name="message" placeholder="Message" rows="5"></textarea>
                </div>
            </div>
            <div class="row">   
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <button type="submit" class="ak-dft-btn p-l-10 center fr">
                        SEND MESSAGE
                        <img src="./assets/icons/arrow-w.svg" alt="">
                    </button>
                </div>
            </div>
            </form>
        </div>

    </section>

    <section class="ak-container">
        <div id="map"></div>
    </section>

<?php include_once('./inc/footer.inc') ?>

<script>(g=>{var h,a,k,p="The Google Maps JavaScript API",c="google",l="importLibrary",q="__ib__",m=document,b=window;b=b[c]||(b[c]={});var d=b.maps||(b.maps={}),r=new Set,e=new URLSearchParams,u=()=>h||(h=new Promise(async(f,n)=>{await (a=m.createElement("script"));e.set("libraries",[...r]+"");for(k in g)e.set(k.replace(/[A-Z]/g,t=>"_"+t[0].toLowerCase()),g[k]);e.set("callback",c+".maps."+q);a.src=`https://maps.${c}apis.com/maps/api/js?`+e;d[q]=f;a.onerror=()=>h=n(Error(p+" could not load."));a.nonce=m.querySelector("script[nonce]")?.nonce||"";m.head.append(a)}));d[l]?console.warn(p+" only loads once. Ignoring:",g):d[l]=(f,...n)=>r.add(f)&&u().then(()=>d[l](f,...n))})
    ({key: "AIzaSyB41DRUbKWJHPxaFjMAwdrzWzbVKartNGg", v: "weekly"});</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="./scripts/owl.carousel.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/animation.gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js"></script>

<script src="./scripts/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="./scripts/scripts.js"></script>

</body>
</html>