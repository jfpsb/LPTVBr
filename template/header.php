<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" type="text/css"
	href="/LPTVBr/resources/css/template.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="shortcut icon" href="/LPTVBr/favicon.ico" type="image/x-icon" />
<link id="favicon" href="/LPTVBr/favicon.ico" rel="shortcut icon"
	type="image/vnd.microsoft.icon"></link>
<script type="text/javascript">
	$(document).ready(function() {
		$(".mobile-button").click(function(){
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
</script>
</head>

<body>
	<header id="container-header">

		<div id="container-nav">

			<nav id="default-nav">
				<img id="banner-default" class="img-banner"
					src="/LPTVBr/resources/imagens/banner.jpg" alt="Banner" />
				<form class="template-form">
					<a href="/LPTVBr/index.php" class="button">Página Inicial</a> <a
						href="/LPTVBr/musicas/mus-leg.php" class="button">Músicas
						Traduzidas</a> <a href="/LPTVBr/teste.php" class="button">Vídeos
						Legendados</a> <a href="index.php" class="button">Redes Sociais</a>
					<a href="index.php" class="button">Sobre</a>
				</form>
			</nav>

			<nav id="mobile-nav">
				<img id="banner320" class="img-banner"
					src="/LPTVBr/resources/imagens/banner320.jpg" alt="Banner" />
				<div class="mobile-form">
					<div class="button-wrapper">
					<button class="mobile-button">
						<img id="btn-img" width="24px" align="left"
							src="/LPTVBr/resources/imagens/menu-arrow.png">Menu
					</button>
					<ol class="mobile-menu">
						<li class="mobile-li"><a class="mobile-link"
							href="/LPTVBr/index.php">Página Inicial</a></li>
						<li class="mobile-li"><a class="mobile-link"
							href="/LPTVBr/musicas/mus-leg.php">Músicas Traduzidas</a></li>
						<li class="mobile-li"><a class="mobile-link"
							href="/LPTVBr/videos/videos-trad.php">Vídeos Legendados</a></li>
						<li class="mobile-li"><a class="mobile-link"
							href="/LPTVBr/redes-sociais.php">Redes Sociais</a></li>
						<li class="mobile-li"><a class="mobile-link"
							href="/LPTVBr/sobre.php">Sobre</a></li>
					</ol>
					</div>
				</div>
			</nav>
		</div>

	</header>
</body>
</html>