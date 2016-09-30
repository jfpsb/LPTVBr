<?php
// Start the session
session_start ();

$tipo = $_GET ['tipo'];
$album = $_GET ['album'];

$filepath = 'http://' . $_SERVER ['SERVER_NAME'] . "/json/musicas/" . $tipo . ".json";
$str = file_get_contents ( $filepath );
$str = utf8_encode ( $str );

$release = json_decode ( $str, true );

$albumSelecionado = $release [$album];

if (! array_key_exists ( $album, $release )) {
	header ( 'HTTP/1.0 404 Not Found' );
	readfile ( '../notfound.php' );
	exit ();
}

$albumName = $albumSelecionado ['album'];

$thumbnail = $albumSelecionado ['thumbnail'];

$page_title = $albumName . ' - LPTVBr';

$artista = "Linkin Park";

if (isset ( $albumSelecionado ['lancamento'] ))
	$lancamento = $albumSelecionado ['lancamento'];
if (isset ( $albumSelecionado ['duracaoiso'] ))
	$duracaoiso = $albumSelecionado ['duracaoiso'];
if (isset ( $albumSelecionado ['duracao'] ))
	$duracao = $albumSelecionado ['duracao'];
if (isset ( $albumSelecionado ['numMus'] ))
	$numMus = $albumSelecionado ['numMus'];
if (isset ( $albumSelecionado ['gravadora'] ))
	$gravadora = $albumSelecionado ['gravadora'];
if (isset ( $albumSelecionado ['icone'] ))
	$icone = $albumSelecionado ['icone'];
if (isset ( $albumSelecionado ['datetime'] ))
	$datetime = $albumSelecionado ['datetime'];

$_SESSION ['albumSelecionado'] = $albumSelecionado;

include_once '../resources/php/listagemMusicas.php';

$objListagemMusicas = new listagemMusicas ();

?>
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
<script type="text/javascript" src="/resources/js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="/resources/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="/resources/js/primeui-2.2-min.js"></script>
<script type="text/javascript" src="/resources/js/letramusica.js"></script>
<link rel="stylesheet" type="text/css"
	href="/resources/css/listaMusicasRelease.css">
<title><?php echo $page_title ?></title>
<meta property="og:image"
	content="<?php echo 'http://' . $_SERVER['SERVER_NAME'].$thumbnail['medium'] ?>" />
<meta property="og:image:width" content="600" />
<meta property="og:image:height" content="600" />
<meta property="og:url"
	content="<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']?>" />
<meta property="og:title" content="<?php echo $page_title ?>" />
<meta property="og:description"
	content="Músicas traduzidas de <?php echo $release[$album]['album'] ?>" />
<meta name="description"
	content="Músicas traduzidas de <?php echo $release[$album]['album'] ?>">
<meta property="og:type" content="website" />
<style>
.release.main {
	background-image: url(<?php echo $thumbnail [ 'large' ]?>);
}

@media all and (max-width: 768px) {
	.release.main {
		background-image: url(<?php echo $thumbnail [ 'medium' ] ?>);
	}
}
</style>
</head>
<body>
	<?php include_once 'header.php'; ?>
	
	<section class="mainSection">
		<article class="release main">
			<div class="album table">
				<div class="panel header">
					<h1><?php echo $albumName ?></h1>
				</div>
				<table class="main table">
					<?php
					$objListagemMusicas->listaMusicas ( $albumSelecionado );
					?>
				</table>
			</div>

			<aside class="release aside">
				<div itemscope itemtype=”http://schema.org/MusicRelease">
					<img alt="Capa <?php echo $albumName?>" class="release image"
						src="<?php echo $thumbnail['medium'] ?>">
					<table style="text-align: center; margin: 0 auto;"
						class="aside table">
						<tr>
							<td>
								<p class="main">Artista:</p>
							</td>
							<td>
								<p>
									<span itemprop="byArtist"><?php echo $artista?></span>
								</p>
							</td>
						</tr>
						<tr>
							<td>
								<p class="main">Lançamento:</p>
							</td>
							<td>
								<p>
									<time datetime="<?php $datetime?>"><?php echo $lancamento?></time>
								</p>
							</td>
						</tr>
						<tr>
							<td>
								<p class="main">Duração:</p>
							</td>
							<td>
								<p><?php echo $duracao?></p>
							</td>
						</tr>
						<tr>
							<td>
								<p class="main">Nº de músicas:</p>
							</td>
							<td>
								<p>
									<span itemprop="numTracks"><?php echo $numMus?></span>
								</p>
							</td>
						</tr>
						<tr>
							<td>
								<p class="main">Gravadora(s):</p>
							</td>
							<td>
								<p>
									<span itemprop="recordLabel"><?php echo $gravadora?></span>
								</p>
							</td>
						</tr>
					</table>
				</div>
			</aside>
		</article>
	</section>
	
	<?php include_once 'footer.php'; ?>
</body>
</html>