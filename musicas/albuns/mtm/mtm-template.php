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
		loadLetra('mtm', getParameterByName('page'));
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
				<img src="/LPTVBr/resources/imagens/albuns/mtm250.jpg"
					class="album-cover"> <a class="album-link"
					href="minutes-to-midnight.php?page=mtm-main">Voltar ao Minutes To
					Midnight</a>
				<ol class="album-lista">
					<li><a class="album-text"
						href="minutes-to-midnight.php?page=wake&mus=Wake">1. Wake</a></li>
					<li><a class="album-text"
						href="minutes-to-midnight.php?page=given-up&mus=Given Up">2. Given
							Up</a></li>
					<li><a class="album-text"
						href="minutes-to-midnight.php?page=leave-out-all-the-rest&mus=Leave Out All The Rest">3.
							Leave Out All The Rest</a></li>
					<li><a class="album-text"
						href="minutes-to-midnight.php?page=bleed-it-out&mus=Bleed It Out">4.
							Bleed It Out</a></li>
					<li><a class="album-text"
						href="minutes-to-midnight.php?page=shadow-of-the-day&mus=Shadow Of The Day">5. Shadow Of The
							Day</a></li>
					<li><a class="album-text"
						href="minutes-to-midnight.php?page=what-ive-done&mus=What I've Done">6.
							What I've Done</a></li>
					<li><a class="album-text"
						href="minutes-to-midnight.php?page=hands-held-high&mus=Hands Held High">7.
							Hands Held High</a></li>
					<li><a class="album-text"
						href="minutes-to-midnight.php?page=no-more-sorrow&mus=No More Sorrow">8.
							No More Sorrow</a></li>
					<li><a class="album-text"
						href="minutes-to-midnight.php?page=valentines-day&mus=Valentine's Day">9.
							Valentine's Day</a></li>
					<li><a class="album-text"
						href="minutes-to-midnight.php?page=in-between&mus=In Between">10.
							In Between</a></li>
					<li><a class="album-text"
						href="minutes-to-midnight.php?page=in-pieces&mus=In Pieces">11.
							In Pieces</a></li>
					<li><a class="album-text"
						href="minutes-to-midnight.php?page=the-little-things-give-you-away&mus=The Little Things Give You Away">12.
							The Little Things Give You Away</a></li>
				</ol>
			</div>
		</aside>
	</article>
</body>
</html>