//
$(function(){

    var owl_facility = $('.owl-carousel').owlCarousel({
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

    $('.js_facility_prev').click(function(){
        owl_facility.trigger('prev.owl.carousel', [300]);
    });

    $('.js_facility_next').click(function(){
        owl_facility.trigger('next.owl.carousel', [300]);
    });


});
