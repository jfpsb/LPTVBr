<?php
$str = file_get_contents ( 'http://' . $_SERVER ['SERVER_NAME'] . "/json/videos/entrevista.json" );
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
		$('#entrevista-tabView').puitabview();
	});
</script>
<title>Entrevistas Legendadas - LPTVBr</title>
<meta property="og:title" content="Entrevistas Legendadas - LPTVBr" />
<meta property="og:type" content="website" />
<meta property="og:url"
	content="<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']?>" />
<meta property="og:image"
	content="http://<?php echo $_SERVER['SERVER_NAME']?>/resources/imagens/videos/entrevista/entrevista-medium.jpg" />
<meta property="og:description" content="Entrevistas legendados." />
<meta name="description" content="Entrevistas legendados.">
</head>
<body>
	<?php include_once '../../template/header.php';?>
	
	<section class="mainSection">
		<article>
			<div id="entrevista-tabView" class="tabView">
				<ul class="tabs-entrevista">
					<li><a href="#dois-mil-catorze">2014</a></li>
					<li><a href="#dois-mil-quinze">2015</a></li>
					<li><a href="#dois-mil-dezesseis">2016</a></li>
				</ul>

				<div>
					<div>
						<div id="dois-mil-catorze" class="abas-tabView">
							<?php
							$objListagemVideo->listaVideos ( $release ['2014'], "2014", true, "medium", false );
							?>	
						</div>
					</div>
					<div id="dois-mil-quinze" class="abas-tabView">
						<div align="center">
							<h2
								style="font-family: 'Courier New', Courier, monospace; color: black;">
								Ainda não disponíveis!<br>Volte em breve.
							</h2>
						</div>
					</div>

					<div id="dois-mil-dezesseis" class="abas-tabView">
						<div align="center">
							<h2
								style="font-family: 'Courier New', Courier, monospace; color: black;">
								Ainda não disponíveis!<br>Volte em breve.
							</h2>
						</div>
					</div>
				</div>
			</div>
		</article>
	</section>
	
	<?php include_once '../../template/footer.php';?>
</body>
</html>