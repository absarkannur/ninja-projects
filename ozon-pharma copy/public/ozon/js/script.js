//
$(function(){

    var owl_facility = $('.facilities').owlCarousel({
        loop: false,
        margin: 15,
        nav: false,
        dots: false,
        autoplay:false,
        autoplayTimeout:3000,
        autoplayHoverPause:false,
        responsive:{
            0:{
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

    $('.js_facility_prev').click(function(){
        owl_facility.trigger('prev.owl.carousel', [300]);
    });

    $('.js_facility_next').click(function(){
        owl_facility.trigger('next.owl.carousel', [300]);
    });


    // Therapeutic Categories

    var owl_categories = $('.categories').owlCarousel({
        loop: false,
        margin: 15,
        nav: false,
        dots: false,
        autoplay:false,
        autoplayTimeout:3000,
        autoplayHoverPause:false,
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
    });

    $('.js_categories_prev').click(function(){
        owl_categories.trigger('prev.owl.carousel', [300]);
    });

    $('.js_categories_next').click(function(){
        owl_categories.trigger('next.owl.carousel', [300]);
    });

    // --------------

});
