<?php
date_default_timezone_set ( "America/Fortaleza" );
$dataHoraAtual = date ( "Y-m-d H:i:s" );

session_start ();

$_SESSION ['dataHoraAtual'] = $dataHoraAtual;
$_SESSION ['loginGranted'] = $login;
$_SESSION ['senhaGranted'] = $senha;

?>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" href="/resources/css/jquery-ui.min.css">
<link rel="stylesheet" href="/resources/css/primeui-2.2-min.css">
<link rel="stylesheet"
	href="/resources/css/admin/acessoConcedido.css">
<script type="text/javascript" src="/resources/js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="/resources/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="/resources/js/primeui-2.2-min.js"></script>
<script type="text/javascript"
	src="/resources/js/admin/acessoConcedido.js"></script>
</head>
<body>
	<article class="adminArticle">
		<h1>Administração de LPTVBr</h1>
		<div id="admin-tabView" class="tabView">
			<ul class="tabs-admin">
				<li><a class="tabViewLink" href="#releases">Releases</a></li>
				<li><a class="tabViewLink" href="#videos">Vídeos</a></li>
			</ul>
			<div>
				<div>
					<div id="releases" class="abas-tabView">
						<div id="tipo_pesquisa">
							<label for="tipo_release">Tipo De Release:</label>
							<select name="tipo_release">
								<option value="0">Selecione Um Tipo De Release</option>
								<option value="1">Álbuns</option>
								<option value="2">LPU</option>
								<option value="3">Remixes</option>
								<option value="4">Singles</option>
							</select>
							<button>Listar Releases</button>
							<a href="paginasCRUD/release/releaseCadastrar.php" target="_blank">Cadastrar Novo Release</a>
						</div>
						<table style="width: 100%">
							<tr>
								<th>Tipo de Release</th>
								<th>Nome</th>
								<th>Lançamento</th>
								<th>Duração</th>
								<th>Thumbnail</th>
								<th>Gravadora</th>
								<th>Copyright</th>
								<th>Opções</th>
							</tr>
							<tr>
								<td>
									<label>Álbuns</label>
								</td>
								<td>
									<label>The Hunting Party</label>
								</td>
								<td><label>13 de junho de 2014</label></td>
								<td><label>45:12</label></td>
								<td>
									<a href="atualizarThumbnail.php?nome=teste&tamanho=small&caminho=" title="Aperte para visualizar a thumbnail de tamanho pequeno" target="_blank">Small</a><br>
									<a href="atualizarThumbnail.php?nome=teste&tamanho=medium&caminho=" title="Aperte para visualizar a thumbnail de tamanho médio">Medium</a><br>
									<a href="atualizarThumbnail.php?nome=teste&tamanho=large&caminho=" title="Aperte para visualizar a thumbnail de tamanho grande">Large</a><br>
								</td>
								<td>
								<label>Machine Shop, Warner Bros.</label>
								</td>
								<td>
									<label>Linkin Park Jun 17, 2014 Ⓟ Warner Bros. Records Inc.</label>
								</td>
								<td>
									<a href="#" title="Aperte para atualizar os dados deste item">Atualizar</a><br>
									<a href="#" title="Aperte para remover este item">Remover</a>
								</td>
							</tr>
						</table>
					</div>
				</div>
				<div>
					<div id="videos" class="abas-tabView">
						<div id="tipo_pesquisa">
							<label for="tipo_video">Tipo De Vídeo:</label>
							<select name="tipo_video">
								<option value="0">Selecione Um Tipo De Vídeo</option>
								<option value="1">LPTV</option>
								<option value="2">Entrevistas</option>
								<option value="3">Shows</option>
								<option value="4">Linkin Logs</option>
								<option value="5">No Estúdio</option>
								<option value="6">Outros</option>
							</select>
							<button>Listar Vídeos</button>
							<a href="paginasCRUD/video/videoCadastrar.php">Cadastrar Novo Vídeo</a>
						</div>
						<table style="width: 100%">
							<tr>
								<th>Tipo de Vídeo</th>
								<th>Nome</th>
								<th>Lançamento</th>
								<th>Postado</th>
								<th>Duração</th>
								<th>Corpo</th>
								<th>Thumbnail</th>
								<th>Opções</th>
							</tr>
							<tr>
								<td>
									<label>LPTV</label>
								</td>
								<td>
									<label>LPTV #107 | The Hunting Party Photo Shoot</label>
								</td>
								<td>
									<label>2014-05-08 00:00:00</label>
								</td>
								<td>
									<label>2999-06-13 00:00:00</label>
								</td>
								<td>
									<label>Unknown</label>
								</td>
								<td>
									<a href="#">Acessar corpo de postagem</a>
								</td>
								<td>
									<label><a href="atualizarThumbnail.php?nome=teste&tamanho=small&caminho=" title="Aperte para visualizar a thumbnail de tamanho pequeno" target="_blank">Small</a><br>
									<a href="atualizarThumbnail.php?nome=teste&tamanho=medium&caminho=" title="Aperte para visualizar a thumbnail de tamanho médio">Medium</a><br>
									<a href="atualizarThumbnail.php?nome=teste&tamanho=large&caminho=" title="Aperte para visualizar a thumbnail de tamanho grande">Large</a><br></label>
								</td>
								<td>
									<label>LPTV</label>
								</td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</div>
	</article>
</body>
</html>