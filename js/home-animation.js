$(document).ready(function(){
    var myCar;

    var landNum = Math.floor((Math.random() * 4) + 1);

    landingHeader();
    function landingHeader(){
        if(landNum==1){
            $('.landing').css('background-image','url(/Style%20Library/GoHart/Images/home/home-top-bg1.jpg)');
            $( "#headline" ).html( "<h1>TRANSPORTATION</h1><br/><h1>FOR LIFE</h1>");
        } else if(landNum==2){
            $('.landing').css('background-image','url(/Style%20Library/GoHart/Images/home/home-top-bg2.jpg)');
            $('.landing .bus').css('background-image','url(/Style%20Library/GoHart/Images/home/bus-home3.png)');
            $( "#headline" ).html( "<h1>METRORAPID</h1><br/><h1>BUSINESS</h1>");
        } else if(landNum==3){
            $('.landing').css('background-image','url(/Style%20Library/GoHart/Images/home/home-top-bg3.jpg)');
            $( "#headline" ).html( "<h1>FAMILY</h1><br/><h1>TRANSPORTATION</h1>");
        } else if(landNum==4){
            $('.landing').css('background-image','url(/Style%20Library/GoHart/Images/home/home-top-bg4.jpg)');
            $( "#headline" ).html( "<h1>STUDENT</h1><br/><h1>TRANSPORTATION</h1>");
        }
    }

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