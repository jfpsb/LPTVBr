<?php
include_once '../../mysql/DAO/DAOmusica.php';
include_once '../../mysql/entidade/musica.php';

// Após cadastro a página é redirecionada para ela mesma e mostra o resultado
if (isset ( $_GET ['status'] )) {
	$status = $_GET ['status'];
	$titulo = $_GET ['titulo'];
	
	if ($status === "sucesso") {
		echo "<div class='resultado'>CADASTRO REALIZADO COM SUCESSO DE $titulo.<br><a class='link_remover' href='#'>Remover mensagem</a></div>";
	} else {
		echo "<div class='resultado'>HOUVE UM ERRO AO CADASTRAR $titulo. TENTE NOVAMENTE.<br><a class='link_remover' href='#'>Remover mensagem</a></div>";
	}
}

if (isset ( $_POST ['submit'] )) {
	$objMusica = new musica ();
	$objDaoMusica = new DAOMusica ();
	
	$objMusica->titulo = $_POST ['musicaname'];
	$objMusica->videoid = $_POST ['videoid'];
	$objMusica->disabled = (isset ( $_POST ['disabled'] ) ? 1 : 0);
	
	$result = $objDaoMusica->insertMusica ( $objMusica );
	
	$getinfo = "?titulo=$objMusica->titulo";
	
	if ($result) {
		$getinfo .= "&status=sucesso";
	} else {
		$getinfo .= "&status=erro";
	}
	
	header ( "Location: " . $_SERVER ['PHP_SELF'] . $getinfo );
}

?>

<html>
<head>
<title>Cadastro de Música</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" href="/resources/css/admin/releasePage.css">
<script type="text/javascript"
	src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.7.1.min.js"></script>
<script type="text/javascript"
	src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
<script type="text/javascript"
	src="/resources/js/admin/musicaCadastrar.js"></script>
</head>
<body>
	<h1>CADASTRO DE MÚSICA</h1>
	<form action="<?php $_SERVER['PHP_SELF']?>" class="formulario"
		method="post">
		<label>Escreva o nome da música: </label>
		<input type="text" name="musicaname" required> <br>
		<label>Informe a id do vídeo: </label>
		<input type="text" name="videoid" required> <br>
		<label>Escolha o .txt da letra original: </label>
		<input type="file" name="letraoriginal" accept=".txt"><br>
		<label>Escolha o .txt da letra tradução: </label>
		<input type="file" name="letratraducao" accept=".txt"><br>
		<label>Informe se a música está desativada:</label>
		<input type="checkbox" name="disabled"><br>
		<input name="submit" type="submit" value="Cadastrar" class="btnFinalizar">
	</form>
</body>
</html>