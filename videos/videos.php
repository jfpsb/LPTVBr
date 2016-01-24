<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="shortcut icon" href="/LPTVBr/favicon.ico" type="image/x-icon" />
<link id="favicon" href="/LPTVBr/favicon.ico" rel="shortcut icon"
	type="image/vnd.microsoft.icon"></link>
<link rel="stylesheet" href="/LPTVBr/resources/css/jquery-ui.min.css">
<link rel="stylesheet" href="/LPTVBr/resources/css/primeui-2.2-min.css">
<script type="text/javascript"
	src="/LPTVBr/resources/js/jquery-1.11.3.min.js"></script>
<script type="text/javascript"
	src="/LPTVBr/resources/js/jquery-ui.min.js"></script>
<script type="text/javascript"
	src="/LPTVBr/resources/js/primeui-2.2-min.js"></script>
<link rel="stylesheet" type="text/css"
	href="/LPTVBr/resources/css/release-lista.css">
</head>
<title>Vídeos Legendados</title>
<body>
	<?php
	include_once '../template/header.php';
	?>
	
	<section id="main-section" class="body-section">
	
		<?php
			$url = '';
			
			foreach ($_GET as $key => $value) {
				if($url != '') {
					$url = $url.'/';
				}
				
				$url = $url.$value;				
			}
			
			if($url != '') {
				include_once ($url.'.php');
			}
			else {
				include_once 'video-main.php';
			}
		?>
	
	</section>
	<?php
	include_once '../template/footer.php';
	?>
</body>
</html>