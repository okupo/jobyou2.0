/** ================================ SCROLL TO ================================**/
jQuery(document).ready(function($){
   jQuery('.anchor').click(function(){
      var goTo = jQuery(this).attr('href').split('#').pop();
      jQuery('html, body').animate({scrollTop: jQuery('#'+ goTo).offset().top }, 1500);
      return false;
   });
});
/** ================================ SCROLL TO ================================**/

/** ================================ SCROLL UP ================================**/
jQuery(document).ready(function($){
	//Check to see if the window is top if not then display button
	jQuery(window).scroll(function(){
		if (jQuery(this).scrollTop() > 400) {
			jQuery('#scrollToTop').fadeIn();
		} else {
			jQuery('#scrollToTop').fadeOut();
		}
	});
	//Click event to scroll to top
	jQuery('#scrollToTop').click(function(){
		jQuery('html, body').animate({scrollTop : 0}, 1500);
		return false;
	});
});
/** ================================ SCROLL UP ================================**/

jQuery(function($) {
  jQuery('#slides').slidesjs({
    height: 600,
    play: {
      active: true,
      auto: true,
      interval: 4000,
      swap: true
    }
  });
});

/* TinyCarousel Required: Initialize TinyCarousel with a jQuery doc ready */
jQuery(document).ready(function($){
    jQuery('#slider1').tinycarousel();
});
/* End TinyCarousel Required */
