<?php
$str = file_get_contents ( 'http://' . $_SERVER ['SERVER_NAME'] . "/json/videos/no-estudio.json" );
$str = utf8_encode ( $str );
$release = json_decode ( $str, true );

include_once '../../resources/php/listagemVideos.php';

$objListagemVideo = new listagemVideos ();

?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" type="text/css" href="/resources/css/global.css">
<link rel="stylesheet" type="text/css"
	href="/resources/css/release-lista.css">
<link rel="stylesheet" href="/resources/css/jquery-ui.min.css">
<link rel="stylesheet" href="/resources/css/primeui-2.2-min.css">
<script type="text/javascript" src="/resources/js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="/resources/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="/resources/js/primeui-2.2-min.js"></script>
<title>No Estúdio Legendado - LPTVBr</title>
<meta property="og:title" content="No Estúdio Legendado - LPTVBr" />
<meta property="og:type" content="website" />
<meta property="og:url"
	content="<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']?>" />
<meta property="og:image"
	content="http://<?php echo $_SERVER['SERVER_NAME']?>/resources/imagens/videos/no-estudio/no-estudio-medium.jpg" />
<meta property="og:description" content="No Estúdio Legendado." />
<meta name="description" content="No Estúdio Legendado.">
</head>
<body>
<?php include_once '../../template/header.php';?>
<section class="mainSection">
		<article class="abas-tabView">
			<?php
			$objListagemVideo->listaVideos ( $release ['2012'], "2012", false, "medium" );
			$objListagemVideo->listaVideos ( $release ['2010'], "2010", false, "medium" );
			$objListagemVideo->listaVideos ( $release ['2007'], "2007", false, "medium" );
			$objListagemVideo->listaVideos ( $release ['2003'], "2003", false, "medium" );
			?>
		</article>
	</section>
	
	<?php include_once '../../template/footer.php';?>
</body>
</html>