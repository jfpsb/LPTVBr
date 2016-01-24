<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
<script src="/LPTVBr/resources/galleria/galleria-1.4.2.min.js"></script>
<link rel="stylesheet" type="text/css"
	href="/LPTVBr/resources/css/video-template.css">
<script type="text/javascript"
	src="/LPTVBr/resources/js/focusMainSection.js"></script>
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