<?php
$str = file_get_contents ( 'http://' . $_SERVER ['SERVER_NAME'] . "/json/musicas/" . $_GET['tipo'] . ".json" );
$str = utf8_encode($str);
$release = json_decode ( $str, true );

$album = $_GET ['album'];
$musica = $_GET ['musica'];

$nomeMusica = $release [$album] [$musica] ['title'];

$page_title = $nomeMusica . ' : ' . $release [$album] ['album'] . ' (Tradução)';

$videoId = $release [$album] [$musica] ['videoId'];

$aside = $_GET['tipo'] . DIRECTORY_SEPARATOR . $album;

//Aqui são usados $_GET para prevenir de bugs na troca dos valores. 
//Assim eu sempre pego os parâmetros originais que são os corretos para pesquisar os valores no array

if(isset($release [$_GET['album']] [$_GET ['musica']] ['lyricAlbum'])) {
	//Se o álbum onde está contida a letra for diferente do álbum original 
	//da música, o álbum se altera para o original para pesquisar a letra corretamente
	$album = $release [$_GET['album']] [$_GET ['musica']] ['lyricAlbum'];
}

if(isset($release [$_GET['album']] [$_GET ['musica']] ['lyricTitle'])) {
	//Se o título da música for diferente do original, mas a letra é a mesma,
	//eu substituo o título para o correto, assim recuperando a letra da música corretamente
	$musica = $release [$_GET['album']] [$_GET ['musica']] ['lyricTitle'];
}

include_once '../youtube/search.php';
?>
<!-- TEMPLATE PARA LETRAS DE MÚSICAS -->
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
<link id="favicon" href="/favicon.ico" rel="shortcut icon"
	type="image/vnd.microsoft.icon"></link>
<link rel="stylesheet" type="text/css"
	href="/resources/css/letra-musica.css">
<link rel="stylesheet" href="/resources/css/jquery-ui.min.css">
<link rel="stylesheet" href="/resources/css/primeui-2.2-min.css">
<link rel="stylesheet" type="text/css"
	href="/resources/css/global.css">
<link rel="stylesheet" type="text/css"
	href="/resources/css/template.css">
<script type="text/javascript"
	src="/resources/js/jquery-1.11.3.min.js"></script>
<script type="text/javascript"
	src="/resources/js/jquery-ui.min.js"></script>
<script type="text/javascript"
	src="/resources/js/primeui-2.2-min.js"></script>
<script type="text/javascript"
	src="/resources/js/focusMainSection.js"></script>
<script type="text/javascript" src="/resources/js/letramusica.js"></script>
<script type="text/javascript" src="/resources/js/menuButton.js"></script>
<meta property="og:url"
	content="<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']?>" />
<meta property="og:title" content="<?php echo $page_title ?>" />
<meta property="og:image"
	content="http://www.linkinparktvbr.com/resources/imagens/banner.jpg" />
<meta property="og:description"
	content="Tradução de <?php echo $nomeMusica ?>" />
<meta property="og:type" content="website" />
<title><?php echo $page_title ?></title>
<script type="text/javascript">	
	$(function() {
		$('#traducao-tabView').puitabview();
	});

	$(document).ready(function(){
		loadLetra('<?php echo $album ?>', '<?php echo $musica ?>');
	});
</script>
</head>
<body>
		<?php
		include_once 'header.php';
		include_once("../analyticstracking.php")
		?>
		<section id="main-section" class="body-section">
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
			include_once 'aside/aside-template.php';
			?></aside>
		</article>
	</section>
	<?php
	include_once 'footer.php';
	?>
</body>
</html>