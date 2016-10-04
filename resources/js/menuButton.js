$(document).ready(function() {
	var menuMobileVisible = false;

	$("#menu-mobile-botao").click(function() {
		if (!menuMobileVisible) {
			$('.lista').animate({
				top : "260px"
			}, 200);
			
			$('.mainSection').animate({
				top : "230px"
			}, 200);
			
			$('.container-footer').animate({
				bottom : "-230px"
			}, 200);
			
			menuMobileVisible = true;
		} else {
			$('.lista').animate({
				top : "0px"
			}, 200);
			
			$('.mainSection').animate({
				top : "60px"
			}, 200);
			menuMobileVisible = false;
			
			$('.container-footer').animate({
				bottom : "-60px"
			}, 200);
		}
	});
});