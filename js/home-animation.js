$(document).ready(function(){


  
    $("#servnav-bus").click(function() {
        $('.metro-foreground').css('background-image','url(img/home/servnav-bus.png)');
        $( ".metro-title" ).text( "BUS" );
    });

    $("#servnav-metro").click(function() {
        $('.metro-foreground').css('background-image','url(img/home/servnav-metro.png)');
        $( ".metro-title" ).text( "METRORAPID" );
    });

    $("#servnav-van").click(function() {
        $('.metro-foreground').css('background-image','url(img/home/servnav-van.png)');
        $( ".metro-title" ).text( "VAN" );
    });

    $("#servnav-streetcar").click(function() {
        $('.metro-foreground').css('background-image','url(img/home/servnav-trolly.png)');
        $( ".metro-title" ).text( "STREETCAR SYSTEM" );
    });

    $("#servnav-alt").click(function() {
       $('.metro-foreground').css('background-image','url(img/home/servnav-alt.png)');
       $( ".metro-title" ).text( "ALTERNATIVE TRANSPORTATION" );
    });




    $(".tab1").click(function() {
        $(".tab1").addClass("active");
        $(".tab2").removeClass("active");
        $(".tab3").removeClass("active");

        $(".content-howto").show();
        $(".content-app").hide();
        $(".content-links").hide();
    });
    $(".tab2").click(function() {
        $(".tab1").removeClass("active");
        $(".tab2").addClass("active");
        $(".tab3").removeClass("active");

        $(".content-howto").hide();
        $(".content-app").show();
        $(".content-links").hide();
    });
    $(".tab3").click(function() {
        $(".tab1").removeClass("active");
        $(".tab2").removeClass("active");
        $(".tab3").addClass("active");

        $(".content-howto").hide();
        $(".content-app").hide();
        $(".content-links").show();
    });

});