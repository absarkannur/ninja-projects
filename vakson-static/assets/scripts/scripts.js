$(function(){
    
    // Home Banner Slider
    $('.homebanner').owlCarousel({
        loop:true,
        margin:0,
        nav:false,
        dots: true,
        autoplay:true,
        autoplayTimeout:5000,
        autoplayHoverPause:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    });

    $('.property-slider').owlCarousel({
        loop: true,
        center: true,
        nav: false,
        dots: false,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:3
            }
        }
    });


    $('.vertical_tabs .tab-wrap').click(function(){
        
        var index = $(this).index();

        $('.vertical_tabs .tab-wrap').removeClass('active');
        $('.vertical_tabs .tab-wrap').eq(index).addClass('active');

    });

    $('.vertical_tabs_2 .tab-wrap').click(function(){
        
        var index = $(this).index();

        $('.vertical_tabs_2 .tab-wrap').removeClass('active');
        $('.vertical_tabs_2 .tab-wrap').eq(index).addClass('active');

    });

});