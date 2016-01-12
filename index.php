<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" href="<favicon.ico" type="image/x-icon" />
<link id="favicon" href="favicon.ico" rel="shortcut icon"
	type="image/vnd.microsoft.icon"></link>
<link rel="stylesheet" type="text/css" href="resources/css/index.css">
<link rel="stylesheet" type="text/css" href="resources/css/global.css">
<script type="text/javascript" src="resources/js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="resources/js/yt-upload.js"></script>
<title>LinkinParkTVBr</title>
</head>
<body>
	<?php
	include_once 'template/header.php';
	?>
	<section class="body-section">
		<article class="index-article">
			<div class="panel-header">
				<h2 class="header">Vídeos Recentes</h2>
			</div>
			<article class="video-grid">

				<form id="form" class="indexForm">
					<div class="liDiv">
						<ul id="lista" class="myUploads">
						</ul>
					</div>
				</form>

			</article>
		</article>
	</section>
	
	<?php
	include_once 'template/footer.php';
	?>
</body>
</html>