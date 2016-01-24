<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="shortcut icon" href="/LPTVBr/favicon.ico" type="image/x-icon" />
<link id="favicon" href="/LPTVBr/favicon.ico" rel="shortcut icon"
	type="image/vnd.microsoft.icon"></link>
<link rel="stylesheet" href="/LPTVBr/resources/css/jquery-ui.min.css">
<link rel="stylesheet" href="/LPTVBr/resources/css/primeui-2.2-min.css">
<script type="text/javascript"
	src="/LPTVBr/resources/js/jquery-1.11.3.min.js"></script>
<script type="text/javascript"
	src="/LPTVBr/resources/js/jquery-ui.min.js"></script>
<script type="text/javascript"
	src="/LPTVBr/resources/js/primeui-2.2-min.js"></script>
<link rel="stylesheet" type="text/css"
	href="/LPTVBr/resources/css/release-lista.css">
<link rel="stylesheet" type="text/css"
	href="/LPTVBr/resources/css/release-lista.css">
<script type="text/javascript"
	src="/LPTVBr/resources/js/focusMainSection.js"></script>
</head>
<title>Vídeos Legendados</title>
<body>
	<?php
	include_once '../template/header.php';
	?>
	
	<section id="main-section" class="body-section">
	
		<?php
		$url = '';
		
		foreach ( $_GET as $key => $value ) {
			if ($url != '') {
				$url = $url . '/';
			}
			
			$url = $url . $value;
		}
		
		if ($url != '') {
			include_once ($url . '.php');
		} else {
			?>
		<article id="videos-article" class="leg-article">

			<table class="panelGrid" id="video-panel">
				<tr>
					<td>
						<div class="panel">
							<a class="link"> <img class="linkImg disabled"
								src="../resources/imagens/lptv-logo.jpg" alt="LPTV" /> <label
								class="nomeLink">LPTV</label>
							</a>
						</div>
					</td>
					<td>
						<div class="panel">
							<a class="link"> <img class="linkImg disabled"
								src="../resources/imagens/entrevista-logo.jpg" alt="Entrevistas" />
								<label class="nomeLink">Entrevistas</label>
							</a>
						</div>
					</td>
				</tr>
				<tr>
					<td>
						<div class="panel">
							<a class="link" href="shows/"> <img class="linkImg"
								src="../resources/imagens/shows-logo.jpg" alt="Shows" /> <label
								class="nomeLink">Shows</label>
							</a>
						</div>
					</td>
					<td>
						<div class="panel">
							<a class="link"> <img class="linkImg disabled"
								src="../resources/imagens/linkin-log-logo.png" alt="Linkin Logs" />
								<label class="nomeLink">Linkin Logs</label>
							</a>
						</div>
					</td>
				</tr>
				<tr>
					<td>
						<div class="panel">
							<a class="link"> <img class="linkImg disabled"
								src="../resources/imagens/outros-logo.png" alt="Outros" /> <label
								class="nomeLink">Outros</label>
							</a>
						</div>
					</td>
				</tr>
			</table>

		</article>
			
			<?php
			// Fechando 'else'
		}
		?>
	
	</section>
	<?php
	include_once '../template/footer.php';
	?>
</body>
</html>