<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" type="text/css"
	href="/LPTVBr/resources/css/letra-musica.css">
<link rel="stylesheet" href="/LPTVBr/resources/css/jquery-ui.min.css">
<link rel="stylesheet" href="/LPTVBr/resources/css/primeui-2.2-min.css">
<script type="text/javascript"
	src="/LPTVBr/resources/js/jquery-1.11.3.min.js"></script>
<script type="text/javascript"
	src="/LPTVBr/resources/js/jquery-ui.min.js"></script>
<script type="text/javascript"
	src="/LPTVBr/resources/js/primeui-2.2-min.js"></script>
<script>
	document.title = "Linkin Park : LPTVs (Legendados)";

	$(function() {
		$('#lptv-tabView').puitabview();
	});
</script>
</head>
<body>
	<article>
		<div id="lptv-tabView" class="tabView">
			<ul class="tabs-lptv">
				<li><a href="#dois-mil-catorze">2014</a></li>
				<li><a href="#dois-mil-quinze">2015</a></li>
				<li><a href="#dois-mil-dezesseis">2016</a></li>
			</ul>

			<div>
				<div id="#dois-mil-catorze">
					<?php include 'dois-mil-catorze.php'; ?>
				</div>

				<div id="#dois-mil-quinze">
					<?php include_once 'dois-mil-quinze.php'; ?>
				</div>

				<div id="#dois-mil-dezesseis">
					<div align="center">
						<h2
							style="font-family: 'Courier New', Courier, monospace; color: white;">
							Esperando os LPTVs de 2016, Linkin Park!<br>Volte em breve.
						</h2>
					</div>
				</div>
			</div>
		</div>
	</article>
</body>
</html>