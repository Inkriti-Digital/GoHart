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
<<<<<<< HEAD
<<<<<<< HEAD


    

    //CUSOTM PARALLAX ANIMATIONS

    // var lastScrollTop = 0;
    // $(window).scroll(function(event){
    //     var st = $(this).scrollTop();
    //     var myScroll = $(window);
    //     var scrollTotal = myScroll.scrollTop();

    //    if (st > lastScrollTop){
    //     // downscroll code

    //     //top bus parallax - scroll down
    //     if(scrollTotal >=0 && scrollTotal <=400){
    //         var b1 = $( ".landing .bus" );
    //         var b1Pos = b1.position();
    //         // console.log( "left: " + b1Pos.left + ", top: " + b1Pos.top );

    //         if(b1Pos.left<=-25){
    //             $('.landing .bus').css('left', '+='+'30%');
    //             $('.landing').css('background-position', '-='+'10%');
    //         }
    //     }


    //     //services section parallax - scroll down
    //     if(scrollTotal >=600 && scrollTotal <=1100){
    //         var b2 = $( ".metro-main .metro-foreground" );
    //         var b2Pos = b2.position();
    //         // console.log( "left: " + b2Pos.left + ", top: " + b2Pos.top );

    //         if(b2Pos.left<=-25){
    //             $('.metro-main .metro-foreground').css('left', '+='+'30%');
    //             $('.metro-main').css('background-position', '-='+'12%');
    //         }
    //     }


    //      //gohart section parallax - scroll down
    //     if(scrollTotal >=2200 && scrollTotal <=3000){
    //         var b3 = $( ".gohart .bus" );
    //         var b3Pos = b3.position();
    //         console.log( "left: " + b3Pos.left + ", top: " + b3Pos.top );

    //         if(b3Pos.left<=-25){
    //             $('.gohart .bus').css('left', '+='+'20%');
    //             $('.gohart').css('background-position', '-='+'12%');
    //         }
    //     }

    //     console.log(scrollTotal);


    //    } else {
    //         //top bus scroll up
    //         if(scrollTotal >=0 && scrollTotal <=400){
    //             var b1 = $( ".landing .bus" );
    //             var b1Pos = b1.position();
    //             // console.log( "left: " + b1Pos.left + ", top: " + b1Pos.top );

    //             if(b1Pos.left>=-300){
    //                 $('.landing .bus').css('left', '-='+'30%');
    //                 $('.landing').css('background-position', '+='+'10%');
    //             }
    //         }

    //         //services section parallax - scroll down
    //         if(scrollTotal >=600 && scrollTotal <=1100){
    //             var b2 = $( ".metro-main .metro-foreground" );
    //             var b2Pos = b2.position();
    //             console.log( "left: " + b2Pos.left + ", top: " + b2Pos.top );

    //             if(b2Pos.left>=-200){
    //                 $('.metro-main .metro-foreground').css('left', '-='+'15%');
    //                 $('.metro-main').css('background-position', '+='+'12%');
    //             }
    //         }


    //          //gohart section parallax - scroll down
    //     if(scrollTotal >=2200 && scrollTotal <=3000){
    //         var b3 = $( ".gohart .bus" );
    //         var b3Pos = b3.position();
    //         console.log( "left: " + b3Pos.left + ", top: " + b3Pos.top );

    //         if(b3Pos.left>=-200){
    //             $('.gohart .bus').css('left', '-='+'20%');
    //             $('.gohart').css('background-position', '+='+'12%');
    //         }
    //     }
    //        }

           


    //        lastScrollTop = st;
    // });

=======
>>>>>>> live-pathing
=======
>>>>>>> live-pathing
});