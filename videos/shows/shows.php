<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" type="text/css"
	href="/resources/css/letra-musica.css">
<link rel="stylesheet" href="/resources/css/jquery-ui.min.css">
<link rel="stylesheet" href="/resources/css/primeui-2.2-min.css">
<script type="text/javascript"
	src="/resources/js/jquery-1.11.3.min.js"></script>
<script type="text/javascript"
	src="/resources/js/jquery-ui.min.js"></script>
<script type="text/javascript"
	src="/resources/js/primeui-2.2-min.js"></script>
<script>
	$(function() {
		$('#show-tabView').puitabview();
	});
</script>
</head>
<body>
	<article>
		<div id="show-tabView" class="tabView">
			<ul class="tabs-shows">
				<li><a href="#oficiais">DVDs/Blu-Rays Oficiais</a></li>
				<li><a href="#outros">Outros</a></li>
			</ul>

			<div>
				<div id="oficiais">
					<table class="panelGrid">
						<tr>
							<td>
								<div class="panel">
									<a class="link" href="2003/live-in-texas"> <img class="linkImg"
										src="../resources/imagens/videos/shows/live-in-texas/live-in-texas.jpg"
										alt="Live In Texas" /> <label class="nomeLink">Live In Texas</label>
									</a>
								</div>
							</td>
							<td>
								<div class="panel">
									<a class="link" href="2008/road-to-revolution"> <img
										class="linkImg"
										src="../resources/imagens/videos/shows/road-to-revolution/road-to-revolution.jpg"
										alt="Road To Revolution" /> <label class="nomeLink">Road To
											Revolution</label>
									</a>
								</div>
							</td>
						</tr>
					</table>
				</div>

				<div id="outros">
					<table class="panelGrid">
						<tr>
							<td>
								<div class="panel">
									<a class="link" href="2011/itunes-festival"> <img
										class="linkImg"
										src="../resources/imagens/videos/shows/itunes-festival/itunes-festival.jpg"
										alt="iTunes Festival 2011" /> <label class="nomeLink">iTunes Festival 2011</label>
									</a>
								</div>
							</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</article>
</body>
</html>