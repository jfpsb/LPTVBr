<?php
$str = file_get_contents ( 'http://' . $_SERVER ['SERVER_NAME'] . "/json/videos/outros.json" );
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
<title>Outros Legendados - LPTVBr</title>
<meta property="og:title" content="Outros Legendados - LPTVBr" />
<meta property="og:type" content="website" />
<meta property="og:url"
	content="<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']?>" />
<meta property="og:image"
	content="http://<?php echo $_SERVER['SERVER_NAME']?>/resources/imagens/videos/outros/outros-medium.jpg" />
<meta property="og:description" content="Outros Legendados." />
<meta name="description" content="Outros Legendados.">
</head>
<body>
<?php include_once '../../template/header.php';?>
<section class="mainSection">
		<article class="abas-tabView">
			<?php
			$objListagemVideo->listaVideos ( $release ['2016'], "2016", false, "medium" );
			$objListagemVideo->listaVideos ( $release ['2010'], "2010", false, "medium" );
			?>
		</article>
	</section>
	
	<?php include_once '../../template/footer.php';?>
</body>
</html>