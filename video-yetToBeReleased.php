<?php
include_once 'resources/php/checaLPTVBrCookie.php';
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Este vídeo ainda não está disponível - LPTVBr</title>
</head>
<body>
	<div align="center"
		style="font-family: 'TrebuchetMS', Helvetica, sans-serif; font-size: 15px; padding: 15px;">
		<h1>Conteúdo não disponível.</h1>
		<h2>No momento este vídeo não pode ser acessado.</h2>
		<h2><?php echo $videoSelecionado['title'];?></h2>
		<p>Estará disponível em: <?php echo $dataPostado->format ( "d/m/Y \à\s H:i:s" ); ?></p>
	</div>
</body>
</html>