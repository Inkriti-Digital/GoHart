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

});