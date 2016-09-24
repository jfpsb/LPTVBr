<?php
include_once 'resources/php/checaLPTVBrCookie.php';
include_once 'youtube/meus_uploads.php';
?>
<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
<link id="favicon" href="/favicon.ico" rel="shortcut icon"
	type="image/vnd.microsoft.icon"></link>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" type="text/css" href="/resources/css/index.css">
<link rel="stylesheet" type="text/css" href="/resources/css/global.css">
<script type="text/javascript" src="/resources/js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="/resources/js/jquery-ui.min.js"></script>
<title>LinkinParkTVBr - Início</title>
</head>
<body>
	<?php include_once 'template/header.php';?>
		
	<section class="mainSection">
		<article class="mainArticle">
			<article class="contentArticle">
				<article class="innerContentArticle">
					<article class="panel header">
						<h3>Vídeos Recentes</h3>
					</article>
					<div class="videosRecentes" align="center">
					<?=$htmlBody?>
					</div>
				</article>
				<aside class="paginasRecentes">
					<section class="panel header">
						<h3>Últimas páginas</h3>
					</section>
					<section>
						<ol>
							<li>Placeholder 1</li>
							<li>Placeholder 2</li>
							<li>Placeholder 3</li>
							<li>Placeholder 4</li>
							<li>Placeholder 5</li>
						</ol>
					</section>
				</aside>
			</article>
		</article>
	</section>
	
	<?php include_once 'template/footer.php';?>
</body>
</html>