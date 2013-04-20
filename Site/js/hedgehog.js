approxPi = 3.141592653589793;

Hedgehog = {

	Init: function() {
		// Start following the cursor.
		this.FollowCursor();
	},

	FollowCursor: function() {
		$(document).mousemove(function(e) {
			var eArm = $('#hog-arm');
			var oPos = eArm.offset();

			// Get the cursor position.
			var iX = e.pageX;
			var iY = e.pageY;

			var iDeltaX = iX - oPos.left;
			var iDeltaY = iY - oPos.top;

			var iThetaRad = Math.atan(iDeltaY/iDeltaX);
			var iThetaDeg = iThetaRad * (180 / approxPi);

			eArm.get(0).style.webkitTransform = "rotate(" + iThetaDeg + "deg)";
		});
	}
};