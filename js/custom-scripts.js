$(document).ready(function(){
    var newsWidth;
    var animateWidth = 0;
    var windowHeight;
    var windowWidth;
    var subNav;
    var mobileSite;


	resizeElements();
	//RESIZE-ELEMENTS
    
	$(window).resize(function() {
		resizeElements();
    });

    function resizeElements(){
        windowWidth = $(window).width();

        if(windowWidth<=768){
            mobileSite = true;          
        } else if(windowWidth>768){
            mobileSite=false;
        }

        newsWidth = $('.news-blocks').width();
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


        mobileDetect();
    }

    //======== * MOBIE ELEMENTS * ========//
    function mobileDetect(){
        if(mobileSite == true){
        } else if(mobileSite == false){
                skrollr.init({
                    smoothScrolling: false,
                    mobileDeceleration: 0.004,
                    forceHeight: false
                });
        }
    }


    //HOVER CONTROLS
     $(".metro-block").hover(function() {
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

    $(".ico-block").hover(function() {
        $(".metro-tooltip", this).fadeToggle(350);
    });

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
        setTimeout(function() {
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
        setTimeout(function() {
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
        $(".close-nav").fadeOut();       
        $('.main-nav .secondary ul').fadeOut();
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
	
	//Click event to scroll to bottom
	$('.gotobottom').click(function(){
		$('html, body').animate({scrollTop : $(document).height()},3000);
		return false;
	});

    function showSubNav(){
       
        
        //Submenu Functionality -If internet explorer -  Start
			var ua = window.navigator.userAgent;
			var msie = ua.indexOf("MSIE ");
			if (msie > 0)
			{
				 $(".main-nav .secondary").animate({ 
		            width: '120px'
		        }, 250, 'easeOutQuad', function() {});
		        $('.main-nav .secondary ul').hide();
		        $('.main-nav .secondary ul').css('width','200px');
		        $('.main-nav .secondary ul').css('left','-100px');
		        $('.primary').css('width','400px');
		
		        setTimeout(function() {
		          $(subNav).fadeIn();
		        }, 250);
			}
			//Submenu Functionality -If internet explorer -  End
			//Submenu Functionality - If other browsers - Start
			else
			{
				 $(".main-nav .secondary").animate({ 
		            width: '225px'
		        }, 250, 'easeOutQuad', function() {});
		        $('.main-nav .secondary ul').hide();
		
		        setTimeout(function() {
		          $(subNav).fadeIn();
		        }, 250);
			}
			//Submenu Functionality - If other browsers - End
       
    }

    $(window).scroll(function() {        
        if(mobileSite==false){
            var eTop = $('.headline').offset().top; //get the offset top of the element
            var hideLockup = (eTop - $(window).scrollTop());

            //HOME LOGO
            if(hideLockup<=85){
                $(".landing .full-logo").hide();
                $(".landing .box-logo").show();
                $(".landing .logo").css('width', '4.35%');
                $(".landing .logo").css('max-width', '73px');
            } else if( hideLockup >= 100){
                $(".landing .full-logo").show();
                $(".landing .box-logo").hide();
                $(".landing .logo").css('width', '20%');
                $(".landing .logo").css('max-width', '280px');
            }

            //INNER LOGO
            if(hideLockup<=-175){
                $(".header .full-logo").hide();
                $(".header .box-logo").show();
                $(".header .logo").css('width', '5%');
                // $(".header .logo").css('max-width', '73px');
            } else if( hideLockup > -176){
                $(".header .full-logo").show();
                $(".header .box-logo").hide();
                $(".header .logo").css('width', '20%');
                $(".header .logo").css('max-width', '280px');
            }

            if(hideLockup< -300){
                $('.return-top').show();
            } else if(hideLockup> -300){
               $('.return-top').hide(); 
            }
        }

    });

    //select-box code
    $('#goHartSelect').change(function() {
        var selectedVal = $("#goHartSelect option:selected").attr('value');

        if(selectedVal=="how-to-ride"){
           $('.mobile-how-to-content').show();
           $('.mobile-app-center-content').hide(); 
           $('.mobile-links-content').hide(); 
        } else if(selectedVal=="app-center"){
            $('.mobile-how-to-content').hide();
           $('.mobile-app-center-content').show(); 
           $('.mobile-links-content').hide(); 
        } else if(selectedVal=="links"){
            $('.mobile-how-to-content').hide();
           $('.mobile-app-center-content').hide(); 
           $('.mobile-links-content').show(); 
        }
    });


    //social nav hover effect

    $(".fb-ico").hover(function() {
         $(".fb-ico").attr('src', 'img/ico-fb-on.png');
         }, function() {          
         $(".fb-ico").attr('src', 'img/ico-fb.png');
        }
    );

     $(".twitter-ico").hover(function() {
         $(".twitter-ico").attr('src', 'img/ico-twitter-on.png');
         }, function() {          
         $(".twitter-ico").attr('src', 'img/ico-twitter.png');
        }
    );

     $(".b-ico").hover(function() {
         $(".b-ico").attr('src', 'img/ico-b-on.png');
         }, function() {          
         $(".b-ico").attr('src', 'img/ico-b.png');
        }
    );

     $(".yt-ico").hover(function() {
         $(".yt-ico").attr('src', 'img/ico-yt-on.png');
         }, function() {          
         $(".yt-ico").attr('src', 'img/ico-yt.png');
        }
    );

     $(".f-ico").hover(function() {
         $(".f-ico").attr('src', 'img/ico-f-on.png');
         }, function() {          
         $(".f-ico").attr('src', 'img/ico-f.png');
        }
    );


    
    
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
						$(".brick-link .icon").eq(h).css('height',currentBrickHeight+'px');
					}
				}
				brickIconsHeightSetting();
				$( window ).resize(function() {
					$(".brick-link").css('height','initial');
					$(".brick-link .icon").css('height','initial');
					brickIconsHeightSetting();
				});
			/* brick icons - height setting functionality - End */
			
			
			
			/* ===== placeholder setting functionality for IE - Start ===== */
			$('input, textarea').placeholder();
			/* ===== placeholder setting functionality for IE - End ===== */
			
			
			/* ===== required field setting functionality for IE, Safari - Start ===== */
			// fix for IE < 11
		    if ($("<input />").prop("required") === undefined) {
		        $(document).on("submit", function(e) {
		            $(this)
		                    .find("input, select, textarea")
		                    .filter("[required]")
		                    .filter(function() { return this.value == ''; })
		                    .each(function() {
		                        e.preventDefault();
		                        $(this).css({ "border-color":"red" });
		                        //alert( $(this).prev('label').html() + " is required!");
		                        alert( $(this).attr('placeholder') + " is required!");
		                    });
		        });
		
		    }
		    
		    
		    //fix for safari
		    if (navigator.userAgent.indexOf('Safari') != -1 && navigator.userAgent.indexOf('Chrome') == -1)
		    {
				   var forms = document.getElementsByTagName('form');
					for (var i = 0; i < forms.length; i++) {
					    forms[i].noValidate = true;
					
					    forms[i].addEventListener('submit', function(event) {
					        //Prevent submission if checkValidity on the form returns false.
					        if (!event.target.checkValidity()) {
					            event.preventDefault();
					            //Implement you own means of displaying error messages to the user here.
					            alert("Please fill all the required(*) fields.");
					        }
					    }, false);
					}
			 }
		    /* ===== required field setting functionality for IE, Safari - End ===== */
		    
		    
		    
		    /* ======= Detours dates - height setting functionality - Start ======= */
				function detoursHeightSetting(){
					var detourLength = $(".alerts-detours .detour-thumb .point-no-area .point-no").length;
					//alert(detourLength);
					for(var d=0;d<detourLength;d++)
					{
						var currentdetourHeight = $(".alerts-detours .detour-thumb .point-no-area .point-no").eq(d).innerHeight();
						var currentdetourParentHeight = $(".alerts-detours .detour-thumb .point-no-area .point-no").eq(d).parent().height();
						//alert(currentdetourHeight);
						$(".alerts-detours .detour-thumb .point-no-area .point-no").eq(d).css('margin-top',(currentdetourParentHeight - currentdetourHeight)/2+'px');
					}
				}
				detoursHeightSetting();
				$( window ).resize(function() {
					$(".alerts-detours .detour-thumb .point-no-area .point-no").css('margin-top','initial');
					detoursHeightSetting();
				});
			/* ======= Detours dates - height setting functionality - End ======= */
			
			
			/* ===== Math Captcha code to forms - Start ===== */
			$('#comment-form1').ebcaptcha();
			$('#newsletter-form1').ebcaptcha();
			/* ===== Math Captcha code to forms - End ===== */
			
			
			
    /* =================== Vijay code Addition - End =================== */
});