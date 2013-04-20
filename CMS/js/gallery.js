Gallery = {
	BindEvents: function() {
		var that = this;
		$('#live-buttons').on('click', '#push span', function() {
			that.Push($('#offline option:selected'));
		});
		$('#live-buttons').on('click', '#pull span', function() {
			that.Pull($('#online option:selected'));
		});
	},

	Push: function(eItems) {
		$(eItems).each(function() {
			$(this).appendTo($('#online select'));
		});
	},

	Pull: function(eItems) {
		$(eItems).each(function() {
			$(this).appendTo($('#offline select'));
		});
	}
}