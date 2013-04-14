Uploader = {
	Init: function() {
		var that = this;
		var tInterval = setInterval(function() {
			var oDropZone = Dropzone.forElement("#fileUploader form");

			if ( !_.isNull(oDropZone) ) {
				// Bind the events.
				that.BindEvents(oDropZone);

				clearInterval(tInterval);
			}
		}, 100);
	},

	BindEvents: function(oDropZone) {
		oDropZone.on("addedfile", function() {
			$('#fileUploader .default').animate({
				opacity: 0
			}, 500, function() {
				$(this).hide();
				$(this).parent().find('.preview').show();
			});
		});
	
		oDropZone.on("dragover", function() {
			$("#fileUploader form .default").addClass('hovered');
		});

		oDropZone.on("dragleave", function() {
			$("#fileUploader form .default").removeClass('hovered');
		});

		oDropZone.on("success", function(e,a) {
			$.ajax({
				url: "dispatch/base.php",
				type: "POST",
				data: {
					route: "files"
				},
				dataType: 'html',
				success: function(sResponse) {
					var sID = $(sResponse).attr('id');
					$('#' + sID).replaceWith($(sResponse));
				}
			});
		});
	}

};