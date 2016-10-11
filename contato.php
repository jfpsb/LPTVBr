<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
<link id="favicon" href="/favicon.ico" rel="shortcut icon"
	type="image/vnd.microsoft.icon"></link>
<link rel="stylesheet" href="/resources/css/jquery-ui.min.css">
<link rel="stylesheet" type="text/css" href="/resources/css/global.css">
<link rel="stylesheet" type="text/css" href="/resources/css/contato.css">
<script type="text/javascript" src="/resources/js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="/resources/js/jquery-ui.min.js"></script>
<title>Contato - LPTVBr</title>
</head>
<body>
	<?php include_once 'template/header.php';?>
	
	<section class="mainSection">
		<h1 class="contato-header">Contate-nos</h1>
		<article class="contato-texto">
			<p>
				Sinta-se a vontade para mandar mensagens para nós sobre qualquer
				assunto: pedidos de legenda,<br>erros em nomes de músicas e/ou
				vídeos, erros em links, erros em imagens, datas e etc.
			</p>
			<p>
				Esta seção também pode ser usada para mandar mensagens sobre
				aspectos do site como: qualquer tipo de<br>erro de layout em
				computadores e/ou mobile, sugestões de cores, posicionamento de
				elementos e etc.
			</p>
		</article>
		<article class="contato-main">
			<form class="contato-form" action="contato-send.php">
				Título:<input type="text" name="titulo"><br> Assunto:<select>
					<option value="erro-musica">Erro em músicas</option>
					<!-- (título, tradução, etc) -->
					<option value="erro-video">Erro em vídeos</option>
					<!-- (título, tradução, etc) -->
					<option value="erro-site">Erro no site</option>
					<!-- (página carregando errado, layout, links, imagens, datas, etc) -->
					<option value="pedido-legenda">Pedido de legendas</option>
				</select><br>
				Mensagem: <br><textarea rows="4" cols="50"></textarea>
			</form>
		</article>
	</section>
	
	<?php include_once 'template/footer.php';?>
</body>
</html>