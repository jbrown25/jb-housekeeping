//init-slider.js
(function($){
	$('.testimonial-slider').flexslider({
		animation: 'slide',

	});

	$(window).bind('resize', function() { 
	   setTimeout(function(){ 
	       var slider = $('.testimonial-slider').data('flexslider');   
	       slider.resize();
	   }, 500); 
	});
})(jQuery);