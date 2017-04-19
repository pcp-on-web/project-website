// Freelancer Theme JavaScript

// Select German as default

if (window.location.hash=="#en") {	
	$(".en").css("display","inline");
	$(".de").css("display","none");
	$('a.en').css("display","block");
} else {
	$(".en").css("display","none");
	$(".de").css("display","inline");
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
			$(".en").css("display","inline");
			$(".de").css("display","none");
			$('a.en').css("display","block");
		} else {
			$(".en").css("display","none");
			$(".de").css("display","inline");
			$('a.de').css("display","block");
		};
	});


