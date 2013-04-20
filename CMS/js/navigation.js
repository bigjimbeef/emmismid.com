Navigation = {
	Init: function() {
		this.BindNavEvents();
	},

	BindNavEvents: function() {
		$('#navbar').on('click', 'li', function() {
			console.log("Going: ", this);
			var sId = $(this).attr('id');

			$('#body').html('');
			$('#body').load("../HTML/pages/" + sId + ".html", function() {
				// DEBUG
				Gallery.BindEvents();
			});
		});
	}
};
