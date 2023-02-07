/* Toggle
========================================================================== */

/* Toggle
========================================================================== */

jQuery(document).ready(function($) {
	//toggle
	if (jQuery(".toggle-wrapper").length > 0 ) {
 
		jQuery(".toggle-wrapper .toggle-content").each(function(index, el) {
		 var origHeight = $(this).outerHeight();
		 $(this).attr('origHeight', origHeight);
		 $(this).css('height', '0px');
 
		});
		jQuery(".toggle-wrapper .toggle-item label").click(function(event) {
			$parent = jQuery(this).parents(".toggle-wrapper")
			$parent.find("input[name=faq]").not(jQuery(this).prev()).prop("checked", false);
 
			$toggle = jQuery(this).parents(".toggle-item");
			$toggleContent = $toggle.find('.toggle-content');
			if($toggle.hasClass('active'))
			{
				$toggle.removeClass('active');
			$toggleContent.css('height', '0px');
			}
			else
			{	
				$(".toggle-item.active .toggle-content").css('height', '0px');
				$(".toggle-item.active").removeClass('active');
			$toggleContent.css('height', $toggleContent.attr('origHeight')+'px');
				$toggle.addClass('active');
			}
 
		});
	}
 });