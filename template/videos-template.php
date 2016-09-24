<?php
$str = file_get_contents ( 'http://' . $_SERVER ['SERVER_NAME'] . "/json/videos/" . $_GET ['tipo'] . ".json" );
$sourceVideoFile = file_get_contents ( 'http://' . $_SERVER ['SERVER_NAME'] . "/json/videos/videoSource.json" );
$str = utf8_encode ( $str );
$sourceVideoFile = utf8_encode ( $sourceVideoFile );
$release = json_decode ( $str, true );
$videoSrc = json_decode ( $sourceVideoFile, true );

$video = $_GET ['video'];
$ano = $_GET ['ano'];

if (! array_key_exists ( $ano, $release ) || ! array_key_exists ( $video, $release [$ano] )) {
	header ( 'HTTP/1.0 404 Not Found' );
	readfile ( '../notfound.php' );
	exit ();
}

$videoId = null;
$imgList = null;

// Recupera a url para incorporar vídeo
$isSourceSet = isset ( $release [$ano] [$video] ['source'] );
$isThumbnailSet = isset ( $release [$ano] [$video] ['thumbnail'] );
if ($isSourceSet) {
	$embedSrc = $videoSrc [$release [$ano] [$video] ['source']];
}

if ($isThumbnailSet) {
	$thumbnail = $_SERVER['SERVER_NAME'] . $release [$ano] [$video] ['thumbnail'];
} else {
	$thumbnail = 'http://www.linkinparktvbr.com/resources/imagens/banner.jpg';
}

if (isset ( $release [$ano] [$video] ['videoId'] )) {
	$videoId = $release [$ano] [$video] ['videoId'];
}

if (isset ( $release [$ano] [$video] ['imgList'] )) {
	$imgList = join ( '\n', $release [$ano] [$video] ['imgList'] );
}

$nomeVideo = $release [$ano] [$video] ['title'];
$descricao = $release [$ano] [$video] ['descricao'];

$page_title = $nomeVideo . ' : ' . $release ['secao'] . ' (Legendado)';

?>

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
<link rel="stylesheet" href="/resources/css/video-template.css">
<link rel="stylesheet" type="text/css" href="/resources/css/global.css">
<link rel="stylesheet" type="text/css"
	href="/resources/css/template.css">
<script type="text/javascript" src="/resources/js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="/resources/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="/resources/js/primeui-2.2-min.js"></script>
<script type="text/javascript" src="/resources/js/menuButton.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
<script src="/resources/galleria/galleria-1.4.2.min.js"></script>
<meta property="og:url"
	content="<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']?>" />
<meta property="og:title" content="<?php echo $page_title ?>" />
<meta property="og:image" content="<?php echo $thumbnail ?>" />
<meta property="og:description"
	content="Tradução de <?php echo $nomeVideo ?>" />
<meta property="og:type" content="website" />
<title><?php echo $page_title ?></title>
</head>
<body>
	<?php
	include_once 'header.php';
	if ($_SERVER ['HTTP_HOST'] === "linkinparktvbr.com" || $_SERVER ['HTTP_HOST'] === "www.linkinparktvbr.com") {
		if (@$_COOKIE ["LPTVBrCookie"] !== "1124") {
			include_once ("../analyticstracking.php");
		}
	}
	?>
	
	<section id="main-section" class="body-section">
		<h1 class="descricao texto"><?php echo $nomeVideo ?></h1>
		<div>
			<!-- Se uma lista de imagens estiver configurada,
		será carregada a galeria; senão, o iframe do Youtube -->
		<?php if(isset($imgList)) { ?>
			<div class="galleria">
				<?=$imgList?>
			</div>
			<h5 class="powered-by">
				Powered By <a class="video-link" target="_blank"
					href="http://galleria.io/">Galleria</a>
			</h5>	
		<?php
		} else {
			?>
			<div class="video-container" style="margin-top: 5px !important;">
				<iframe src="<?php echo $embedSrc . $videoId ?>"
					webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
			</div>		
		<?php }?>

		<article class="descricao">
				<p class="descricao texto">
				<?=$descricao?>
			</p>
			</article>
		</div>
	<?php if(isset($imgList)) { ?>
	<script>
    	Galleria.loadTheme('/resources/galleria/themes/classic/galleria.classic.min.js');
        Galleria.run('.galleria');
    </script>
    <?php } ?>
    </section>
    
    	<?php
					include_once 'footer.php';
					?>
</body>
</html>