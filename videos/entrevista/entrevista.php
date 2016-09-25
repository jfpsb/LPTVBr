<!DOCTYPE html>
<html>
<head>
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
					<div id="#dois-mil-catorze">
						<table class="panelGrid">
							<tr>
								<td>
									<div class="panel">
										<a class="link" href="2014/lightning-round-red-bull">
										<?php
										$dia = '7';
										$mes = 'Set';
										$ano = '2014';
										include 'postDataTemplate.php';
										?>
										<img
											alt="Linkin Park Lightning Round In The Red Bull Sound Space At KROQ"
											class="linkImg"
											src="/resources/imagens/videos/entrevista/lightning-round-red-bull.jpg">
											<label class="nomeLink">Linkin Park Lightning Round In The
												Red Bull Sound Space At KROQ</label>
										</a>
									</div>
								</td>
								<td>
									<div class="panel">
										<a class="link" href="2014/guitar-center-rockwalk-induction">
										<?php
										$dia = '5';
										$mes = 'Jul';
										$ano = '2014';
										include 'postDataTemplate.php';
										?>
										<img alt="Guitar Center Rockwalk Induction" class="linkImg"
											src="/resources/imagens/videos/entrevista/guitar-center-rockwalk-induction.jpg">
											<label class="nomeLink">Guitar Center Rockwalk Induction</label>
										</a>
									</div>
								</td>
							</tr>
						</table>
					</div>

					<div id="#dois-mil-quinze">
						<div align="center">
							<h2
								style="font-family: 'Courier New', Courier, monospace; color: black;">
								Ainda não disponíveis!<br>Volte em breve.
							</h2>
						</div>
					</div>

					<div id="#dois-mil-dezesseis">
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