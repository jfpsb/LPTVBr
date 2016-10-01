<?php
include_once 'resources/php/checaLPTVBrCookie.php';
include_once 'youtube/meus_uploads.php';
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
<link id="favicon" href="/favicon.ico" rel="shortcut icon"
	type="image/vnd.microsoft.icon"></link>
<link rel="stylesheet" type="text/css" href="/resources/css/index.css">
<link rel="stylesheet" type="text/css" href="/resources/css/global.css">
<script type="text/javascript" src="/resources/js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="/resources/js/jquery-ui.min.js"></script>
<title>LinkinParkTVBr - Início</title>
<meta property="og:title" content="LinkinParkTVBr - Início" />
<meta property="og:type" content="website" />
<meta property="og:url" content="<?php echo $_SERVER['SERVER_NAME'] ?>" />
<meta property="og:image"
	content="http://<?php echo $_SERVER['SERVER_NAME']?>/resources/imagens/banner.jpg" />
<meta property="og:description"
	content="Músicas e vídeos da banda Linkin Park traduzidos para o português do Brasil." />
<meta name="description"
	content="Músicas e vídeos da banda Linkin Park traduzidos para o português do Brasil.">
</head>
<body>
	<?php include_once 'template/header.php';?>
		
	<section class="mainSection">
		<article class="mainArticle">
			<article class="contentArticle">
				<article class="innerContentArticle">
					<article class="panel header">
						<h1>Vídeos Recentes</h1>
					</article>
					<div class="videosRecentes" align="center">
					<?=$htmlBody?>
					</div>
				</article>
			</article>
		</article>
	</section>
	
	<?php include_once 'template/footer.php';?>
</body>
</html>