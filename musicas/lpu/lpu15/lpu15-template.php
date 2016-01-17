<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><link rel="shortcut icon" href="/LPTVBr/favicon.ico" type="image/x-icon" /><link id="favicon" href="/LPTVBr/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon"></link>
<link rel="shortcut icon" href="/LPTVBr/favicon.ico" type="image/x-icon" />
<link id="favicon" href="/LPTVBr/favicon.ico" rel="shortcut icon"
	type="image/vnd.microsoft.icon"></link>
<link rel="stylesheet" type="text/css"
	href="/LPTVBr/resources/css/release-lista.css">
<link rel="stylesheet" type="text/css"
	href="/LPTVBr/resources/css/letra-musica.css">
<link rel="stylesheet" type="text/css"
	href="/LPTVBr/resources/css/global.css">
<link rel="stylesheet" href="/LPTVBr/resources/css/jquery-ui.min.css">
<link rel="stylesheet" href="/LPTVBr/resources/css/primeui-2.2-min.css">
<script type="text/javascript"
	src="/LPTVBr/resources/js/jquery-1.11.3.min.js"></script>
<script type="text/javascript"
	src="/LPTVBr/resources/js/jquery-ui.min.js"></script>
<script type="text/javascript"
	src="/LPTVBr/resources/js/primeui-2.2-min.js"></script>
<script type="text/javascript" src="/LPTVBr/resources/js/letramusica.js"></script>
<script type="text/javascript">
	$(function() {
		$('#traducao-tabView').puitabview();
	});

	$(document).ready(function(){
		loadLetra('lpu', getParameterByName('page'));
	});
</script>
</head>
<body>
	<article class="wrapper">
		<div class="letra-div">
			<article class="letra-article">
				<div id="traducao-tabView">
					<ul class="album-tabs">
						<li><a href="#traducao">Tradução</a></li>
						<li><a href="#original">Original</a></li>
						<li><a href="#videos">Vídeos</a></li>
					</ul>
					<div>
						<div id="traducao">
							<div id="tradTextArea" class="textArea" align="center">
								<p>Essa música não possui letra ou houve um erro ao carregá-la.</p>
							</div>
						</div>
						<div id="original">
							<div id="origTextArea" class="textArea" align="center">
								<p>Essa música não possui letra ou houve um erro ao carregá-la.</p>
							</div>
						</div>
						<div id="videos">
							<?php
							include_once '../../../template/videoTab.php';
							?>
						</div>
					</div>
				</div>
			</article>
		</div>

		<aside class="album-aside">
			<div class="album-panel">
				<img src="/LPTVBr/resources/imagens/lpu/cover250/lpu15.jpg"
					class="album-cover"> <a class="album-link"
					href="lpu15.php?page=lpu15-main">Voltar ao LP Underground 15</a>
				<ol class="album-lista">
					<li><a class="album-text"
						href="lpu15.php?page=animals&mus=Animals (2011 DEMO)">1.
							Animals (2011 DEMO)</a></li>
					<li><a class="album-text"
						href="lpu15.php?page=basil&mus=Basil (2008 DEMO)">2.
							Basil (2008 DEMO))</a></li>
					<li><a class="album-text"
						href="lpu15.php?page=pods1&mus=Pods 1 of 3 (1998 DEMO)">3.
							Pods 1 of 3 (1998 DEMO)</a></li>
					<li><a class="album-text"
						href="lpu15.php?page=pods2&mus=Pods 2 of 3 (1998 DEMO)">4.
							Pods 2 of 3 (1998 DEMO)</a></li>
					<li><a class="album-text"
						href="lpu15.php?page=pods3&mus=Pods 3 of 3 (1998 DEMO)">5.
							Pods 3 of 3 (1998 DEMO)</a></li>
					<li><a class="album-text"
						href="lpu15.php?page=chance-of-rain&mus=Chance Of Rain (2006 DEMO)">6.
							Chance Of Rain (2006 DEMO)</a></li>
				</ol>
			</div>
		</aside>
	</article>
</body>
</html>