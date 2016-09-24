$(document).ready(function() {
	$(".botao.mobile").click(function() {
		$(".menu").toggle();
	});

	document.onclick = function(event) {
		var isVisible = $(".menu").is(":visible");
		var buttonClicked = event.target.matches(".botao");
		var imageClicked = event.target.matches("#btn-img");
		var width = $(window).width();
		if (!buttonClicked && isVisible && !imageClicked && width <= 650) {
			$(".menu").toggle();
		}
	};
});