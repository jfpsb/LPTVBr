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
		loadLetra('collision-course', getParameterByName('page'));
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
				<img src="/LPTVBr/resources/imagens/albuns/cc250.jpg"
					class="album-cover"> <a class="album-link"
					href="collision-course.php?page=cc-main">Voltar ao Collision Course</a>
				<ol class="album-lista">
					<li><a class="album-text"
						href="collision-course.php?page=dirt-off-your-shoulder&mus=Dirt Off Your Shoulder/Lying From You">1.
							Dirt Off Your Shoulder/Lying From You</a></li>
					<li><a class="album-text"
						href="collision-course.php?page=big-pimpin&mus=Big Pimpin'/Papercut">2.
							Big Pimpin'/Papercut</a></li>
					<li><a class="album-text"
						href="collision-course.php?page=jigga-what&mus=Jigga What/Faint">3.
							Jigga What/Faint</a></li>
					<li><a class="album-text"
						href="collision-course.php?page=numb-encore&mus=Numb/Encore">4.
							Numb/Encore</a></li>
					<li><a class="album-text"
						href="collision-course.php?page=izzo&mus=Izzo/In The End">5. Izzo/In The End</a></li>
					<li><a class="album-text"
						href="collision-course.php?page=points&mus=Points Of Authority/99 Problems/One Step Closer">6.
							Points Of Authority/99 Problems/One Step Closer</a></li>
				</ol>
			</div>
		</aside>
	</article>
</body>
</html>