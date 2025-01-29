
$(function(){

    // OWL Main Banner
    $('.banner_slider').owlCarousel({
        loop:true,
        nav:true,
        items: 1,
        autoplay: true,
        autoplayTimeout: 5000,
    })

    // Home Page Products

    $('.home_product_list').owlCarousel({
        loop:false,
        nav:true,
        margin: 20,
        items: 4,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:4
            }
        }
    })

});
