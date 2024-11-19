

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

        $('.heading').removeClass('visibility').addClass('animate__fadeInDown');

        setTimeout(function(){
            var li = [ 0, 1, 2, 3, 4, ];

            li.map( ( item, i ) => {
                setTimeout(function() {
                    $('.whyus-list .list').eq(item).removeClass('visibility').addClass('animate__fadeIn');
                },(i*100));
            });

        }, 800);



    }


});
