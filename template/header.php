<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" type="text/css"
	href="/resources/css/header.css">
<script type="text/javascript" src="/resources/js/menuButton.js"></script>
</head>
<body>
	<header id="container-header">

		<div id="container-nav">

			<nav class="header nav">
				<img class="header banner default"
					src="/resources/imagens/banner.jpg" alt="Banner" /> <img
					class="header banner mobile" src="/resources/imagens/banner320.jpg"
					alt="Banner" />
				<button class="botao mobile">
					<img id="btn-img" width="24px" align="left" style="padding: 0px;"
						src="/resources/imagens/menu-arrow.png">Menu
				</button>
				<div class="menu">
					<ul id="top" class="menu link">
						<li><a
							href="<?php echo "http://" . $_SERVER['SERVER_NAME'] . '/'?>"
							class="button">Página Inicial</a></li>
						<li><a
							href="<?php echo "http://" . $_SERVER['SERVER_NAME'] . '/' . 'musica/'?>"
							class="button">Músicas Traduzidas</a></li>
						<li><a
							href="<?php echo "http://" . $_SERVER['SERVER_NAME'] . '/' . 'video/'?>"
							class="button">Vídeos Legendados</a></li>
						<li><a
							href="<?php echo "http://" . $_SERVER['SERVER_NAME'] . '/' . 'sobre/'?>"
							class="button">Sobre</a></li>
					</ul>
				</div>
			</nav>
		</div>
	</header>
	<!--
	<div class="ads" align="center">
		<script async
			src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
		<ins class="adsbygoogle" style="display: block"
			data-ad-client="ca-pub-6000666154877778" data-ad-slot="9669510435"
			data-ad-format="auto"></ins>
		<script>
		(adsbygoogle = window.adsbygoogle || []).push({});
	</script>
	</div>
	 -->
</body>
</html>