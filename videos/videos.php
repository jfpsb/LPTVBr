<?php 
include_once '../resources/php/checaLPTVBrCookie.php';
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
<title>Vídeos Legendadas - LPTVBr</title>
<meta property="og:title" content="Vídeos Legendadas - LPTVBr" />
<meta property="og:type" content="website" />
<meta property="og:url"
	content="<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']?>" />
<meta property="og:image"
	content="http://<?php echo $_SERVER['SERVER_NAME']?>/resources/imagens/banner.jpg" />
<meta property="og:description"
	content="Entrevistas, LPTVs, Shows e mais legendados." />
<meta name="description"
	content="Entrevistas, LPTVs, Shows e mais legendados.">
</head>
<body>

<?php include_once '../template/header.php';?>

<section class="mainSection">
		<article id="videos-article" class="abas-tabView">
			<div class="panel">
				<a class="link" href="lptv/"><img class="linkImg"
					src="/resources/imagens/videos/lptv/lptv-logo-medium.jpg"
					alt="LPTV" /> <label class="nomeLink">LPTV</label> </a>
			</div>
			<div class="panel">
				<a class="link" href="entrevista/"> <img class="linkImg"
					src="/resources/imagens/videos/entrevista/entrevista-medium.jpg"
					alt="Entrevistas" /> <label class="nomeLink">Entrevistas</label>
				</a>
			</div>
			<div class="panel">
				<a class="link" href="shows/"> <img class="linkImg"
					src="/resources/imagens/videos/shows/show-medium.jpg" alt="Shows" />
					<label class="nomeLink">Shows</label>
				</a>
			</div>
			<div class="panel">
				<a class="link" href="linkin-logs/"> <img class="linkImg"
					src="/resources/imagens/videos/linkin-logs/linkin-log-medium.jpg"
					alt="Linkin Logs" /> <label class="nomeLink">Linkin Logs</label>
				</a>
			</div>
			<div class="panel">
				<a class="link" href="no-estudio/"> <img class="linkImg"
					src="/resources/imagens/videos/no-estudio/no-estudio-medium.jpg"
					alt="No Estúdio Com Linkin Park" /> <label class="nomeLink">No
						Estúdio</label>
				</a>
			</div>
			<div class="panel">
				<a class="link" href="outros/"> <img class="linkImg"
					src="/resources/imagens/videos/outros/outros-medium.jpg"
					alt="Outros" /> <label class="nomeLink">Outros</label>
				</a>
			</div>
		</article>
	</section>
	
	<?php include_once '../template/footer.php';?>
</body>
</html>