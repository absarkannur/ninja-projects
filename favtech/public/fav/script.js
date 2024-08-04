
$(function(){

    // OWL Main Banner
    $('.banner_slider').owlCarousel({
        loop:true,
        nav:true,
        items: 1
    })

    // Home Page Products

    $('.home_product_list').owlCarousel({
        loop:true,
        nav:true,
        margin: 20,
        items: 4,
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