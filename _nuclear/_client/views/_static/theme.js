
/*
$(document).ready(function(){
		$(function () {		
			$(window).scroll(function () {
				if ($(this).scrollTop() >100) {    				
					$('.navbar-default').addClass('navbar-fixed-top');
					$('#back-top2').fadeIn();
				} else {
					$('.navbar-default').removeClass('navbar-fixed-top');
					$('#back-top2').fadeOut();
				}
			});
			$('#back-top2 a').click(function () {
				$('body,html').animate({
					scrollTop: 0,
					easing: 'easeInOutCubic'
				}, 700);
				return false;
			});
		});
		
});*/
function closenav()
{
	$(".navbar-collapse").collapse('hide');
}


function go_to(obj){ 
	 var scoll=$('#'+obj).offset();
	 //if(scoll.top>850){scoll.top=850}
	 $('body,html').animate({scrollTop: scoll.top-170,easing: 'easeInOutCubic'}, 700);
}


function teste()

{
	$('.asideright').toggleClass('active');
	$('.overlay').toggleClass('on');
	}
function closeover()

{
	$('.asideright').toggleClass('active');
	$('.overlay').toggleClass('on');
	}	
jQuery(document).ready(function ($) {

	
        });
wow = new WOW(
	    {
		      boxClass:     'wow',      // default
		      animateClass: 'animated', // default
		      offset:       0,          // default
		      mobile:       true,       // default
		      live:         true        // default
		    }
		  )
		  
		  wow.init();

$(document).ready(function() {
	$('#myCarousel').carousel({
	interval: 2000,
	wrap:true
	})
    
    $('#myCarousel').on('slid.bs.carousel', function() {
    	//alert("slid");
	});
    
    
});