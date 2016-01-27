<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="shortcut icon" href="/LPTVBr/favicon.ico" type="image/x-icon" />
<link id="favicon" href="/LPTVBr/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon"></link>
<!-- CSS -->
<link rel="stylesheet" type="text/css" href="/LPTVBr/resources/css/letra-musica.css">
<link rel="stylesheet" type="text/css" href="/LPTVBr/resources/css/release-lista.css">
<link rel="stylesheet" href="/LPTVBr/resources/css/jquery-ui.min.css">
<link rel="stylesheet" href="/LPTVBr/resources/css/primeui-2.2-min.css">
<link rel="stylesheet" type="text/css" href="/LPTVBr/resources/css/global.css">
<link rel="stylesheet" type="text/css" href="/LPTVBr/resources/css/template.css">
<link rel="stylesheet" type="text/css" href="/LPTVBr/resources/css/video-template.css">

<!-- Javascript -->
<script type="text/javascript" src="/LPTVBr/resources/js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="/LPTVBr/resources/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="/LPTVBr/resources/js/primeui-2.2-min.js"></script>
<script type="text/javascript" src="/LPTVBr/resources/js/focusMainSection.js"></script>
<script type="text/javascript" src="/LPTVBr/resources/js/letramusica.js"></script>
<script type="text/javascript" src="/LPTVBr/resources/js/menuButton.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
<script src="/LPTVBr/resources/galleria/galleria-1.4.2.min.js"></script>

</head>
<title>LinkinParkTVBr</title>
<body>
	<?php
	include_once 'template/header.php';
	include_once("analyticstracking.php")
	?>
	
	<section id="main-section" class="body-section">
	
		<?php
		$url = '';
		
		foreach ( $_GET as $key => $value ) {
			if ($url != '') {
				$url = $url . '/';
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