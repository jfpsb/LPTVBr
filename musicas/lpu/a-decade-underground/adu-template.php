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
<script type="text/javascript" src="/LPTVBr/resources/js/letramusica.js"></script>
<script type="text/javascript">
	$(function() {
		$('#thp-tabView').puitabview();
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
				<img
					src="/LPTVBr/resources/imagens/lpu/cover250/a-decade-underground.jpg"
					class="album-cover"> <a class="album-link"
					href="a-decade-underground.php?page=adu-main">Voltar ao A Decade
					Underground</a>
				<ol class="album-lista">
					<li><a class="album-text"
						href="a-decade-underground.php?page=announcement&mus=Announcement Service Public">1.
							Announcement Service Public</a></li>
					<li><a class="album-text"
						href="a-decade-underground.php?page=qwerty&mus=QWERTY (Studio Version)">2.
							QWERTY (Studio Version)</a></li>
					<li><a class="album-text"
						href="a-decade-underground.php?page=and-one&mus=And One">3. And
							One</a></li>
					<li><a class="album-text"
						href="a-decade-underground.php?page=sold-my-soul-to-yo-mama&mus=Sold My Soul To Yo Mama">4.
							Sold My Soul To Yo Mama</a></li>
					<li><a class="album-text"
						href="a-decade-underground.php?page=dedicated&mus=Dedicated (DEMO 1999)">5.
							Dedicated (DEMO 1999)</a></li>
					<li><a class="album-text"
						href="a-decade-underground.php?page=hunger-strike&mus=Hunger Strike (Live From Projekt Revolution 2008) - Chris Cornell Feat. Chester Bennington">6.
							Hunger Strike (Live From Projekt Revolution 2008) - Chris Cornell
							Feat. Chester Bennington</a></li>
					<li><a class="album-text"
						href="a-decade-underground.php?page=my-december&mus=My December (Live 2008)">7.
							My December (Live 2008)</a></li>
					<li><a class="album-text"
						href="a-decade-underground.php?page=part-of-me&mus=Part Of Me">8.
							Part Of Me</a></li>
					<li><a class="album-text"
						href="a-decade-underground.php?page=across-the-line&mus=Across The Line (Unreleased DEMO 2007)">9.
							Across The Line (Unreleased DEMO 2007)</a></li>
					<li><a class="album-text"
						href="a-decade-underground.php?page=pretend-to-be&mus=Pretend To Be (Unreleased DEMO 2008)">10.
							Pretend To Be (Unreleased DEMO 2008)</a></li>
				</ol>
			</div>
		</aside>
	</article>
</body>
</html>