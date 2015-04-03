$(document).ready(function(){
    var myCar;

    var landNum = Math.floor((Math.random() * 4) + 1);
    console.log('landNum = '+ landNum);

    landingHeader();
    function landingHeader(){
        if(landNum==1){
            $('.landing').css('background-image','url(img/home/home-top-bg1.jpg)');
            $( ".headline" ).html( "<h1>TRANSPORTATION</h1><br/><h1>FOR LIFE</h1>");
        } else if(landNum==2){
            $('.landing').css('background-image','url(img/home/home-top-bg2.jpg)');
            $('.landing .bus').css('background-image','url(img/home/bus-home3.png)');
            $( ".headline" ).html( "<h1>METRORAPID</h1><br/><h1>BUSINESS</h1>");
        } else if(landNum==3){
            $('.landing').css('background-image','url(img/home/home-top-bg3.jpg)');
            $( ".headline" ).html( "<h1>FAMILY</h1><br/><h1>TRANSPORTATION</h1>");
        } else if(landNum==4){
            $('.landing').css('background-image','url(img/home/home-top-bg4.jpg)');
            $( ".headline" ).html( "<h1>STUDENT</h1><br/><h1>TRANSPORTATION</h1>");
        }
    }


  
    $("#servnav-bus").click(function() {
        myCar = "bus";
        changeCar();
    });

    $("#servnav-metro").click(function() {
        myCar = "metro";
        changeCar();        
    });

    $("#servnav-van").click(function() {
        myCar="van";
        changeCar();
    });

    $("#servnav-streetcar").click(function() {
        myCar="trolly";
        changeCar();
    });

    $("#servnav-alt").click(function() {
        myCar="alt";
        changeCar();
    });

    function changeCar(){
        // $(".metro-foreground").fadeOut('fast');
        $(".metro-foreground").animate({
            opacity: 0,
            left: "+=30"
        }, 200, function() {
            toggleBg();
        });
        
        function toggleBg(){  
            console.log('hit toggleBG = '+myCar)
            if(myCar=="bus"){
                $('.metro-foreground').css('background-image','url(img/home/serv-large-bus.png)');
                $( ".metro-title" ).text( "BUS" );
                $( ".metro-arrow" ).animate({ left: "2%"}, 500, 'easeOutQuad', function() {}); 
                $(".alt-transport-box").fadeOut();
                $(".train-bg").fadeOut();
            } else if(myCar=="metro"){
                $('.metro-foreground').css('background-image','url(img/home/serv-large-metro.png)');
                $( ".metro-title" ).text( "METRORAPID" );
                $( ".metro-arrow" ).animate({ left: "22%"}, 500, 'easeOutQuad', function() {});
                $(".alt-transport-box").fadeOut();
                $(".train-bg").fadeOut();
            } else if(myCar=="van"){
                $('.metro-foreground').css('background-image','url(img/home/serv-large-van.png)');
                $( ".metro-title" ).text( "VAN" );
                $( ".metro-arrow" ).animate({ left: "42%"}, 500, 'easeOutQuad', function() {});
                $(".alt-transport-box").fadeOut();
                $(".train-bg").fadeOut();
            } else if(myCar=="trolly"){
                $('.metro-foreground').css('background-image','url(img/home/serv-large-train.png)');
                $( ".metro-title" ).text( "STREETCAR SYSTEM" );
                $( ".metro-arrow" ).animate({ left: "62%"}, 500, 'easeOutQuad', function() {});
                $(".alt-transport-box").fadeOut();
                $(".train-bg").fadeIn();
            } else if(myCar=="alt"){
                $('.metro-foreground').css('background-image','none');
                $( ".metro-title" ).text( "ALTERNATIVE TRANSPORTATION" );
                $( ".metro-arrow" ).animate({ left: "82%"}, 500, 'easeOutQuad', function() {});
                $(".train-bg").fadeOut();
                $(".alt-transport-box").fadeIn();
            }

             $('.metro-foreground').css('left','-20%');
            
             setTimeout(function() {
                 $( ".metro-foreground" ).animate({
                     opacity: 1,
                     left: "-10%"
                 }, 500, function() {}); 
             }, 300);      
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