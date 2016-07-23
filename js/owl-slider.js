	// JavaScript Document

$(document).ready(function(){
	$("#owl-example").owlCarousel({
			 		loop:true,
			 		autoplay:true,
			 		autoplayHoverPause:true,
			 		autoPlay: 3000, //Set AutoPlay to 3 seconds
					items : 4,
					itemsDesktop : [1199,3],
					itemsDesktopSmall : [979,3]
				});
	$('#slider-with-blocks-1').owlCarousel({        
         autoPlay: true,
         navigation : true, // Show next and prev buttons
         slideSpeed : 300,
         singleItem:true,
         navigationText: [
        "<i class='fa fa-chevron-left'></i>",
        "<i class='fa fa-chevron-right'></i>"],
        });
});
    

