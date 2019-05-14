$(document).ready(function () {

    $( ".show-hide-btn" ).click(function() {
        $( "#menu" ).slideDown( "slow",function () {
                if($("#slider").hasClass("col-md-10")){
                    $("#slider").removeClass("col-md-10");
                    $("#slider").addClass("col-md-12");
                    $("#menu").removeClass("d-md-block");
                    // $(".fa-arrow-right").removeClass("fa-arrow-right").addClass("fa-arrow-left");
                }
                else{
                    $("#slider").addClass("col-md-10");
                    $("#slider").removeClass("col-md-12");
                    $("#menu").addClass("d-md-block");
                    // $("#custom-arrow").removeClass("fa");
                    // $("#custom-arrow").removeClass("fa-arrow-left");
                    // $("#custom-arrow").addClass("fa");
                    // $("#custom-arrow").addClass("fa-arrow-right");



                }

            }

            );
    });

    $('.custom-menu a').css("color", "#bb450b");
    $('.custom-menu').addClass('hide-menu');

    $(window).bind('scroll', function () {
        if ($(window).scrollTop() > 300) {
            $('.custom-menu').removeClass('hide-menu');
            $('.custom-menu').addClass('fixed-menu');
            $('.custom-menu a').css("color", "white");
            // $('.custom-menu a').css("bottom", $(window).scrollTop());
        } else {
            $('.custom-menu').addClass('hide-menu');
            $('.custom-menu').removeClass('fixed-menu');
            $('.custom-menu a').css("color", "#bb450b");
        }
    });

    $(["data-toggle='tooltip'"]).tooltip();

});

