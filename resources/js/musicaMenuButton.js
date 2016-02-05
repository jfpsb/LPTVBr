$(document).ready(function() {
	$(".musica.menu").click(function() {
		$(".tabs-mobile").toggle();
	});

	window.onclick = function(event) {
		var isVisible = $(".tabs-mobile").is(":visible");
		var buttonClicked = event.target.matches(".musica.menu");
		var imageClicked = event.target.matches("#btn-img");
		if (!buttonClicked && isVisible && !imageClicked) {
			$(".tabs-mobile").toggle();
		}
	};
});