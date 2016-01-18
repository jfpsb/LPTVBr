$(document).ready(function() {
	$(".mobile-button").click(function() {
		$(".mobile-menu").toggle('hide');
	});

	document.onclick = function(event) {
		var isVisible = $(".mobile-menu").is(":visible");
		var buttonClicked = event.target.matches(".mobile-button");
		var imageClicked = event.target.matches("#btn-img");
		if (!buttonClicked && isVisible && !imageClicked) {
			$(".mobile-menu").toggle('hide');
		}
	};
});