// Freelancer Theme JavaScript

// Select German as default

$(".en").addClass("eng");
$(".eng").removeClass("en");
$(".eng").css("display","none");

if (window.location.hash=="#en") {	
			$(".eng").removeAttr("style");
			$(".de").css("display","none");
			$('a.eng').css("display","block");
} else {
			$(".eng").css("display","none");
			$(".de").removeAttr("style");
			$('a.de').css("display","block");
};

(function($) {
    "use strict"; // Start of use strict

    // jQuery for page scrolling feature - requires jQuery Easing plugin
    $('.page-scroll a').bind('click', function(event) {
        var $anchor = $(this);
		$('html, body').stop().animate({
	        scrollTop: ($($anchor.attr('href')).offset().top - 50)
	    }, 1250, 'easeInOutExpo');
	    event.preventDefault();
    });

    // Highlight the top nav as scrolling occurs
    $('body').scrollspy({
        target: '.navbar-fixed-top',
        offset: 51
    });

    // Closes the Responsive Menu on Menu Item Click
    $('.navbar-collapse ul li a').click(function(){ 
            $('.navbar-toggle:visible').click();
    });

    // Offset for Main Navigation
    $('#mainNav').affix({
        offset: {
            top: 100
        }
    })



})(jQuery); // End of use strict


	$('a.switch').on("click",function(){
		if ($(this).attr("href")=="#en") {	
			$(".eng").removeAttr("style");
			$(".de").css("display","none");
			$('a.eng').css("display","block");
		} else {
			$(".eng").css("display","none");
			$(".de").removeAttr("style");
			$('a.de').css("display","block");
		};
	});


