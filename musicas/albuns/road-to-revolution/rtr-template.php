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

	//No Road To Revolution as letras 
	//são carregadas na página das músicas
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
				<img src="/LPTVBr/resources/imagens/albuns/rtr250.jpg"
					class="album-cover"> <a class="album-link"
					href="road-to-revolution.php?page=rtr-main">Voltar ao Road To Revolution</a>
				<ol class="album-lista">
					<li><a class="album-text"
						href="road-to-revolution.php?page=one-step-closer&mus=One Step Closer">1. One Step Closer</a></li>
					<li><a class="album-text"
						href="road-to-revolution.php?page=from-the-inside&mus=From The Inside">2.
							From The Inside</a></li>
					<li><a class="album-text"
						href="road-to-revolution.php?page=no-more-sorrow&mus=No More Sorrow">3.
							No More Sorro</a></li>
					<li><a class="album-text"
						href="road-to-revolution.php?page=given-up&mus=Given Up">4.
							Given Up</a></li>
					<li><a class="album-text"
						href="road-to-revolution.php?page=lying-from-you&mus=Lying From You">5.
							Lying From You</a></li>
					<li><a class="album-text"
						href="road-to-revolution.php?page=hands-held-high&mus=Hands Held High">6. Hands Held High</a></li>
					<li><a class="album-text"
						href="road-to-revolution.php?page=leave-out-all-the-rest&mus=Leave Out All The Rest">7.
							Leave Out All The Rest</a></li>
					<li><a class="album-text"
						href="road-to-revolution.php?page=numb&mus=Numb">8.
							Numb</a></li>
					<li><a class="album-text"
						href="road-to-revolution.php?page=the-little-things-give-you-away&mus=The Little Things Give You Away">9. The Little Things Give You Away</a></li>
					<li><a class="album-text"
						href="road-to-revolution.php?page=breaking-the-habit&mus=Breaking The Habit">10.
							Breaking The Habit</a></li>
					<li><a class="album-text"
						href="road-to-revolution.php?page=shadow-of-the-day&mus=Shadow Of The Day">11.
							Shadow Of The Day</a></li>
					<li><a class="album-text"
						href="road-to-revolution.php?page=crawling&mus=Crawling">12.
							Crawling</a></li>
					<li><a class="album-text"
						href="road-to-revolution.php?page=in-the-end&mus=In The End">13. In The End</a></li>
					<li><a class="album-text"
						href="road-to-revolution.php?page=pushing-me-away&mus=Pushing Me Away">14.
							Pushing Me Away</a></li>
					<li><a class="album-text"
						href="road-to-revolution.php?page=what-ive-done&mus=What I've Done">15.
							What I've Done</a></li>
					<li><a class="album-text"
						href="road-to-revolution.php?page=numb-encore&mus=Numb/Encore (Feat. Jay-Z)">16.
							Numb/Encore (Feat. Jay-Z)</a></li>
					<li><a class="album-text"
						href="road-to-revolution.php?page=jigga-what&mus=Jigga What/Faint (Feat. Jay-Z)">17.
							Jigga What/Faint (Feat. Jay-Z)</a></li>
					<li><a class="album-text"
						href="road-to-revolution.php?page=bleed-it-out&mus=Bleed It Out">18.
							Bleed It Out</a></li>
				</ol>
			</div>
		</aside>
	</article>
</body>
</html>