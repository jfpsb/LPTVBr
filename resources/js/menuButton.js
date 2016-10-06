$(document).ready(function() {
	var menuMobileVisible = false;

	$("#menu-mobile-botao").click(function() {
		if (!menuMobileVisible) {
			$('.lista').animate({
				top: "60px"
			}, 200);

			menuMobileVisible = true;
		} else {
			$('.lista').animate({
				top: "-200px"
			}, 200);

			menuMobileVisible = false;
		}
	});
});