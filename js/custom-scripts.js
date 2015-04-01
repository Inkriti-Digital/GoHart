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
        // console.log('hit in');
         $(this).closest(".metro-block").find(".hover-box .metro-hover").fadeIn();        
         $(this).closest(".metro-block").find("img").animate({
            opacity: 0.5 }, 500, function() { /*complete*/});
         }, function() {          
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
        // console.log('hit nav control');
        setTimeout(function() {            
            $(".close-nav").fadeIn();
        }, 400);

        //animate main nav in
        $(".main-nav").animate({ 
            right: 0,
            opacity: 1
        }, 500, 'easeOutQuad', function() {});
    });

     $(".close-nav").click(function(event) {
        // $(".main-nav").toggle();
        $(".close-nav").fadeOut();
       
        $('.main-nav .secondary ul').fadeOut();
        

        //$('.main-nav .secondary').css('width', '0');
        $(".main-nav .secondary").animate({ 
            width: 0
        }, 250, 'easeOutQuad', function() {

        });


        //fade out nav
        $(".main-nav").animate({ 
            right: -600,
            opacity: 0
        }, 750, 'easeOutQuad', function() { $(".main-nav").toggle(); });

        setTimeout(function() {            
             $(".menu-ico").fadeIn();
        }, 700);
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
        subNav = '.subnav-about';
        showSubNav();        
    });
	
	//Click event to scroll to top
	$('.gototop').click(function(){
		$('html, body').animate({scrollTop : 0},800);
		return false;
	});

    function showSubNav(){
        //$('.main-nav .secondary').css('width', '225px');
        $(".main-nav .secondary").animate({ 
            width: 225
        }, 250, 'easeOutQuad', function() {});
        // console.log(subNav);
        $('.main-nav .secondary ul').hide();

        setTimeout(function() {
          $(subNav).fadeIn();
        }, 250);
       
    }
    
    
    /* =================== Vijay code Addition - Start =================== */
    
			/* About page - Meet the Team members Functionality - Start */
				var windowScrollTop;
				/* ===== Team members description display Functionality - Start ===== */
					/* open ".team-members" team members detail description functionality - Start */	
						$(".team-members").click(function(){
							/* ========= Getting the 'data-rel' attribute value of ".team-members" class clicked and saving it to dataRelValue variable ========= */
							var dataRelValue = $(this).attr('data-rel');
							//alert(dataRelValue);
							
							/* ========= Hiding all team members detail description ========= */ 
							$(".team-member-detail-description").css('display','none');
							
							/* ========= Setting the dataRelValue value as class for displaying particular description in loop ========= */
							$("."+dataRelValue).css('display','block');
							
							/* ========= Scroll to top of description ======== */
							 windowScrollTop = $(window).scrollTop();
							 $('html, body').animate({
								scrollTop: $("."+dataRelValue).offset().top
							}, 500);
						});
					/* open ".team-members" team members detail description functionality - End */
				/* ===== Team members description display Functionality - End ===== */
				
				
				
				/* close all team members detail description functionality - Start */
					$(".team-member-detail-description-close").click(function(){
						/* ========= Hiding all team members detail description ========= */ 
						$(".team-member-detail-description").css('display','none');
						
						/* ========= Setting scroll to back ========= */
						$('html,body').animate({
							scrollTop: windowScrollTop
						},500);
					});
				/* close all team members detail description functionality - End */
			/* About page - Meet the Team members Functionality - End */
			
			/* About Employee login functionality - Start */
				/* ======= Employee Login Page Functionality - Start =======*/
					var termsOfUseActive = 0;
					$(".employee-terms-of-use").click(function(){
						if(termsOfUseActive == 0)
						{
							$(".employee-terms-of-use-desc").show();
							$(this).addClass('active');
							$(".employee-terms-active-img").show();
							termsOfUseActive = 1;
						}
						else
						{
							$(".employee-terms-of-use-desc").hide();
							$(this).removeClass('active');
							$(".employee-terms-active-img").hide();
							termsOfUseActive = 0;
						}
					});
				/* ======= Employee Login Page Functionality - End =======*/
			/* About Employee login functionality - End */
			
			
			/* brick icons - height setting functionality - Start */
				function brickIconsHeightSetting(){
					var brickIconLength = $(".brick-link .icon").length;
					//alert(brickIconLength);
					for(var h=0;h<brickIconLength;h++)
					{
						var currentBrickHeight = $(".brick-link .icon").eq(h).parent().height();
						//alert(currentBrickHeight);
						$(".brick-link .icon").eq(h).height(currentBrickHeight-3+'px');
					}
				}
				brickIconsHeightSetting();
				$( window ).resize(function() {
					$(".brick-link").css('height','initial');
					$(".brick-link .icon").css('height','initial');
					brickIconsHeightSetting();
				});
			/* brick icons - height setting functionality - End */
			
			
			
    /* =================== Vijay code Addition - End =================== */
});