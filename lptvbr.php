<?php 
	
$str = file_get_contents ( 'http://' . $_SERVER ['SERVER_NAME'] . "/LPTVBr/json/mainpages.json" );
$str = utf8_encode($str);
$page = json_decode ( $str, true );

$pagina = $_GET['pagina'];

$page_title = $page[$pagina]['title'];
$descricao = $page[$pagina]['descricao'];

?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="shortcut icon" href="/LPTVBr/favicon.ico" type="image/x-icon" />
<link id="favicon" href="/LPTVBr/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon"></link>

<meta property="og:url" content="<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']?>"/>
<meta property="og:title" content="<?php echo $page_title?>"/>
<meta property="og:image" content="http://www.linkinparktvbr.com/LPTVBr/resources/imagens/banner.jpg"/>
<meta property="og:description" content="<?php echo $descricao ?>" />
<meta property="og:type" content="website"/>
<title><?php echo $page_title ?></title>
</head>
<body>
	<?php
	include_once 'template/header.php';
	include_once("analyticstracking.php");
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
			include_once ($url . '.php');
		} else {
			include_once ('index.php');
		}
		
		?>
	
	</section>
	
	<?php
	include_once 'template/footer.php';
	?>
</body>
</html>