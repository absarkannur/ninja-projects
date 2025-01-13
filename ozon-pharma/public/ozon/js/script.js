//
$(function(){

    var owl_facilities = $('.owl-carousel').owlCarousel({
        center: true,
        loop: true,
        margin: 10,
        nav: false,
        dots: false,
        responsive:{
            300:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:3
            }
        }
    });


});
