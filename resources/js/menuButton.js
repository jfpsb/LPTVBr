$(document).ready( function() {
	var menuMobileVisible = false;

	$("#menu-mobile-botao").click(function() {
		if (!menuMobileVisible) {
			document.getElementById('menu-mobile-wrapper').style.left = "0px";
			document.getElementById('menu-mobile-botao').style.backgroundImage = "url('/resources/imagens/menu-arrow-left.png')";
			menuMobileVisible = true;
		}
		else {
			document.getElementById('menu-mobile-wrapper').style.left = "-247px";
			document.getElementById('menu-mobile-botao').style.backgroundImage = "url('/resources/imagens/menu-arrow-right.png')";
			menuMobileVisible = false;
		}
	});
});