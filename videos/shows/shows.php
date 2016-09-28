<?php
$str = file_get_contents ( 'http://' . $_SERVER ['SERVER_NAME'] . "/json/videos/shows.json" );
$str = utf8_encode ( $str );
$release = json_decode ( $str, true );

include_once '../../resources/php/listagemVideos.php';

$objListagemVideo = new listagemVideos ();

?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" type="text/css" href="/resources/css/global.css">
<link rel="stylesheet" type="text/css"
	href="/resources/css/release-lista.css">
<link rel="stylesheet" href="/resources/css/jquery-ui.min.css">
<link rel="stylesheet" href="/resources/css/primeui-2.2-min.css">
<script type="text/javascript" src="/resources/js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="/resources/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="/resources/js/primeui-2.2-min.js"></script>
<script>
	$(function() {
		$('#show-tabView').puitabview();
	});
</script>
<title>Shows Legendados - LPTVBr</title>
</head>
<body>
<?php include_once '../../template/header.php';?>
<section class="mainSection">
		<article>
			<div id="show-tabView" class="tabView">
				<ul class="tabs-shows">
					<li><a href="#oficiais">DVDs/Blu-Rays Oficiais</a></li>
					<li><a href="#outros">Outros</a></li>
				</ul>

				<div>
					<div>
						<div id="oficiais" class="abas-tabView">
							<?php
							$objListagemVideo->listaVideos ( $release ['oficial'], "oficial", true, "medium", true );
							?>
						</div>
					</div>
					<div>
						<div id="outros" class="abas-tabView">
							<?php
							$objListagemVideo->listaVideos ( $release ['nao-oficial'], "nao-oficial", true, "medium", true );
							?>
						</div>
					</div>
				</div>
			</div>
		</article>
	</section>
	
	<?php include_once '../../template/footer.php';?>
</body>
</html>