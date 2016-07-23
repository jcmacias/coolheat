	// JavaScript Document

(function($) {
	"use strict";
			var defaultColor="#0064C8"; //change color code if you want to make color scheme with different
	       $().ready(function(){
				      
		        if($.cookie('heatingColors')==null)
				{
					$.cookie("heatingColors",defaultColor,{ expires: 20*365, path: '/' });
					$(".bgcolor").css('background-color',$.cookie("heatingColors"));
					$(".textcolor").css('color',$.cookie("heatingColors"));
					$(".affixcolor").css('background-color',$.cookie("heatingColors"));
					$(".bordercolor").css('border-color',$.cookie("heatingColors"));
					$(".textcolor").css('color',$.cookie("heatingColors"));
					$("ul.filter-list li.active").css('color',$.cookie("heatingColors"));
					$("ul.filter-list li.active a").css('color',$.cookie("heatingColors"));
			
				}else
				{
					$(".bgcolor").css('background-color',$.cookie("heatingColors"));
					$(".textcolor").css('color',$.cookie("heatingColors"));
					$(".affixcolor").css('background-color',$.cookie("heatingColors"));
					$(".bordercolor").css('border-color',$.cookie("heatingColors"));
					$(".textcolor").css('color',$.cookie("heatingColors"));
					$("ul.filter-list li.active").css('color',$.cookie("heatingColors"));
					$("ul.filter-list li.active a").css('color',$.cookie("heatingColors"));					
				}
	    		//$("ul .nav li:first").addClass("active");

				$(".color-icon a").on('click',function(){
	      			var div = $('.color-scheme');
		 			if (div.css('right') === '-200px') {
	        			$('.color-scheme').animate({
	         		 	right: '0px'
	        			});
	        			$('.roofer-colors').css("display", "block"); 
		  			}
		  			else
		  			{
	       				$('.color-scheme').animate({
	          			right: '-200px'
	        			});
	        			$('.roofer-colors').css("display", "none");
	      			}		
				});
			$("ul.colors").find("li").each(function(){
				$(this).css({'background-color':$(this).attr("data-color"),'border-color':$(this).attr("data-color")});
				if($(this).attr("data-color")==$.cookie("heatingColors"))
				{
					$(this).addClass("activeColor");	
				}
			})
		
			$("ul.colors li").on("click",function(){
				$("ul.colors li").removeClass("activeColor");
				$(this).addClass("activeColor");
				$.cookie("heatingColors",$(this).attr("data-color"),{ expires: 20*365, path: '/' })
				$(".bgcolor").css('background-color',$.cookie("heatingColors"));
				$(".textcolor").css('color',$.cookie("heatingColors"));
				$(".affixcolor").css('background-color',$.cookie("heatingColors"));
				$(".bordercolor").css('border-color',$.cookie("heatingColors"));
				$("ul.filter-list li.active").css('color',$.cookie("heatingColors"));
				$("ul.filter-list li.active a").css('color',$.cookie("heatingColors"));
				$("ul#portfolio-filter li a.current").css('color',$.cookie("heatingColors"));
			})			
		
			$(".hover").hover(function(){
				$(this).css({'background-color':$.cookie("heatingColors"),'border-color':$.cookie("heatingColors")});
			
			},function(){
				$(this).removeAttr("style");
			});
			$(".textHover").hover(function(){
				
				$(this).css('color',$.cookie("heatingColors"));
			},function(){
				$(this).removeAttr("style");
			});	
			
			$("#resetSchemeDefault").on("click",function(){
				$.cookie("heatingColors",defaultColor,{ expires: 20*365, path: '/' });
				$(".bgcolor").css('background-color',$.cookie("heatingColors"));
				$(".textcolor").css('color',$.cookie("heatingColors"));
				$(".affixcolor").css('background-color',$.cookie("heatingColors"));
				$(".bordercolor").css('border-color',$.cookie("heatingColors"));
				$(".textcolor").css('color',$.cookie("heatingColors"));
				$("ul.filter-list li.active").css('color',$.cookie("heatingColors"));
				$("ul.filter-list li.active a").css('color',$.cookie("heatingColors"));
			})
			 
		});
					    			 
 })(jQuery);




    

