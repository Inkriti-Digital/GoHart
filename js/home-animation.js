$(document).ready(function(){
  
    $("#servnav-bus").click(function() {
        $('.metro-foreground').css('background-image','url(img/home/servnav-bus.png)');
    });

    $("#servnav-metro").click(function() {
        $('.metro-foreground').css('background-image','url(img/home/servnav-metro.png)');
    });

    $("#servnav-van").click(function() {
        $('.metro-foreground').css('background-image','url(img/home/servnav-van.png)');
    });

    $("#servnav-streetcar").click(function() {
        $('.metro-foreground').css('background-image','url(img/home/servnav-trolly.png)');
    });

    $("#servnav-alt").click(function() {
       $('.metro-foreground').css('background-image','url(img/home/servnav-alt.png)');
    });

});