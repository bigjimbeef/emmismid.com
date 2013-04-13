Navigation = {
	Init: function() {
		this.BindNavEvents();
	},

	BindNavEvents: function() {
		$('#navbar').on('click', '.pageThumb', function() {
			var sUrl = "?page=" + $(this).data('urlpart');
			location.href = sUrl;
		});
	}
};
