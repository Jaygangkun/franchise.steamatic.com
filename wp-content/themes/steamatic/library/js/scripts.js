jQuery(document).ready(function($) {
	
	// Sticky Nav
	var header = $(".navbar-fixed");
	$(window).scroll(function() {
	  var scroll = $(window).scrollTop();
	
	  if (scroll >= 200) {
	  header.addClass("height");
	  header.addClass("scrolled");
	  } else {
	  header.removeClass("scrolled");
	  window.setTimeout(function (){ header.removeClass("height"); }, 150);
	  
	  }
	});
	
	$('body').css('padding-top', $('.nav-message').outerHeight());
	$('.navbar-static').css('margin-top', $('.nav-message').outerHeight());
	
	// FAQ Page Nav
	$('body.page-id-108').css('padding-top', $('.navbar-static').outerHeight());
	$('body.page-template-page-sitemap').css('padding-top', $('.navbar-static').outerHeight());
	
	// AOS
	AOS.init({
		offset: 300,
		duration: 500
	});
	
	
	// FAQs Toggle
	$('.q-a').click(function() {
		
		if ( $(this).hasClass('opened')) {
			
			$(this).removeClass('opened');
			$(this).children('.a').slideUp();
			
		} else {
			
			$(this).addClass('opened');
			$(this).children('.a').slideDown();
			
		}
		
	});
	
}); /* end of as page load scripts */