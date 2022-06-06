$(document).ready(function(){
	//full height slideshow
	var slider_height = $( window ).height() - $('.topbar').height();
	$( '#slider_home .itemin' ) .css({'height': slider_height +'px'});	
	$( window ).resize(function(){
		var slider_height = $( window ).height() - $('.topbar').height();
		$( '#slider_home .itemin' ) .css({'height': slider_height +'px'});	
	});
	//end full height slideshow
	
	$('#slider_home').flexslider({		
		animation: "fade",
		slideshowSpeed: 5000,
		directionNav: false
	});
	
});