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
		loadLetra('ats', getParameterByName('page'));
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
				<img src="/LPTVBr/resources/imagens/albuns/ats250.jpg"
					class="album-cover"> <a class="album-link"
					href="a-thousand-suns.php?page=ats-main">Voltar ao A Thousand Suns</a>
				<ol class="album-lista">
					<li><a class="album-text"
						href="a-thousand-suns.php?page=the-requiem&mus=The Requiem">1. The
							Requiem</a></li>
					<li><a class="album-text"
						href="a-thousand-suns.php?page=the-radiance&mus=The Radiance">2.
							The Radiance</a></li>
					<li><a class="album-text"
						href="a-thousand-suns.php?page=burning-in-the-skies&mus=Burning In The Skies">3.
							Burning In The Skies</a></li>
					<li><a class="album-text"
						href="a-thousand-suns.php?page=empty-spaces&mus=Empty Spaces">4.
							Empty Spaces</a></li>
					<li><a class="album-text"
						href="a-thousand-suns.php?page=when-they-come-for-me&mus=When They Come For Me">5.
							When They Come For Me</a></li>
					<li><a class="album-text"
						href="a-thousand-suns.php?page=robot-boy&mus=Robot Boy">6. Robot Boy</a></li>
					<li><a class="album-text"
						href="a-thousand-suns.php?page=jornada-del-muerto&mus=Jornada Del Muerto">7.
							Jornada Del Muerto</a></li>
					<li><a class="album-text"
						href="a-thousand-suns.php?page=waiting-for-the-end&mus=Waiting For The End">8.
							Waiting For The End</a></li>
					<li><a class="album-text"
						href="a-thousand-suns.php?page=blackout&mus=Black Out">9. Black Out</a></li>
					<li><a class="album-text"
						href="a-thousand-suns.php?page=wretches-and-kings&mus=Wretches And Kings">10.
							Wretches And Kings</a></li>
					<li><a class="album-text"
						href="a-thousand-suns.php?page=wisdow-justice-and-love&mus=Wisdow, Justice And Love">11.
							Wisdow, Justice And Love</a></li>
					<li><a class="album-text"
						href="a-thousand-suns.php?page=iridescent&mus=Iridescent">12.
							Iridescent</a></li>
					<li><a class="album-text"
						href="a-thousand-suns.php?page=fallout&mus=Fallout">13. Fallout</a></li>
					<li><a class="album-text"
						href="a-thousand-suns.php?page=the-catalyst&mus=The Catalyst">14.
							The Catalyst</a></li>
					<li><a class="album-text"
						href="a-thousand-suns.php?page=the-messenger&mus=The Messenger">15.
							The Messenger</a></li>
				</ol>
			</div>
		</aside>
	</article>
</body>
</html>