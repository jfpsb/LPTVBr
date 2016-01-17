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
				<img src="/LPTVBr/resources/imagens/lpu/cover250/lpu13.jpg"
					class="album-cover"> <a class="album-link"
					href="lpu13.php?page=lpu13-main">Voltar ao LP Underground XIII</a>
				<ol class="album-lista">
					<li><a class="album-text"
						href="lpu13.php?page=basquiat&mus=Basquiat - 2007 DEMO">1.
							Basquiat - 2007 DEMO</a></li>
					<li><a class="album-text"
						href="lpu13.php?page=holding-company&mus=Holding Company - 2011 DEMO">2.
							Holding Company - 2011 DEMO</a></li>
					<li><a class="album-text"
						href="lpu13.php?page=primo&mus=Primo - I'll Be Gone - Longform 2010 DEMO">3.
							Primo - I'll Be Gone - Longform 2010 DEMO</a></li>
					<li><a class="album-text"
						href="lpu13.php?page=hemispheres&mus=Hemispheres - 2011 DEMO">4.
							Hemispheres - 2011 DEMO</a></li>
					<li><a class="album-text"
						href="lpu13.php?page=cumulus&mus=Cumulus - 2002 DEMO">5.
							Cumulus - 2002 DEMO</a></li>
					<li><a class="album-text"
						href="lpu13.php?page=pretty-birdy&mus=Pretty Birdy - Somewhere I Below 2002 DEMO">6.
							Pretty Birdy - Somewhere I Below 2002 DEMO</a></li>
					<li><a class="album-text"
						href="lpu13.php?page=universe&mus=Universe - 2006 DEMO">7.
							Universe - 2006 DEMO</a></li>
					<li><a class="album-text"
						href="lpu13.php?page=apaches&mus=Apaches - Until It Breaks DEMO No. 1">8.
							Apaches - Until It Breaks DEMO No. 1</a></li>
					<li><a class="album-text"
						href="lpu13.php?page=foot-patrol&mus=Foot Patrol - Until It Breaks DEMO No. 2">9.
							Foot Patrol - Until It Breaks DEMO No. 2</a></li>
					<li><a class="album-text"
						href="lpu13.php?page=three-band-terror&mus=Three Band Terror - Until It Breaks DEMO No. 3">10.
							Three Band Terror - Until It Breaks DEMO No. 3</a></li>
					<li><a class="album-text"
						href="lpu13.php?page=truth-inside-a-lie&mus=Truth Inside A Lie - By Ryan Giles - LPU Sessions 2013">11.
							Truth Inside A Lie - By Ryan Giles - LPU Sessions 2013</a></li>
					<li><a class="album-text"
						href="lpu13.php?page=change&mus=Change - By Beta State - LPU Session 2013">12.
							Change - By Beta State - LPU Session 2013</a></li>
				</ol>
			</div>
		</aside>
	</article>
</body>
</html>