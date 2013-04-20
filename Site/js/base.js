$(document).ready(function() {
	console.log("Ready.");

	// Initialise the hedgehog.
	Hedgehog.Init();

	$(window).resize(function() { 
		var iHeight = $(this).height();
		var iFooterHeight = $('#footer').outerHeight(true);
		
		$('#nav, #content').height((iHeight - iFooterHeight) + "px");
	}).resize();
});