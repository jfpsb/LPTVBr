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
	$str = file_get_contents('http://'.$_SERVER['SERVER_NAME']."/LPTVBr/musicas/albuns/albuns.json");
	$str = utf8_decode($str);
	$thp = json_decode($str, true);
	
	$page_title = $thp['the-hunting-party']['album'].' : '.
	$thp['the-hunting-party']['keys-to-the-kingdom']['title'].' (Tradução)';
	
	$videoId = $thp['the-hunting-party']['keys-to-the-kingdom']['videoId'];
	
	$musica = $thp['the-hunting-party']['keys-to-the-kingdom']['lyricTitle'];
	
	$nomeMusica = $thp['the-hunting-party']['keys-to-the-kingdom']['title'];
	
	$aside = $thp['the-hunting-party']['aside'];
	
	$album = $thp['the-hunting-party']['lyricAlbum'];
	
	include_once 'musicas/traducao-template.php';
	?>
</body>
</html>