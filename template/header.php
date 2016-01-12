<?php
define ( 'ROOT', 'http://localhost/LPTVBr' )?>

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
<?php
if (isset ( $pageTitle )) {
	echo $pageTitle;
} else {
	echo "LinkinParkTVBr";
}
?>
</head>

<body>
	<header id="container-header">

		<div id="container-nav">

			<nav id="default-nav">
				<img id="banner-default" class="img-banner"
					src="/LPTVBr/resources/imagens/banner.jpg" alt="Banner" />
				<form class="template-form">
					<a href="/LPTVBr/index.php" class="button">Página Inicial</a> <a
						href="/LPTVBr/mus-leg.php" class="button">Músicas Traduzidas</a> <a
						href="/LPTVBr/teste.php" class="button">Vídeos Legendados</a> <a
						href="index.php" class="button">Redes Sociais</a> <a
						href="index.php" class="button">Sobre</a>
				</form>
			</nav>

			<nav id="mobile-nav">
				<img id="banner320" class="img-banner"
					src="/LPTVBr/resources/imagens/banner320.jpg" alt="Banner" />

				<form class="mobile-form"></form>
			</nav>
		</div>

	</header>
</body>
</html>