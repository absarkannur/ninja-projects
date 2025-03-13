$((function() {

	$(".banner_slider").owlCarousel({
		loop: !0,
		nav: !0,
		items: 1,
		autoplay: !0,
		autoplayTimeout: 5e3
	}), $(".home_product_list").owlCarousel({
		loop: !1,
		nav: !0,
		margin: 20,
		items: 4,
		autoplay: !0,
		autoplayTimeout: 3e3,
		autoplayHoverPause: !0,
		responsive: {
			0: {
				items: 1
			},
			600: {
				items: 1
			},
			1e3: {
				items: 4
			}
		}
	}), $(".brands-list").owlCarousel({
        loop: !0,
		nav: !1,
		items: 4,
		autoplay: !0,
		autoplayTimeout: 2e3,
        center: !1,
        responsive: {
			0: {
				items: 2
			},
			600: {
				items: 2
			},
			1e3: {
				items: 4
			}
		}
    })

    $('document').ready(function(){
        setTimeout(function(){
            $('.footer_whatsapp').show();
        }, 3000)
    })

}));
