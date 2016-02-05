$(document).ready(function() {
	$(".botao.mobile").click(function() {
		$(".lista").toggle();
	});

	document.onclick = function(event) {
		var isVisible = $(".lista").is(":visible");
		var buttonClicked = event.target.matches(".botao");
		var imageClicked = event.target.matches("#btn-img");
		var width = $(window).width();
		if (!buttonClicked && isVisible && !imageClicked && width <= 650) {
			$(".lista").toggle();
		}
	};
});