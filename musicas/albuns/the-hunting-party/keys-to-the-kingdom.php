<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="shortcut icon" href="/LPTVBr/favicon.ico" type="image/x-icon" />
<link id="favicon" href="/LPTVBr/favicon.ico" rel="shortcut icon"
	type="image/vnd.microsoft.icon"></link>
<link rel="shortcut icon" href="/LPTVBr/favicon.ico" type="image/x-icon" />
<link id="favicon" href="/LPTVBr/favicon.ico" rel="shortcut icon"
	type="image/vnd.microsoft.icon"></link>
</head>
<body>
	<?php
// 	$page_title = "The Hunting Party : Keys To The Kingdom (Tradução)";
// 	$videoId = 'ZPlUjhroNd4';
// 	$musica = "keys-to-the-kingdom";
// 	$nomeMusica = "Keys To The Kingdom";
// 	$aside = "the-hunting-party";
// 	$album = 'thp';
	$str = file_get_contents("http://localhost/LPTVBr/musicas/albuns/albuns.json");
	$str = utf8_encode($str);
	
	$lista = array();
	$list = $str->fetch_all();
	$str->free_result();
	$str->close();
	$thp = json_decode($lista, true);
	
	echo $thp['title'];
	
	$page_title = $thp['title']; 
	include_once 'musicas/traducao-template.php';
	?>
</body>
</html>