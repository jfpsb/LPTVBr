<?php
include_once '../resources/php/checaLPTVBrCookie.php';

$video = $_GET ['video'];
$oficial = $_GET ['oficial'];

$str = file_get_contents ( 'http://' . $_SERVER ['SERVER_NAME'] . "/json/videos/shows.json" );
$str = utf8_encode ( $str );
$release = json_decode ( $str, true );

if (! array_key_exists ( $oficial, $release ) || ! array_key_exists ( $video, $release [$oficial] )) {
	header ( 'HTTP/1.0 404 Not Found' );
	readfile ( '../notfound.php' );
	exit ();
}

$showSelecionado = $release [$oficial] [$video];

$resultThumbnail = $showSelecionado ['thumbnail'];

$setlist = $showSelecionado ['setlist'];

$imgList = join ( '\n', $showSelecionado ['imgList'] );

$nomeVideo = $showSelecionado ['title'];
$descricao = $showSelecionado ['descricao'];

$page_title = $nomeVideo . ' - ' . $release ['secao'] . ' (Legendado)';

?>

<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
<link id="favicon" href="/favicon.ico" rel="shortcut icon"
	type="image/vnd.microsoft.icon"></link>
<link rel="stylesheet" href="/resources/css/jquery-ui.min.css">
<link rel="stylesheet" href="/resources/css/primeui-2.2-min.css">
<link rel="stylesheet" href="/resources/css/show-template.css">
<link rel="stylesheet" type="text/css" href="/resources/css/global.css">
<script type="text/javascript" src="/resources/js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="/resources/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="/resources/js/primeui-2.2-min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
<script src="/resources/galleria/galleria-1.4.2.min.js"></script>
<meta property="og:url"
	content="<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']?>" />
<meta property="og:title" content="<?php echo $page_title ?>" />
<meta property="og:image"
	content="<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $resultThumbnail['medium'] ?>" />
<meta property="og:image:width" content="600" />
<meta property="og:image:height" content="600" />
<meta property="og:description"
	content="Tradução de <?php echo $nomeVideo ?>" />
<meta property="og:type" content="website" />
<title><?php echo $page_title ?></title>
</head>
<body>
	<?php include_once '../template/header.php';?>
	
	<section class="mainSection">

		<article class="showInfo">
			<article class="imagens">
				<div class="galleria"><?php echo $imgList?></div>

				<h5 class="powered-by">
					Powered By <a class="video-link" target="_blank"
						href="http://galleria.io/">Galleria</a>
				</h5>

				<script>
			Galleria.loadTheme('/resources/galleria/themes/classic/galleria.classic.min.js');
			Galleria.run('.galleria');
			</script>
			</article>
			<article class="descricao">
				<p><?php echo $descricao; ?></p>
				
				<h1>Setlist:</h1>
				<?php foreach ( $setlist as $url => $item ) { $titulo = $item ['title']; ?>		
					<p><?php echo $titulo; ?></p>		
				<?php } ?>
			</article>
		</article>
	</section>
		
	<?php include_once '../template/footer.php';?>


















</html>