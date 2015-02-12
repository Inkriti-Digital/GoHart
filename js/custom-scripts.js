$(document).ready(function(){


	resizeElements();
	//RESIZE-ELEMENTS
    
	$(window).resize(function() {
		resizeElements();
    });

    function resizeElements(){
    	var landingWidth = $('.landing').width();
    	var landingHeight = Math.floor(landingWidth*0.58214);
    	$('.landing').css('height', landingHeight);

    	var metroHeight = Math.floor(landingWidth*0.58214);
    	$('.metro-main').css('height', metroHeight);

        var goHartHeight = Math.floor(landingWidth*0.851);
        $('.gohart').css('height', goHartHeight);



        var pageHeadWidth = $('.container .header').width();
        var pageHeadHeight = Math.floor(pageHeadWidth*0.355);
        $('.container .header').css('height', pageHeadHeight);
    }


});