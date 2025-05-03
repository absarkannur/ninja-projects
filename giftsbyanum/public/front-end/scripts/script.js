
$(document).ready(function()
{
	"use strict";

    // Product to item
    $('.product-qty').each(function(){

        var $el_product = $(this);
        var quantity = 1;

        $el_product.find('.quantity-right-plus').click(function(e){
            e.preventDefault();
            var quantity = parseInt($el_product.find('#quantity').val());
            var max = $el_product.find('#quantity').attr('max');
            if( quantity == max ){
                return false
            }
            $el_product.find('#quantity').val(quantity + 1);

            var id  = $el_product.parent().parent().find('#addtocart').attr( 'product-id' );
            var qty = quantity + 1;
            var bind = "addToCart(" + id + "," + qty + ")"; // Livewire Click Event
            $el_product.parent().parent().find('#addtocart').attr({ 'wire:click.prevent': bind });
            $el_product.parent().parent().find('#addtocart').attr({ 'wire:target': bind });

        });

        $el_product.find('.quantity-left-minus').click(function(e){
            e.preventDefault();
            var quantity = parseInt($el_product.find('#quantity').val());

            var min = $el_product.find('#quantity').attr('min');
            if( quantity == min ){
                return false
            }

            if(quantity>1){
                $el_product.find('#quantity').val(quantity - 1);

                var id  = $el_product.parent().parent().find('#addtocart').attr( 'product-id' );
                var qty = quantity - 1;
                var bind = "addToCart(" + id + "," + qty + ")"; // Livewire Click Event
                $el_product.parent().parent().find('#addtocart').attr({ 'wire:click.prevent': bind });
                $el_product.parent().parent().find('#addtocart').attr({ 'wire:target': bind });

            }
        });

    });

    // Home Page Special Offer Slider

    var owl_special_offer = $('#js_special_offer').owlCarousel({
        loop:true,
        margin:20,
        nav:false,
        dot: false,
        items: 3,
    });


});
