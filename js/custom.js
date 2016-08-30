	// JavaScript Document

(function($) {
	"use strict";
	             //for search box
				$('.searchbox-icon').on("click",function(){
					if($('.searchbox').hasClass('searchbox-open'))
					{
						$('.searchbox').removeClass('searchbox-open');
						$('.searchbox-input').focus();
					}else
					{
						$('.searchbox').addClass('searchbox-open');
					}
				});

				 //for dropdown on hover
				$("li.dropdown").hover(function(){
					$(this).addClass("open");
					$(this).find("ul.dropdown-menu").css({'opacity':0});
					$(this).find("ul.dropdown-menu").animate({'opacity':1},400);
				},function(){
					$(this).removeClass("open");
				});


	   		 //Toggle for show the form section on Home Page
		      $( ".toggle" ).on("click",function() {
					$(this).toggleClass("active");
					$( ".estimation-container" ).slideToggle( "slow" );
				 });

				// Carousel Auto-Cycle on about page
				$('.carousel').carousel({
					interval: 6000
				});

			//Check to see if the window is top if not then display button
			   var offset =650;
				var duration = 300;
				$(window).scroll(function() {
					if ($(this).scrollTop() > offset) {
						$('.back-to-top').fadeIn(200);
					} else {
						$('.back-to-top').fadeOut(200);
					}
				});

				$('.back-to-top').on("click",function(event) {
					event.preventDefault();
					$('html, body').animate({scrollTop: 0}, 500);
					return false;
				});


			/*	Animate.css Trigger */
			$('.jw-animate').each(function() {
					var $curr = $(this);
					var $currOffset = $curr.attr('data-gen-offset');
					if ($currOffset === '' || $currOffset === 'undefined' || $currOffset === undefined) 		{
						$currOffset = 'bottom-in-view';
					}
					if ($currOffset === 'none') {
						$curr.trigger('jw-animate');
					} else {
						$curr.waypoint(function() {
							$curr.trigger('jw-animate');
						}, {triggerOnce: true, offset: $currOffset});
					}
				});
	   			// ewebcraft Animate General - Bind
				$('.jw-animate-gen').each(function() {
					var $curr = $(this);
					$curr.bind('jw-animate', function() {
						$curr.css('opacity', '');
						$curr.addClass('animated ' + $curr.data('gen'));
					});
				});

				// ewebcraft Animate General
				$('.jw-animate-gen').each(function() {
					var $curr = $(this);
					var $currOffset = $curr.attr('data-gen-offset');
					if ($currOffset === '' || $currOffset === 'undefined' || $currOffset === undefined) {
						$currOffset = 'bottom-in-view';
					}
					$curr.waypoint(function() {
						$curr.trigger('jw-animate');
					}, {triggerOnce: true, offset: $currOffset});
				});

				/* Window Loaded Handler*/
				$(window).on("load",function(){
					$('body').addClass('loaded');
					$('#loader-wrapper .load_title').remove();
					$('.progressBar').waypoint(function() {
					   progressBar($(this).attr("data-animate-offset"), $('#progressBar'));
					}, {triggerOnce: true, offset: 'bottom-in-view'});
				});

				/* For Color Switch */
				$("ul.filter-list li.active a, ul#portfolio-filter li a.current").css('color',$.cookie("heatingColors"));
				$("ul.filter-list li a, ul#portfolio-filter li a").click(function(){
					$(this).css('color',$.cookie("heatingColors"));
					$("ul.filter-list li a").not(this).removeAttr("style");
					$("ul#portfolio-filter li a").not(this).removeAttr("style");
				});
 })(jQuery);




    

