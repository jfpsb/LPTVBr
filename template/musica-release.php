<?php
$tipo = $_GET ['tipo'];
$album = $_GET ['album'];

$filepath = 'http://' . $_SERVER ['SERVER_NAME'] . "/json/musicas/" . $tipo . ".json";
$str = file_get_contents ( $filepath );
$str = utf8_encode ( $str );

$release = json_decode ( $str, true );

if (! array_key_exists ( $album, $release )) {
	header ( 'HTTP/1.0 404 Not Found' );
	readfile ( '../notfound.php' );
	exit ();
}

$albumName = $release [$album] ['album'];

$thumbnail = $release [$album] ['thumbnail'];

$page_title = $albumName . ' - LPTVBr';

$artista = "Linkin Park";

if (isset ( $release [$album] ['lancamento'] ))
	$lancamento = $release [$album] ['lancamento'];
if (isset ( $release [$album] ['duracaoiso'] ))
	$duracaoiso = $release [$album] ['duracaoiso'];
if (isset ( $release [$album] ['duracao'] ))
	$duracao = $release [$album] ['duracao'];
if (isset ( $release [$album] ['numMus'] ))
	$numMus = $release [$album] ['numMus'];
if (isset ( $release [$album] ['gravadora'] ))
	$gravadora = $release [$album] ['gravadora'];
if (isset ( $release [$album] ['icone'] ))
	$icone = $release [$album] ['icone'];
if (isset ( $release [$album] ['datetime'] ))
	$datetime = $release [$album] ['datetime'];

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
<meta property="og:image" content="<?php echo $thumbnail['medium'] ?>" />
<meta property="og:description"
	content="Músicas traduzidas de <?php echo $release[$_GET['album']]['album'] ?>" />
<meta property="og:type" content="website" />
</head>
<body>
	<?php include_once 'header.php'; ?>
	
	<section class="mainSection">
	
		<?php
		foreach ( $release [$album] as $musica ) {
			if (isset ( $musica ['title'] ))
				echo $musica ['title'];
		}
		
		$url = "../musicas/" . $tipo . DIRECTORY_SEPARATOR . $album . ".php";
		
		include_once ($url);
		
		?>
	
	</section>
	
	<?php include_once 'footer.php'; ?>
</body>
</html>