/* Tabs
========================================================================== */

jQuery(document).ready(function($) {
  //tabs
  if (jQuery(".tabs-wrapper").length > 0 ) {

  	jQuery(".tabs-wrapper .tab-menu-item a").click(function(event) {
  		event.preventDefault();
  		var $parents = jQuery(this).parents(".tabs-wrapper");
		$parents.addClass('user-interaction');
  		$parents.find(".tab-menu-item").removeClass('active in')
  		jQuery(this).parent("li").addClass('active in')

  		$parents.find(".tabs-item").removeClass('active in')
  		$parents.find(jQuery(this).attr("href")).addClass("active in")

  		return false;
  	});
  }
});
