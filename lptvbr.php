<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<link rel="stylesheet" type="text/css" href="resources/css/template.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
	<link id="favicon" href="favicon.ico"
				rel="shortcut icon" type="image/vnd.microsoft.icon"></link>
</head>

<body>	
	<header id="container-header">

	<div id="container-nav">

		<nav id="default-nav"> <img id="banner-default"
			class="img-banner"
			src="resources/imagens/banner.jpg"
			alt="Banner" /> <form class="template-form">
			<a href="lptvbr.php?page=" class="button">Página Inicial</a> 
			<a href="lptvbr.php?page=mus-leg" class="button">Músicas Traduzidas</a>
			<a href="teste.php" class="button">Vídeos Legendados</a> <a
			href="index.php" class="button">Redes Sociais</a> <a href="index.php" class="button">Sobre</a>
		</form> </nav>

		<nav id="mobile-nav"> <img id="banner320" class="img-banner"
			src="resources/imagens/banner320.jpg"
			alt="Banner" /> 
			
			<form class="mobile-form">
						
			</form>
		</nav>
	</div>

	</header>
	
	<section class="body-section">
	<?php
		if ($_GET['page'] != NULL) {
			include_once($_GET['page'].'.php');
		}
		else {
			include_once('index.php');
		}	
	?>
	</section>	
	
	<div id="container-footer">
	<ul class="footer-lista">
		<li><p>LinkinParkTVBr</p></li>
		<li><p>linkinparktvbr@gmail.com</p></li>
		<?php 
			echo date("Y");
		?>
	</ul>
	</div>

</body>

</html>