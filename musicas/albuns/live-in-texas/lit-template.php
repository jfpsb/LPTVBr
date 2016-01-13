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

	//As músicas são carregas nas páginas das músicas.
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
				<img src="/LPTVBr/resources/imagens/albuns/lit250.jpg"
					class="album-cover"> <a class="album-link"
					href="live-in-texas.php?page=lit-main">Voltar ao Live In Texas</a>
				<ol class="album-lista">
					<li><a class="album-text"
						href="live-in-texas.php?page=somewhere-i-belong&mus=Somewhere I Belong">1.
							Somewhere I Belong</a></li>
					<li><a class="album-text"
						href="live-in-texas.php?page=lying-from-you&mus=Lying From You">2.
							Lying From You</a></li>
					<li><a class="album-text"
						href="live-in-texas.php?page=papercut&mus=Papercut">3.
							Papercut</a></li>
					<li><a class="album-text"
						href="live-in-texas.php?page=points-of-authority&mus=Points Of Authority">4.
							Points Of Authority</a></li>
					<li><a class="album-text"
						href="live-in-texas.php?page=runaway&mus=Runaway">5.
							Runaway</a></li>
					<li><a class="album-text"
						href="live-in-texas.php?page=faint&mus=Faint">6. Faint</a></li>
					<li><a class="album-text"
						href="live-in-texas.php?page=from-the-inside&mus=From The Inside">7.
							From The Inside</a></li>
					<li><a class="album-text"
						href="live-in-texas.php?page=pushing-me-away&mus=P5hng Me A*wy">8.
							P5hng Me A*wy</a></li>
					<li><a class="album-text"
						href="live-in-texas.php?page=numb&mus=Numb">9. Numb</a></li>
					<li><a class="album-text"
						href="live-in-texas.php?page=crawling&mus=Crawling">10.
							Crawling</a></li>
					<li><a class="album-text"
						href="live-in-texas.php?page=in-the-end&mus=In The End">11.
							In The End</a></li>
					<li><a class="album-text"
						href="live-in-texas.php?page=one-step-closer&mus=One Step Closer">12.
							One Step Closer</a></li>
				</ol>
			</div>
		</aside>
	</article>
</body>
</html>