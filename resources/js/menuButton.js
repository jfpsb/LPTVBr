$(document).ready(function() {
	var menuMobileVisible = false;

	$("#menu-mobile-botao").click(function() {
		if (!menuMobileVisible) {
			$('.lista').animate({
				top : "260px"
			}, 200);
			
			$('.mainSection').animate({
				top : "240px"
			}, 200);
			
			$('.container-footer').animate({
				bottom : "-240px"
			}, 200);
			
			$('.ads').animate({
				top: "240px"
			}, 200);
			
			menuMobileVisible = true;
		} else {
			$('.lista').animate({
				top : "0px"
			}, 200);
			
			$('.mainSection').animate({
				top : "65px"
			}, 200);
			
			$('.container-footer').animate({
				bottom : "-60px"
			}, 200);
			
			$('.ads').animate({
				top : "65px"
			}, 200);
			
			menuMobileVisible = false;
		}
	});
});