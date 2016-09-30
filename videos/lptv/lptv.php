<?php
$str = file_get_contents ( 'http://' . $_SERVER ['SERVER_NAME'] . "/json/videos/" . "lptv.json" );
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
		$('#lptv-tabView').puitabview();
	});
</script>
<title>LPTVs Legendados - LPTVBr</title>
<meta property="og:title" content="LPTVs Legendados - LPTVBr" />
<meta property="og:type" content="website" />
<meta property="og:url"
	content="<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']?>" />
<meta property="og:image"
	content="http://<?php echo $_SERVER['SERVER_NAME']?>/resources/imagens/videos/lptv/lptv-logo-medium.jpg" />
<meta property="og:description" content="LPTVs legendados." />
<meta name="description" content="LPTVs legendados.">
</head>
<body>
<?php include_once '../../template/header.php';?>
<section class="mainSection">
		<article id="lptvLista">
			<div id="lptv-tabView" class="tabView">
				<ul class="tabs-lptv">
					<li><a href="#dois-mil-dez">2010</a></li>
					<li><a href="#dois-mil-catorze">2014</a></li>
					<li><a href="#dois-mil-quinze">2015</a></li>
					<li><a href="#dois-mil-dezesseis">2016</a></li>
				</ul>

				<div>
					<div>
						<div id="dois-mil-dez" class="abas-tabView">
							<?php
							$objListagemVideo->listaVideos ( $release ['2010'], "2010", true, "medium", false );
							?>
						</div>
					</div>
					<div>
						<div id="dois-mil-catorze" class="abas-tabView">
							<?php
							$objListagemVideo->listaVideos ( $release ['2014'], "2014", true, "medium", false );
							?>
						</div>
					</div>
					<div>
						<div id="dois-mil-quinze" class="abas-tabView">
							<?php
							$objListagemVideo->listaVideos ( $release ['2015'], "2015", true, "medium", false );
							?>
						</div>
					</div>
					<div id="dois-mil-dezesseis" class="abas-tabView">
						<div align="center">
							<h2
								style="font-family: 'Trebuchet MS', Helvetica, sans-serif; color: black;">
								Esperando os LPTVs de 2016, Linkin Park!<br>Volte em breve.
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