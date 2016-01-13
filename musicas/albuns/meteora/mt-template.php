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
		loadLetra('meteora', getParameterByName('page'));
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
				<img src="/LPTVBr/resources/imagens/albuns/mt250.jpg"
					class="album-cover"> <a class="album-link"
					href="meteora.php?page=mt-main">Voltar ao Meteora</a>
				<ol class="album-lista">
					<li><a class="album-text"
						href="meteora.php?page=foreword&mus=Foreword">1. Foreword</a></li>
					<li><a class="album-text"
						href="meteora.php?page=dont-stay&mus=Don't Stay">2. Don't
							Stay</a></li>
					<li><a class="album-text"
						href="meteora.php?page=somewhere-i-belong&mus=Somewhere I Belong">3.
							Somewhere I Belong</a></li>
					<li><a class="album-text"
						href="meteora.php?page=lying-from-you&mus=Lying From You">4.
							Lying From You</a></li>
					<li><a class="album-text"
						href="meteora.php?page=hit-the-floor&mus=Hit The Floor">5.
							Hit The Floor</a></li>
					<li><a class="album-text"
						href="meteora.php?page=easier-to-run&mus=Easier To Run">6.
							Easier To Run</a></li>
					<li><a class="album-text"
						href="meteora.php?page=faint&mus=Faint">7. Faint</a></li>
					<li><a class="album-text"
						href="meteora.php?page=figure09&mus=Figure.09">8. Figure.09</a></li>
					<li><a class="album-text"
						href="meteora.php?page=breaking-the-habit&mus=Breaking The Habit">9.
							Breaking The Habit</a></li>
					<li><a class="album-text"
						href="meteora.php?page=from-the-inside&mus=From The Inside">10.
							From The Inside</a></li>
					<li><a class="album-text"
						href="meteora.php?page=nobodys-listening&mus=Nobody's Listening">11.
							Nobody's Listening</a></li>
					<li><a class="album-text"
						href="meteora.php?page=session&mus=Session">12. Session</a></li>
					<li><a class="album-text"
						href="meteora.php?page=numb&mus=Numb">13. Numb</a></li>
				</ol>
			</div>
		</aside>
	</article>
</body>
</html>