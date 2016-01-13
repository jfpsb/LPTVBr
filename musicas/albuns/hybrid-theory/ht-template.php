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
		loadLetra('hybrid-theory', getParameterByName('page'));
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
				<img src="/LPTVBr/resources/imagens/albuns/ht250.jpg"
					class="album-cover"> <a class="album-link"
					href="hybrid-theory.php?page=ht-main">Voltar ao Hybrid Theory</a>
				<ol class="album-lista">
					<li><a class="album-text"
						href="hybrid-theory.php?page=papercut&mus=Papercut">1. Papercut</a></li>
					<li><a class="album-text"
						href="hybrid-theory.php?page=one-step-closer&mus=One Step Closer">2. One Step Closer</a></li>
					<li><a class="album-text"
						href="hybrid-theory.php?page=with-you&mus=With You">3.
							With You</a></li>
					<li><a class="album-text"
						href="hybrid-theory.php?page=points-of-authority&mus=Points Of Authority">4.
							Points Of Authority</a></li>
					<li><a class="album-text"
						href="hybrid-theory.php?page=crawling&mus=Crawling">5.
							Crawling</a></li>
					<li><a class="album-text"
						href="hybrid-theory.php?page=runaway&mus=Runaway">6.
							Runaway</a></li>
					<li><a class="album-text"
						href="hybrid-theory.php?page=by-myself&mus=By Myself">7. By Myself</a></li>
					<li><a class="album-text"
						href="hybrid-theory.php?page=in-the-end&mus=In The End">8. In The End</a></li>
					<li><a class="album-text"
						href="hybrid-theory.php?page=a-place-for-my-head&mus=A Place For My Head">9.
							A Place For My Head</a></li>
					<li><a class="album-text"
						href="hybrid-theory.php?page=forgotten&mus=Forgotten">10.
							Forgotten</a></li>
					<li><a class="album-text"
						href="hybrid-theory.php?page=cure-for-the-itch&mus=Cure For The Itch">11.
							Cure For The Itch</a></li>
					<li><a class="album-text"
						href="hybrid-theory.php?page=pushing-me-away&mus=Pushing Me Away">12. Pushing Me Away</a></li>
				</ol>
			</div>
		</aside>
	</article>
</body>
</html>