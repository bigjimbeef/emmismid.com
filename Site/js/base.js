$(document).ready(function() {
	console.log("Ready.");

	$(window).resize(function() { 
		var iHeight = $(this).height();
		var iFooterHeight = $('#footer').outerHeight(true);
		
		$('#nav, #content').height((iHeight - iFooterHeight) + "px");
	}).resize();
});