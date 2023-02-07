/* Height menu mobile
========================================================================== */

jQuery(document).ready(function ($) {

	var vh = window.innerHeight * 0.01;
	document.documentElement.style.setProperty('--vh', vh+'px');

	window.addEventListener('resize', function(event){
		var vh = window.innerHeight * 0.01;
		document.documentElement.style.setProperty('--vh', vh+'px');
	});
});

