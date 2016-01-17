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
				<img src="/LPTVBr/resources/imagens/lpu/cover250/lpu12.jpg"
					class="album-cover"> <a class="album-link"
					href="lpu12.php?page=lpu12-main">Voltar ao LP Underground 12</a>
				<ol class="album-lista">
					<li><a class="album-text"
						href="lpu12.php?page=homecoming&mus=Homecoming (Minutes To Midnight DEMO)">1.
							Homecoming (Minutes To Midnight DEMO)</a></li>
					<li><a class="album-text"
						href="lpu12.php?page=points-of-authority&mus=Points Of Authority (DEMO)">2.
							Points Of Authority (DEMO)</a></li>
					<li><a class="album-text"
						href="lpu12.php?page=clarity&mus=Clarity (Minutes To Midnight DEMO)">3.
							Clarity (Minutes To Midnight DEMO)</a></li>
					<li><a class="album-text"
						href="lpu12.php?page=asbestos&mus=Asbestos (Minutes To Midnight DEMO)">4.
							Asbestos (Minutes To Midnight DEMO)</a></li>
					<li><a class="album-text"
						href="lpu12.php?page=bunker&mus=Bunker (Minutes To Midnight DEMO)">5.
							Bunker (Minutes To Midnight DEMO)</a></li>
					<li><a class="album-text"
						href="lpu12.php?page=so-far-away&mus=So Far Away (Unreleased 1998)">6.
							So Far Away (Unreleased 1998)</a></li>
					<li><a class="album-text"
						href="lpu12.php?page=pepper&mus=Pepper (Meteora DEMO)">7. Pepper
							(Meteora DEMO)</a></li>
					<li><a class="album-text"
						href="lpu12.php?page=debris&mus=Debris (Minutes To Midnight DEMO)">8.
							Debris (Minutes To Midnight DEMO)</a></li>
					<li><a class="album-text"
						href="lpu12.php?page=ominous&mus=Ominous (Meteora DEMO)">9.
							Ominous (Meteora DEMO)</a></li>
					<li><a class="album-text"
						href="lpu12.php?page=forgotten&mus=Forgotten (DEMO)">10. Forgotten
							(DEMO)</a></li>
				</ol>
			</div>
		</aside>
	</article>
</body>
</html>