<?php
$filepath = 'http://' . $_SERVER ['SERVER_NAME'] . "/json/videos/" . $_GET['tipo'] . ".json"; 
$str = file_get_contents ($filepath);
$str = utf8_encode($str);

$release = json_decode($str, true);

$page_title = $release['secao'] . ' : LinkinParkTVBr';

?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
<link id="favicon" href="/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon"></link>
<link rel="stylesheet" href="/resources/css/jquery-ui.min.css">
<link rel="stylesheet" href="/resources/css/primeui-2.2-min.css">
<link rel="stylesheet" type="text/css" href="/resources/css/global.css">
<link rel="stylesheet" type="text/css" href="/resources/css/template.css">
<link rel="stylesheet" type="text/css" href="/resources/css/release-lista.css">
<script type="text/javascript" src="/resources/js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="/resources/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="/resources/js/primeui-2.2-min.js"></script>
<script type="text/javascript" src="/resources/js/focusMainSection.js"></script>
<script type="text/javascript" src="/resources/js/letramusica.js"></script>
<script type="text/javascript" src="/resources/js/menuButton.js"></script>
<title><?php echo $page_title ?></title>
<meta property="og:url"
	content="<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']?>" />
<meta property="og:title" content="<?php echo $page_title ?>" />
<meta property="og:image"
	content="http://www.linkinparktvbr.com/resources/imagens/banner.jpg" />
<meta property="og:description"
	content="<?php echo $release['secao'].' Legendados(as)' ?>" />
<meta property="og:type" content="website" />
</head>
<body>
	<?php
	include_once 'header.php';
	include_once("../analyticstracking.php")
	?>
	
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