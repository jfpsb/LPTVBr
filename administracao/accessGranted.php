<?php
date_default_timezone_set ( "America/Fortaleza" );
$dataHoraAtual = date ( "Y-m-d H:i:s" );

session_start ();

$_SESSION ['dataHoraAtual'] = $dataHoraAtual;
$_SESSION ['loginGranted'] = $login;
$_SESSION ['senhaGranted'] = $senha;

?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" href="/resources/css/jquery-ui.min.css">
<link rel="stylesheet" href="/resources/css/primeui-2.2-min.css">
<script type="text/javascript" src="/resources/js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="/resources/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="/resources/js/primeui-2.2-min.js"></script>
<script>
	$(function() {
		$('#admin-tabView').puitabview();
	});

	$(document).ready( function() {
	    $(".linksLista").on("click", function() {
		    var id = $(this).attr('id');
	        $(".adminOpcaoContent").load("paginasCRUD/"+ id + ".php");
	    });
	});
</script>
</head>
<body>
	<article class="adminArticle">
		<h1>Administração de LPTVBr</h1>
		<div id="admin-tabView" class="tabView">
			<ul class="tabs-admin">
				<li><a href="#releases">Álbuns/LPUs/Singles/Remixes</a></li>
				<li><a href="#videos">Vídeos</a></li>
			</ul>
			<div>
				<div>
					<div id="releases" class="abas-tabView"><?php include_once 'paginasEntidade/releases.php';?></div>
				</div>
				<div>
					<div id="videos" class="abas-tabView"><?php include_once 'paginasEntidade/videos.php';?></div>
				</div>
			</div>
		</div>
	</article>
</body>
</html>