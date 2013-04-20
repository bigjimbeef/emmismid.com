$(document).ready(function() {
	console.log("Page is loaded.");

	Navigation.Init();

	$(window).resize(function() {
		var iHeaderHeight = 
			$('#heading').outerHeight(true) + $('#navbar').outerHeight(true);
		var iPadding = 20;
		var iTargetHeight = $(window).height() - iHeaderHeight - iPadding;

		$('#body').height(iTargetHeight);
	}).resize();
});