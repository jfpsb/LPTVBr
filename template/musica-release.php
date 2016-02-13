<?php
$tipo = $_GET ['tipo'];
$filepath = 'http://' . $_SERVER ['SERVER_NAME'] . "/json/musicas/" . $tipo . ".json";
$str = file_get_contents ( $filepath );
$str = utf8_encode ( $str );

$release = json_decode ( $str, true );

$albumName = $release [$_GET ['album']] ['album'];

$page_title = $albumName . ' : LinkinParkTVBr';
if (isset ( $release ['artista'] ))
	$artista = $release ['artista'];
if (isset ( $release [$_GET ['album']] ['lancamento'] ))
	$lancamento = $release [$_GET ['album']] ['lancamento'];
if (isset ( $release [$_GET ['album']] ['duracaoiso'] ))
	$duracaoiso = $release [$_GET ['album']] ['duracaoiso'];
if (isset ( $release [$_GET ['album']] ['duracao'] ))
	$duracao = $release [$_GET ['album']] ['duracao'];
if (isset ( $release [$_GET ['album']] ['numMus'] ))
	$numMus = $release [$_GET ['album']] ['numMus'];
if (isset ( $release [$_GET ['album']] ['gravadora'] ))
	$gravadora = $release [$_GET ['album']] ['gravadora'];
if (isset ( $release [$_GET ['album']] ['icone'] ))
	$icone = $release [$_GET ['album']] ['icone'];
if (isset ( $release [$_GET ['album']] ['datetime'] ))
	$datetime = $release [$_GET ['album']] ['datetime'];

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
<link rel="stylesheet" type="text/css" href="/resources/css/global.css">
<link rel="stylesheet" type="text/css"
	href="/resources/css/template.css">
<script type="text/javascript" src="/resources/js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="/resources/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="/resources/js/primeui-2.2-min.js"></script>
<script type="text/javascript" src="/resources/js/letramusica.js"></script>
<script type="text/javascript" src="/resources/js/menuButton.js"></script>
<link rel="stylesheet" type="text/css"
	href="/resources/css/mus-lista.css">
<link rel="stylesheet" type="text/css"
	href="/resources/css/mus-lista-bg.css">
<title><?php echo $page_title ?></title>
<meta property="og:url"
	content="<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']?>" />
<meta property="og:title" content="<?php echo $page_title ?>" />
<meta property="og:image"
	content="http://www.linkinparktvbr.com/resources/imagens/banner.jpg" />
<meta property="og:description"
	content="Músicas traduzidas de <?php echo $release[$_GET['album']]['album'] ?>" />
<meta property="og:type" content="website" />
</head>
<body>
	<?php
	include_once 'header.php';
	include_once ("../analyticstracking.php")?>
	
	<section id="main-section" class="body-section">
	
		<?php
		$url = '';
		
		foreach ( $_GET as $key => $value ) {
			if ($url != '') {
				$url = $url . DIRECTORY_SEPARATOR;
			}
			
			$url = $url . $value;
		}
		
		if ($url != '') {
			include_once ('../' . $url . '.php');
		}
		
		?>
	
	</section>
	
	<?php
	include_once 'footer.php';
	?>
</body>
</html>