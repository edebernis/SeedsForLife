/**
 *
 * Seeds For Life Javascript library
 *
 * @author edebernis
 * @version 1.0
 *
 **/

/*
 * Trigger popover objects.
 * Set possibility to add HTML code
 * in popover content.
 *
 */
$('.sfl-popover').popover({
	html: true
});


/*
 * Provide a slide effect for 
 * dropdown elements in navbar.
 *
 */
$('.nav .dropdown').hover(function() {
	$(this).find('.dropdown-menu').first().slideToggle(300);
});


/*
 * Start the slideshow and
 * set the animation period.
 *
 */
$('.carousel').carousel({
  	interval: 6000
});