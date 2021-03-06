<?php
include_once '../resources/php/checaLPTVBrCookie.php';

$tipo = $_GET ['tipo'];

$str = file_get_contents ( 'http://' . $_SERVER ['SERVER_NAME'] . "/json/musicas/" . $tipo . ".json" );
$str = utf8_encode ( $str );
$release = json_decode ( $str, true );

$album = $_GET ['album'];

$musica = $_GET ['musica'];

if (! array_key_exists ( $album, $release ) || ! array_key_exists ( $musica, $release [$album] )) {
	header ( 'HTTP/1.0 404 Not Found', true, 404 );
	readfile ( '../notfound.php' );
	exit ();
}

$albumSelecionado = $release [$album];

$nomeMusica = $albumSelecionado [$musica] ['title'];

$page_title = $nomeMusica . ' - ' . $albumSelecionado ['album'] . ' (Tradução)';

$videoId = $albumSelecionado [$musica] ['videoId'];

// Testa se há um lyricAlbum
function retornaAlbumLyric($boolRetornaLyric, $album, $release) {
	if (isset ( $release [$_GET ['album']] [$_GET ['musica']] ['lyricAlbum'] ) && $boolRetornaLyric) {
		return $release [$_GET ['album']] [$_GET ['musica']] ['lyricAlbum'];
	}
	
	return $album;
}

// Testa se há um lyricTitle
function retornaAlbumTitle($boolRetornaTitle, $musica, $release) {
	if (isset ( $release [$_GET ['album']] [$musica] ['lyricTitle'] ) && $boolRetornaTitle) {
		return $release [$_GET ['album']] [$musica] ['lyricTitle'];
	}
	
	return $musica;
}

include_once '../youtube/search.php';
include_once '../resources/php/listagemMusicas.php';

$objListagemMusicas = new listagemMusicas ();
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
<link rel="stylesheet" href="/resources/css/jquery-ui.min.css">
<link rel="stylesheet" href="/resources/css/primeui-2.2-min.css">
<link rel="stylesheet" type="text/css" href="/resources/css/global.css">
<link rel="stylesheet" type="text/css"
	href="/resources/css/traducao-template.css">
<script type="text/javascript" src="/resources/js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="/resources/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="/resources/js/primeui-2.2-min.js"></script>
<script type="text/javascript" src="/resources/js/letramusica.js"></script>
<title><?php echo $page_title ?></title>
<meta property="og:type" content="website" />
<meta property="og:url"
	content="<?php echo 'https://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']?>" />
<meta property="og:title" content="<?php echo $page_title ?>" />
<meta property="og:image"
	content="<?php echo 'https://' . $_SERVER['SERVER_NAME'] . $albumSelecionado['thumbnail']['medium']?>" />
<meta property="og:image:width" content="500" />
<meta property="og:image:height" content="500" />
<meta property="og:description"
	content="Tradução de <?php echo $nomeMusica ?>" />
<script type="text/javascript">	
	$(function() {
		$('.tabView').puitabview();
	});

	$(document).ready(function(){
		loadLetra('<?php echo retornaAlbumLyric(true, $album, $release); ?>', '<?php echo retornaAlbumTitle(true, $musica, $release); ?>');
	});
</script>
</head>
<body>
<?php include_once '../template/header.php';?>
	<section class="mainSection">
		<article class="wrapper">
			<div class="letra-div">
				<article class="letra-article">
					<div class="tabView">
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
										<div class="panel header">
											<h2>Em Destaque</h2>
										</div>


										<div class="video-container">
											<?php
											if ($videoId == "empty") {
												echo "<h2 style=\"text-align: center\">Não há vídeo disponível.</h2>";
											} else {
												echo "<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/$videoId\" allowfullscreen></iframe>";
											}
											?>
										</div>
									</div>
								</article>

								<article class="video-article">
									<div>
										<div class="panel header">
											<h2>Vídeos Relacionados</h2>
										</div>
										<!-- "rel" = relacionados -->
										<div class="rel-panel">
											<?=$htmlBody?>
										</div>
									</div>

								</article>
							</div>
						</div>
					</div>
				</article>
			</div>

			<aside class="album-aside">
				<div class="album-panel">
					<img src="<?php echo $albumSelecionado['thumbnail']['medium']?>"
						class="album-cover">
					<div align="center">
						<a class="album-link"
							href="/musica/<?php echo $tipo . DIRECTORY_SEPARATOR . retornaAlbumLyric(false, $album, $release); ?>/">Voltar
							ao <?php echo $albumSelecionado['album']?></a>
					</div>
					<ol class="album-lista">
					<?php
					$objListagemMusicas->listaMusicasAlbumAside ( $albumSelecionado, $_GET ['tipo'], retornaAlbumLyric ( false, $album, $release ) );
					?>
					</ol>
				</div>
				<?php
				if (isset ( $albumSelecionado ['copyright'] )) {
					$copyright = $albumSelecionado ['copyright'];
					echo "<p class=\"album-copyright\" align=\"center\">$copyright</p>";
				}
				?>
			</aside>
		</article>
	</section>
	<?php
	include_once '../template/footer.php';
	?>
</body>
</html>