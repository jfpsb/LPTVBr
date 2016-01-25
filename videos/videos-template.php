<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" type="text/css" href="/LPTVBr/resources/css/letra-musica.css">
<link rel="stylesheet" href="/LPTVBr/resources/css/jquery-ui.min.css">
<link rel="stylesheet" href="/LPTVBr/resources/css/primeui-2.2-min.css">
<script type="text/javascript" src="/LPTVBr/resources/js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="/LPTVBr/resources/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="/LPTVBr/resources/js/primeui-2.2-min.js"></script>
</head>
<body>
	<div>
		<div class="galleria">
			<?=$imgList?>
		</div>
		<h4 class="powered-by">
			Powered By <a class="video-link" target="_blank"
				href="http://galleria.io/">Galleria</a>
		</h4>
		<article class="descricao">
			<?=$descricao?>
		</article>
	</div>
	<script>
    	Galleria.loadTheme('/LPTVBr/resources/galleria/themes/classic/galleria.classic.min.js');
        Galleria.run('.galleria');
    </script>
</body>
</html>