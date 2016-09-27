<?php
// Se algum álbum estiver na sessão ele é removido e a sessão é fechada
session_start ();
session_unset ();
session_destroy ();

$jsonAlbuns = file_get_contents ( 'http://' . $_SERVER ['SERVER_NAME'] . "/json/musicas/albuns.json" );
$jsonLpu = file_get_contents ( 'http://' . $_SERVER ['SERVER_NAME'] . "/json/musicas/lpu.json" );
$jsonRemixes = file_get_contents ( 'http://' . $_SERVER ['SERVER_NAME'] . "/json/musicas/remixes.json" );
$jsonSingles = file_get_contents ( 'http://' . $_SERVER ['SERVER_NAME'] . "/json/musicas/singles.json" );

$jsonAlbuns = utf8_encode ( $jsonAlbuns );
$jsonLpu = utf8_encode ( $jsonLpu );
$jsonRemixes = utf8_encode ( $jsonRemixes );
$jsonSingles = utf8_encode ( $jsonSingles );

$releaseAlbuns = json_decode ( $jsonAlbuns, true );
$releaseLpu = json_decode ( $jsonLpu, true );
$releaseRemixes = json_decode ( $jsonRemixes, true );
$releaseSingles = json_decode ( $jsonSingles, true );

include_once '../resources/php/listagemMusicas.php';

$objListagemMusicas = new listagemMusicas ();

?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" type="text/css"
	href="/resources/css/release-lista.css">
<link rel="stylesheet" href="/resources/css/jquery-ui.min.css">
<link rel="stylesheet" href="/resources/css/primeui-2.2-min.css">
<link rel="stylesheet" type="text/css" href="/resources/css/global.css">
<script type="text/javascript" src="/resources/js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="/resources/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="/resources/js/primeui-2.2-min.js"></script>
<script type="text/javascript" src="/resources/js/menuButton.js"></script>
<script type="text/javascript" src="/resources/js/musicaMenuButton.js"></script>
<script type="text/javascript">	
	$(function() {
		$('#mus-tabView').puitabview();
	});
</script>
<title>Músicas Legendadas - LPTVBr</title>
</head>
<body>

<?php include_once '../template/header.php';?>

<section class="mainSection">

		<article>
			<div id="mus-tabView" class="tabView">
				<ul class="tabs">
					<li><a href="#albuns">Álbuns</a></li>
					<li><a href="#singles">Singles</a></li>
					<li><a href="#remixes">Remixes</a></li>
					<li><a href="#lpu">LP Underground</a></li>
				</ul>
				<div>
					<div>
						<div id="albuns" class="abas-tabView">
							<?php
							
							$objListagemMusicas->listaAlbuns ( $releaseAlbuns, false, "medium", "albuns" );
							
							?>
						</div>
					</div>
					<div>
						<div id="singles" class="abas-tabView">
							<?php
							
							$objListagemMusicas->listaAlbuns ( $releaseSingles, false, "small", "singles" );
							
							?>
						</div>
					</div>
					<div>
						<div id="remixes" class="abas-tabView">
						<?php
						
						$objListagemMusicas->listaAlbuns ( $releaseRemixes, false, "small", "remixes" );
						
						?>
						</div>
					</div>
					<div>
						<div id="lpu" class="abas-tabView">
							<?php
							
							$objListagemMusicas->listaAlbuns ( $releaseLpu, true, "small", "lpu" );
							
							?>
						</div>
					</div>
				</div>
			</div>
		</article>
	</section>
	
	<?php include_once '../template/footer.php';?>

</body>
</html>