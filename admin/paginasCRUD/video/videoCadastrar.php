<html>
<head>
<title>Cadastro de Vídeo</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" href="/resources/css/admin/videoCadastrar.css">
<script type="text/javascript"
	src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.7.1.min.js"></script>
<script type="text/javascript"
	src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
<script type="text/javascript"
	src="/resources/js/admin/videoCadastrar.js"></script>
<script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=dha8k71hx43wtpt4k4xftdq4apxpwtd3vyh00o7k40d2ggfg"></script>
<script>tinymce.init({ selector:'textarea' });</script>
</head>
<body>
	<h1>CADASTRO DE VÍDEO</h1>
	<form action="<?php $_SERVER['PHP_SELF']?>" class="formulario" method="post" enctype="multipart/form-data">
		<label>Nome do vídeo: </label>
		<input type="text" name="nome"><br>
		<label>Selecione o tipo de vídeo: </label>
		<select name="tipoVideo" ></select>
		<label>Data e hora de postagem: </label>
		<input type="datetime-local" name="postado"><br>
		<label>Data e hora de lançamento do vídeo original: </label>
		<input type="datetime-local" name="lancamento"><br>
		<label>Duração em segundos do vídeo: </label>
		<input type="text" name="duracao"><br>
		<label>Digite o corpo do texto deste vídeo: </label>
		<textarea name="corpo">Next, get a free TinyMCE Cloud API key!</textarea>
	</form>
</body>
</html>