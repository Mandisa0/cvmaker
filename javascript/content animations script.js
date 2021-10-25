$("document").ready(function () {
    var c1_pos = $("#content_desktop").position();
    var c1_top = c1_pos.top - 500;
    var c1_visible=false;

    var c2_pos = $("#content_mobile").position();
    var c2_top = c2_pos.top - 500;
    var c2_visible=false;


    var p1_pos = $("#products_desktop").position();
    var p1_top = p1_pos.top - 500;
    var p1_visible=false;

    var p2_pos = $("#products_mobile").position();
    var p2_top = p2_pos.top - 500;
    var p2_visible=false;

    var sm1_pos = $("#send_message_desktop").position();
    var sm1_top = sm1_pos.top - 500;
    var sm1_visible=false;

    var cu1_pos = $("#contact_us_desktop").position();
    var cu1_top = cu1_pos.top - 500;
    var cu1_visible=false;

    var cu2_pos = $("#contact_us_mobile").position();
    var cu2_top = cu2_pos.top - 500;
    var cu2_visible=false;

    var ad1_pos = $("#address_desktop").position();
    var ad1_top = ad1_pos.top - 500;
    var ad1_visible=false;

    var ad2_pos = $("#address_mobile").position();
    var ad2_top = ad2_pos.top - 500;
    var ad2_visible=false;

    $("#content_desktop").css("opacity", "0");
    $("#content_mobile").css("opacity", "0");

    $("#products_desktop").css("opacity", "0");
    $("#products_mobile").css("opacity", "0");

    $("#send_message_desktop").css("opacity", "0");

    $("#contact_us_desktop").css("opacity", "0");
    $("#contact_us_mobile").css("opacity", "0");

    $("#address_desktop").css("opacity", "0");
    $("#address_mobile").css("opacity", "0");

    $(window).scroll(function () {

        if ($(window).scrollTop() >= c1_top && c1_visible == false ) {

            $("#content_desktop").animate({

                opacity: 1

            }, 500);

            c1_visible = true;

        }

        if ($(window).scrollTop() >= c2_top && c2_visible == false ) {

            $("#content_mobile").animate({

                opacity: 1

            }, 500);

            c2_visible = true;

        }


        if ($(window).scrollTop() >= p1_top && p1_visible == false ) {

            $("#products_desktop").animate({

                opacity: 1

            }, 500);

            p1_visible = true;

        }

        if ($(window).scrollTop() >= p2_top && p2_visible == false ) {

            $("#products_mobile").animate({

                opacity: 1

            }, 500);

            
            p2_visible = true;


        }

        if ($(window).scrollTop() >= sm1_top && sm1_visible == false ) {

            $("#send_message_desktop").animate({

                opacity: 1

            }, 500);

            sm1_visible = true;

        }

        if ($(window).scrollTop() >= cu1_top && cu1_visible == false ) {

            $("#contact_us_desktop").animate({

                opacity: 1

            }, 500);

            cu1_visible = true;


        }

        if ($(window).scrollTop() >= cu2_top && cu2_visible == false ) {

            $("#contact_us_mobile").animate({

                opacity: 1

            }, 500);

            cu2_visible = true;

        }

        if ($(window).scrollTop() >= ad1_top && ad1_visible == false ) {

            $("#address_desktop").animate({

                opacity: 1

            }, 500);

            ad1_visible = true;

        }

        if ($(window).scrollTop() >= ad2_top && ad2_visible == false ) {

            $("#address_mobile").animate({

                opacity: 1

            }, 500);

            ad2_visible = true;

        }




    });

});