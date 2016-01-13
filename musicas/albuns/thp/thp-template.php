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
		loadLetra('thp', getParameterByName('page'));
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
				<img src="/LPTVBr/resources/imagens/albuns/thp250.jpg"
					class="album-cover"> <a class="album-link"
					href="the-hunting-party.php?page=thp-main">Voltar ao The Hunting Party</a>
				<ol class="album-lista">
					<li><a class="album-text"
						href="the-hunting-party.php?page=keys-to-the-kingdom&mus=Keys To The Kingdom">1.
							Keys To The Kingdom</a></li>
					<li><a class="album-text"
						href="the-hunting-party.php?page=all-for-nothing&mus=All For Nothing (Feat. Page Hamilton)">2.
							All For Nothing (Feat. Page Hamilton)</a></li>
					<li><a class="album-text"
						href="the-hunting-party.php?page=guilty-all-the-same&mus=Guilty All The Same">3.
							Guilty All The Same</a></li>
					<li><a class="album-text"
						href="the-hunting-party.php?page=the-summoning&mus=The Summoning">4.
							The Summoning</a></li>
					<li><a class="album-text"
						href="the-hunting-party.php?page=war&mus=War">5. War</a></li>
					<li><a class="album-text"
						href="the-hunting-party.php?page=wastelands&mus=Wastelands">6.
							Wastelands</a></li>
					<li><a class="album-text"
						href="the-hunting-party.php?page=until-its-gone&mus=Until It's Gone">7.
							Until It's Gone</a></li>
					<li><a class="album-text"
						href="the-hunting-party.php?page=rebellion&mus=Rebellion (Feat. Daron Malakian">8.
							Rebellion (Feat. Daron Malakian)</a></li>
					<li><a class="album-text"
						href="the-hunting-party.php?page=mark-the-graves&mus=Mark The Graves">9.
							Mark The Graves</a></li>
					<li><a class="album-text"
						href="the-hunting-party.php?page=drawbar&mus=Drawbar (Feat. Tom Morello)">10.
							Drawbar (Feat. Tom Morello)</a></li>
					<li><a class="album-text"
						href="the-hunting-party.php?page=final-masquerade&mus=Final Masquerade">11.
							Final Masquerade</a></li>
					<li><a class="album-text"
						href="the-hunting-party.php?page=a-line-in-the-sand&mus=A Line In The Sand">12.
							A Line In The Sand</a></li>
				</ol>
			</div>
		</aside>
	</article>
</body>
</html>