

jQuery(document).ready(function($) {

    var controller = new ScrollMagic.Controller();

    new ScrollMagic.Scene({
        triggerElement: "#js_whyus",
    })
    .on('start', function () {
        whyus_section();
    })
    .addTo( controller );

    function whyus_section() {

        $('#js_whyus .heading').removeClass('visibility').addClass('animate__fadeInDown');

        var li = [ 0, 1, 2, 3, 4, ];

        li.map( ( item, i ) => {
            setTimeout(function() {
                $('.whyus-list .list').eq(item).removeClass('visibility').addClass('animate__fadeIn');
            },(i*100));
        });

    }


    // ---------------------


    new ScrollMagic.Scene({
        triggerElement: "#js_growth",
    })
    .on('start', function () {
        growth_section();
    })
    .addTo( controller );

    function growth_section() {


        $('#js_growth .sub-heading').removeClass('visibility').addClass('animate__fadeInDown');
        $('#js_growth .heading').removeClass('visibility').addClass('animate__fadeInDown');

        setTimeout(function(){

            var li = [ 0, 1, 2 ];

            li.map( ( item, i ) => {
                setTimeout(function() {
                    $('.growth-highlights .list').eq(item).removeClass('visibility').addClass('animate__fadeIn');
                },(i*100));
            });

        }, 500);

        setTimeout(function(){
            $('.growth_image_circle').removeClass('visibility').addClass('animate__rotateIn');
        }, 500);

    }

    // ---------------------


    new ScrollMagic.Scene({
        triggerElement: "#js_webelieve",
    })
    .on('start', function () {
        webelieve();
    })
    .addTo( controller );

    function webelieve() {


        $('#js_webelieve .sub-heading').removeClass('visibility').addClass('animate__fadeInDown');
        $('#js_webelieve .heading').removeClass('visibility').addClass('animate__fadeInDown');



    }

});
