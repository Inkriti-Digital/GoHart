$(document).ready(function(){
    var newsWidth;
    var animateWidth = 0;
    var windowHeight;
    var subNav;


	resizeElements();
	//RESIZE-ELEMENTS
    
	$(window).resize(function() {
		resizeElements();
    });

    function resizeElements(){
        newsWidth = $('.news-blocks').width();
        // console.log('news width = ' + newsWidth);
    	var landingWidth = $('.landing').width();
    	var landingHeight = Math.floor(landingWidth*0.58214);
    	$('.landing').css('height', landingHeight);

        windowHeight = $(window).height();
        $('.main-nav').css('height', windowHeight);

    	var metroHeight = Math.floor(landingWidth*0.58214);
    	$('.metro-main').css('height', metroHeight);

        var goHart = $('.gohart').width();
        var goHartHeight = Math.floor(landingWidth*0.825);

        var goHartHeight = Math.floor(landingWidth*0.851);
        $('.gohart').css('height', goHartHeight);

        var pageHeadWidth = $('.container .header').width();
        var pageHeadHeight = Math.floor(pageHeadWidth*0.355);
        $('.container .header').css('height', pageHeadHeight);
    }


    //HOVER CONTROLS
     $(".metro-block").hover(function() {
        console.log('hit in');
         $(this).closest(".metro-block").find(".hover-box .metro-hover").fadeIn();        
         $(this).closest(".metro-block").find("img").animate({
            opacity: 0.5 }, 500, function() { /*complete*/});
         }, function() {
            console.log('hit out');
         $(this).closest(".metro-block").find(".hover-box .metro-hover").fadeOut();            
         $(this).closest(".metro-block").find("img").animate({
            opacity: 1          
          }, 500, function() { /* Animation complete.*/ });
        }
    );

     $(".primary li a").hover(function(event) {
        $("img", this).fadeToggle('fast');
     });

    //metrobox nav links
    $(".metro-box a").hover(function() {   
            $(".arrow", this).fadeIn(50);
    }, function() { 
            $(".arrow", this).fadeOut(50);
        }
    );

    //news controls
    $(".news-blocks .prev-arrow").click(function(event) {
        animateWidth+=newsWidth;
        console.log('animate' + animateWidth);
        setTimeout(function() {
            console.log('animate' + animateWidth);
                $("#newsRow1").animate({
                    left: animateWidth
                }, 2500);
            }, 300);
        setTimeout(function() {
            $("#newsRow2").animate({
                left: animateWidth
            }, 2500);
        }, 100);
    });

     $(".news-blocks .next-arrow").click(function(event) {
        animateWidth-=newsWidth;
        console.log('animate' + animateWidth);
        setTimeout(function() {
            console.log('animate' + animateWidth);
                $("#newsRow1").animate({
                    left: animateWidth
                }, 2250);
            }, 300);
        setTimeout(function() {
            $("#newsRow2").animate({
                left: animateWidth
            }, 2250);
        }, 100);
    });

     //accordian controls
     $(".q-a .question").click(function(event) {
        $(".answer", this).slideToggle(250);
        $(".plus", this).toggle();
        $(".minus", this).toggle();
     });


     //main-nav control
     $(".menu-ico").click(function(event) {
        $(".main-nav").toggle();
        $(".menu-ico").hide();
        $(".close-nav").show();
     });

     $(".close-nav").click(function(event) {
        $(".main-nav").toggle();
        $(".close-nav").hide();
        $(".menu-ico").show();
        $('.main-nav .secondary ul').hide();
        $('.main-nav .secondary').css('width', '0');
     });
     
     $(".return-top").click(function() {
          $("html, body").animate({ scrollTop: 0 }, "slow");
          return false;
     });

    //primary
    $("#nav-map").click(function(event) {
        subNav = '.subnav-maps';
        showSubNav();        
    });

    $("#nav-fares").click(function(event) {
        subNav = '.subnav-fares';
        showSubNav();        
    });

    $("#nav-services").click(function(event) {
        subNav = '.subnav-services';
        showSubNav();        
    });

    $("#nav-info").click(function(event) {
        subNav = '.subnav-info';
        showSubNav();        
    });

    $("#nav-customer").click(function(event) {
        subNav = '.subnav-customer';
        showSubNav();        
    });

    $("#nav-trans").click(function(event) {
        subNav = '.subnav-trans';
        showSubNav();        
    });

    $("#nav-about").click(function(event) {
        subNav = '.subnav-trans';
        showSubNav();        
    });

    function showSubNav(){
        $('.main-nav .secondary').css('width', '225px');
        // console.log(subNav);
        $('.main-nav .secondary ul').hide();

        setTimeout(function() {
          $(subNav).fadeIn();
        }, 125);
       
    }


   


});