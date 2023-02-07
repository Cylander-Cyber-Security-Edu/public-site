/* Sticky Menu
========================================================================== */

jQuery(document).ready(function ($) {

	// init sticky menu
	var lastScrollPosition = 0;
	currentScrollPosition = $(window).scrollTop();
	$("body").addClass("has-sticky-menu");

	if (currentScrollPosition > 20) {
		$("body").addClass("sticky-menu");
	} else {
		$("body").removeClass("sticky-menu");
	}
	lastScrollPosition = currentScrollPosition;

	// update menu at scroll
	$(window).scroll(function () {
		currentScrollPosition = $(window).scrollTop();
		if (currentScrollPosition > 20) {
			$("body").addClass("sticky-menu");
		} else {
			$("body").removeClass("sticky-menu");
		}
		if (currentScrollPosition > lastScrollPosition) {
			jQuery("body").removeClass("scroll-up");
			jQuery("body").addClass("scroll-down");
		} else {
			jQuery("body").removeClass("scroll-down");
			jQuery("body").addClass("scroll-up");
		}
		lastScrollPosition = currentScrollPosition;
	});

});

