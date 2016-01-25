<?php
include_once 'youtube/search.php';
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" type="text/css" href="/LPTVBr/resources/css/letra-musica.css">
<link rel="stylesheet" type="text/css" href="/LPTVBr/resources/css/release-lista.css">
<link rel="stylesheet" href="/LPTVBr/resources/css/jquery-ui.min.css">
<link rel="stylesheet" href="/LPTVBr/resources/css/primeui-2.2-min.css">
<script type="text/javascript" src="/LPTVBr/resources/js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="/LPTVBr/resources/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="/LPTVBr/resources/js/primeui-2.2-min.js"></script>
<script type="text/javascript">
	document.title = '<?php echo $page_title ?>';
	
	$(function() {
		$('#traducao-tabView').puitabview();
	});

	$(document).ready(function(){
		loadLetra('<?php echo $album ?>', '<?php echo $musica ?>');
		window.location.hash="main-section";
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
							<article class="video-article">
								<div class="destaque-panel">
									<div class="panel-header">
										<h2 class="header">Em Destaque</h2>
									</div>

									<div class="video-container">
											<?php
											if ($videoId == "empty") {
												echo "<h2 style=\"text-align: center\">Não há vídeo disponível.</h2>";
											} else {
												?>
											<iframe width="560" height="315"
											src="https://www.youtube.com/embed/<?php echo $videoId?>"
											allowfullscreen> </iframe>
											<?php
												// Fechando else
											}
											?>
										</div>
								</div>
							</article>

							<article class="video-article">
								<div>
									<div class="panel-header">
										<h2 class="header">Vídeos Relacionados</h2>
									</div>
									<div class="rel-panel">
										<div style="padding: 5px;">
												<?=$htmlBody?>
											</div>
									</div>
								</div>

							</article>
						</div>
					</div>
				</div>
			</article>
		</div>

		<aside class="album-aside"><?php
		include_once 'template/aside/' . $aside . '.php';
		?></aside>
	</article>
</body>
</html>