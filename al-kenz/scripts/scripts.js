
var controller = new ScrollMagic.Controller();

new ScrollMagic.Scene({
    triggerElement: "#triggerCountAnim"
})
.on('start', function () {
    animateCount();
})
.addTo( controller );

function animateCount() {

    var count1 = new ClientPlus( '#num1', 22, 1000 );
    var count2 = new ClientPlus( '#num2', 35, 1000 );
    var count3 = new ClientPlus( '#num3', 100, 1000 );
    var count4 = new ClientPlus( '#num4', 24, 1000 );

}

// Other
new ScrollMagic.Scene({
    triggerElement: "#heritage"
})
.on('start', function () {
    animateHeritageCount();
})
.addTo( controller );

function animateHeritageCount() {
    var count1 = new ClientPlus( '#num-heritage', 22, 1500 );
} 

var countWidget = false;

class ClientPlus {

    constructor( selectPlus, maxNum, duration ){
        this.clientNum  = document.querySelector( selectPlus );
        this.maxNum = maxNum
        this.time   = duration/maxNum
        this.timer = setInterval( ()=> { this.clientPlus( selectPlus ) }, this.time );
    }

    clientPlus( selectPlus ){

        if( this.clientNum != null ){

            this.clientNum.innerHTML++;
            if(this.clientNum.innerHTML>=this.maxNum){
                clearInterval(this.timer);
                countWidget = true;
            }

        }

    }

}

// Accordion Desktop

$('.js_accordion_desk li').click(function(e){

    $('.js_accordion_desk li').removeClass('active');
    $('.js_accordion_details_desk li').removeClass('active');
    $(this).addClass('active');

    $('.js_accordion_details_desk li').eq($(this).index()).addClass('active');

});


$('.js_accordion_mobile li').click(function(){
    var index = $(this).index();

    $('.js_accordion_mobile li .content').removeClass('active');

    $('.js_accordion_mobile li').eq( index ).find('.content').addClass('active');

});


// Home Page Blog

var owl_insight = $('.insight-list').owlCarousel({
    loop: true,
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

$('.js_prev').click(function(){
    owl_insight.trigger('prev.owl.carousel');
});

$('.js_next').click(function(){
    owl_insight.trigger('next.owl.carousel');
});


// About Slider
var owl_about_slider = $('.js_about_slider').owlCarousel({
    autoWidth: true,
    center: true,
    loop: true,
    margin: 0,
    nav: false,
    dots: false,
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

$('.js_prev').click(function(){
    owl_about_slider.trigger('prev.owl.carousel');
});

$('.js_next').click(function(){
    owl_about_slider.trigger('next.owl.carousel');
});