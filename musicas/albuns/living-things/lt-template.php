<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
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
<script type="text/javascript"
	src="/LPTVBr/resources/js/focusMainSection.js"></script>
<script type="text/javascript" src="/LPTVBr/resources/js/letramusica.js"></script>
<script type="text/javascript">
	$(function() {
		$('#thp-tabView').puitabview();
	});

	$(document).ready(function(){
		loadLetra('living-things', getParameterByName('page'));
	});
</script>
</head>
<body>
	<article class="wrapper">
		<div class="letra-div">
			<article class="letra-article">
				<div id="thp-tabView">
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
				<img src="/LPTVBr/resources/imagens/albuns/lt250.jpg"
					class="album-cover"> <a class="album-link"
					href="living-things.php?page=lt-main">Voltar ao Living Things</a>
				<ol class="album-lista">
					<li><a class="album-text"
						href="living-things.php?page=lost-in-the-echo&mus=LOST IN THE ECHO">1.
							LOST IN THE ECHO</a></li>
					<li><a class="album-text"
						href="living-things.php?page=in-my-remains&mus=IN MY REMAINS">2.
							IN MY REMAINS</a></li>
					<li><a class="album-text"
						href="living-things.php?page=burn-it-down&mus=BURN IT DOWN">3.
							BURN IT DOWN</a></li>
					<li><a class="album-text"
						href="living-things.php?page=lies-greed-misery&mus=LIES GREED MISERY">4.
							LIES GREED MISERY</a></li>
					<li><a class="album-text"
						href="living-things.php?page=ill-be-gone&mus=I'LL BE GONE">5. I'LL BE GONE</a></li>
					<li><a class="album-text"
						href="living-things.php?page=castle-of-glass&mus=CASTLE OF GLASS">6.
							CASTLE OF GLASS</a></li>
					<li><a class="album-text"
						href="living-things.php?page=victimized&mus=VICTIMIZED">7.
							VICTIMIZED</a></li>
					<li><a class="album-text"
						href="living-things.php?page=roads-untraveled&mus=ROADS UNTRAVELED">8.
							ROADS UNTRAVELED</a></li>
					<li><a class="album-text"
						href="living-things.php?page=skin-to-bone&mus=SKIN TO BONE">9.
							SKIN TO BONE</a></li>
					<li><a class="album-text"
						href="living-things.php?page=until-it-breaks&mus=UNTIL IT BREAKS">10.
							UNTIL IT BREAKS</a></li>
					<li><a class="album-text"
						href="living-things.php?page=tinfoil&mus=TINFOIL">11.
							TINFOIL</a></li>
					<li><a class="album-text"
						href="living-things.php?page=powerless&mus=POWERLESS">12.
							POWERLESS</a></li>
				</ol>
			</div>
		</aside>
	</article>
</body>
</html>