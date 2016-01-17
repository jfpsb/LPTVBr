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
				<img src="/LPTVBr/resources/imagens/lpu/cover250/lpu14.jpg"
					class="album-cover"> <a class="album-link"
					href="lpu14.php?page=lpu14-main">Voltar ao LP Underground XIV</a>
				<ol class="album-lista">
					<li><a class="album-text"
						href="lpu14.php?page=aubrey-one&mus=Aubrey One (2009 DEMO)">1.
							Aubrey One (2009 DEMO)</a></li>
					<li><a class="album-text"
						href="lpu14.php?page=malathion&mus=Malathion+Tritonus (2008 Berlin DEMO)">2.
							Malathion+Tritonus (2008 Berlin DEMO)</a></li>
					<li><a class="album-text"
						href="lpu14.php?page=berlin-one&mus=Berlin One, Version C (2009 DEMO)">3.
							Berlin One, Version C (2009 DEMO)</a></li>
					<li><a class="album-text"
						href="lpu14.php?page=blanka&mus=Blanka (2008 DEMO)">4.
							Blanka (2008 DEMO)</a></li>
					<li><a class="album-text"
						href="lpu14.php?page=heartburn&mus=Heartburn (2007 DEMO)">5.
							Heartburn (2007 DEMO)</a></li>
					<li><a class="album-text"
						href="lpu14.php?page=breaking-the-habit&mus=Breaking The Habit (Original Mike 2002 DEMO)">6.
							Breaking The Habit (Original Mike 2002 DEMO)</a></li>
					<li><a class="album-text"
						href="lpu14.php?page=dave-beat&mus=Dave Sbeat Feat. Joe (2009)">7.
							Dave Sbeat Feat. Joe (2009)</a></li>
					<li><a class="album-text"
						href="lpu14.php?page=froctagon&mus=Froctagon (2009 DEMO)">8.
							Froctagon (2009 DEMO)</a></li>
					<li><a class="album-text"
						href="lpu14.php?page=rhinocerous&mus=Rhinocerous (2002 DEMO)">9.
							Rhinocerous (2002 DEMO)</a></li>
					<li><a class="album-text"
						href="lpu14.php?page=after-canada&mus=After Canada (2005 DEMO)">10.
							After Canada (2005 DEMO)</a></li>
				</ol>
			</div>
		</aside>
	</article>
</body>
</html>