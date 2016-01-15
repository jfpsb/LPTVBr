<?php 
	$page = $_GET['page'];
	
	if(isset($_GET['mus'])) {
		$musTitle = 'LP Underground 15: '.$_GET['mus'].' (Tradução)';
	}
	else {
		$musTitle = 'LP Underground 15';
	}
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="shortcut icon" href="/LPTVBr/favicon.ico" type="image/x-icon" />
<link id="favicon" href="/LPTVBr/favicon.ico" rel="shortcut icon"
	type="image/vnd.microsoft.icon"></link>
<script type="text/javascript"
	src="/LPTVBr/resources/js/jquery-1.11.3.min.js"></script>
<link rel="stylesheet" type="text/css"
	href="/LPTVBr/resources/css/mus-lista.css">
<link rel="stylesheet" type="text/css"
	href="/LPTVBr/resources/css/mus-lista-bg.css">
<link rel="stylesheet" type="text/css"
	href="/LPTVBr/resources/css/global.css">
<script type="text/javascript"
	src="/LPTVBr/resources/js/focusMainSection.js"></script>
<title><?php
echo $musTitle?></title>
</head>
<body>
	<?php
	include_once '../../../template/header.php';
	?>
	
 	<section id="main-section" class="body-section">
		<?php 
 			include_once ($page.'.php');
 		?>
 	</section>
	
	<?php include_once '../../../template/footer.php';?>
</body>
</html>