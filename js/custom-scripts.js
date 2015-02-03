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
    }


});