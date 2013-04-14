Uploader = {
	Init: function() {
		var that = this;
		var interval = setInterval(function() { 
			var oDropZone = Dropzone.forElement("#fileUploader form");

			if ( !_.isNull(oDropZone) ) {
				// Bind the events.
				that.BindEvents(oDropZone);

				clearInterval(interval);
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
			var eLi = $("<li class='file'>" + e.name + "</li>");
			$('#filelist ul').append(eLi);
		});
	}

};