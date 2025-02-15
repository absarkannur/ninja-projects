// : )

$(function(){

    // Contact Form
    $('.contact_form').submit(function( e ){

        e.preventDefault();

        var valid_name = false;
        var valid_email = false;
        var valid_phone = false;

        var form_data = $( this ).serialize();
        var validation = $( this ).serializeArray();

        $('input,textarea').removeClass('error');

        $.each( validation, function( i, item ) {

            if( item.name == "Name" ){
                if( item.value == ''){
                    $('.contact_form .name').addClass('error');
                    valid_name = false;
                } else {
                    valid_name = true;
                }
            }

            if( item.name == "Email" ){
                if( item.value == ''){
                    $('.contact_form .email').addClass('error');
                    valid_email = false;
                } else {
                    valid_email = true;
                }
            }

            if( item.name == "Email" ){
                if( item.value != ''){
                    if( emailValid( item.value ) == false ){
                        $('.contact_form .email').addClass('error');
                        valid_email = false;
                    } else {
                        valid_email = true;
                    }
                }
            }

            if( item.name == "Phone" ){
                if( item.value == ''){
                    $('.contact_form .phone').addClass('error');
                    valid_phone = false;
                } else {
                    valid_phone = true;
                }
            }

            if( item.name == "Phone" ){
                if( item.value != ''){

                    var patt = new RegExp(/^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/);

                    if( patt.test( item.value ) == false ){
                        $('.contact_form .phone').addClass('error');
                        valid_phone = false;
                    } else {
                        valid_phone = true;
                    }

                }
            }

            if( item.name == "Chat" ){
                if( item.value == ''){
                    $('.contact_form .chat').addClass('error');
                    valid_phone = false;
                } else {
                    valid_phone = true;
                }
            }


        });

        if( valid_name == true && valid_email == true && valid_phone == true ){

            $('.submit').attr({'disabled': true});
            $('.contact-from .loader').show();

            $.ajax({
                method: "POST",
                url: "https://growthninjas.agency/api/",
                data: form_data,
                dataType: 'json'
            }).done(function( msg ) {
                swal( " ", msg[1], msg[0] );
                $( '.contact_form' )[0].reset();
                $('.submit').attr({'disabled': false});
            });

        }


    });

    function emailValid( email ){
        var regExp = /\S+@\S+\.\S+/;

        if( regExp.test(email) == false ){
            return false;
        } else {
            return true;
        }

    }

});
