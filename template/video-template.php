<?php
include_once '../resources/php/checaLPTVBrCookie.php';

$tipo = $_GET ['tipo'];
$video = $_GET ['video'];
$ano = $_GET ['ano'];

$str = file_get_contents ( 'http://' . $_SERVER ['SERVER_NAME'] . "/json/videos/" . $tipo . ".json" );
$sourceVideoFile = file_get_contents ( 'http://' . $_SERVER ['SERVER_NAME'] . "/json/videos/videoSource.json" );
$str = utf8_encode ( $str );
$sourceVideoFile = utf8_encode ( $sourceVideoFile );
$release = json_decode ( $str, true );
$videoSrc = json_decode ( $sourceVideoFile, true );

if (! array_key_exists ( $ano, $release ) || ! array_key_exists ( $video, $release [$ano] )) {
	header ( 'HTTP/1.0 404 Not Found' );
	readfile ( '../notfound.php' );
	exit ();
}

$videoSelecionado = $release [$ano] [$video];

date_default_timezone_set ( "America/Fortaleza" );
$dataHoraAtual = date ( "Y-m-d H:i:s" );
$dataPostado = new DateTime ( $videoSelecionado ['postado'] );

if ($dataHoraAtual < $dataPostado->format ( "Y-m-d H:i:s" )) {
	header ( 'HTTP/1.0 302' );
	include_once '../video-yetToBeReleased.php';
	exit ();
}

$resultVideoId = null;
$imgList = null;

$embedSrc = $videoSrc [$videoSelecionado ['source']];
$resultThumbnail = $videoSelecionado ['thumbnail'];

if (isset ( $videoSelecionado ['videoId'] )) {
	$resultVideoId = $videoSelecionado ['videoId'];
}

if (isset ( $videoSelecionado ['imgList'] )) {
	$imgList = join ( '\n', $videoSelecionado ['imgList'] );
}

$nomeVideo = $videoSelecionado ['title'];
$descricao = $videoSelecionado ['descricao'];

$page_title = $nomeVideo . ' - ' . $release ['secao'] . ' (Legendado)';

include_once '../resources/php/CarregaIframe.php';

$objCarregaIframe = new CarregaIframe ();

?>
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
<link rel="stylesheet" href="/resources/css/video-template.css">
<link rel="stylesheet" type="text/css" href="/resources/css/global.css">
<script type="text/javascript" src="/resources/js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="/resources/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="/resources/js/primeui-2.2-min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
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
		<h1 class="titulo"><?php echo $nomeVideo ?></h1>
		<div class="midia-container">
			<!-- Se uma lista de imagens estiver configurada, será carregada a galeria; senão, o iframe do Youtube -->
			<?php
			$objCarregaIframe->carregaVideoIframe ( $imgList, $embedSrc, $resultVideoId, $descricao );
			?>
		</div>
	</section>
    
    <?php include_once '../template/footer.php';?>
</body>
</html>