<?php
include_once '../../mysql/DAO/DAOmusica.php';
include_once '../../mysql/entidade/musica.php';
include_once '../../mysql/entidade/letra.php';

// Após cadastro a página é redirecionada para ela mesma e mostra o resultado
if (isset ( $_GET ['status'] )) {
	$status = $_GET ['status'];
	$titulo = $_GET ['titulo'];
	
	if ($status === "sucesso") {
		echo "<div class='resultado'>CADASTRO REALIZADO COM SUCESSO DE $titulo.<br><a class='link_remover' href='#'>Remover mensagem</a></div>";
	} else {
		$log = $_GET ['log'];
		echo "<div class='resultado'>HOUVE UM ERRO AO CADASTRAR $titulo. TENTE NOVAMENTE. LOG: $log <br><a class='link_remover' href='#'>Remover mensagem</a></div>";
	}
}

// Se o formulário foi submetido, é realizado o cadastro
if (isset ( $_POST ['submit'] )) {
	$objMusica = new musica ();
	$objLetra = new letra ();
	$objDaoMusica = new DAOMusica ();
	$arquivos= [ ];
	
	$escolhaUpload = $_POST ['escolhaLetra'];
	
	if (isset ( $_POST ['comboBoxEscolhaMusica'] )) {
		$objLetra->idletra = $_POST ['comboBoxEscolhaMusica'];
	} else {
		$caminhoParaOriginal = "/musicas/letras/original/";
		$caminhoParaTraducao = "/musicas/letras/traducao/";
		
		if(isset($objLetra->idletra))
			unset($objLetra->idletra);
		
		$objLetra->original = $caminhoParaOriginal . $_FILES ['letraoriginal'] ['name'];
		$objLetra->traducao = $caminhoParaTraducao . $_FILES ['letratraducao'] ['name'];
		
		$arquivos['original'] = $_FILES ['letraoriginal'];
		$arquivos['traducao'] = $_FILES ['letratraducao'];
	}
	
	$objMusica->titulo = $_POST ['musicanome'];
	$objMusica->videoid = $_POST ['videoid'];
	$objMusica->disabled = (isset ( $_POST ['disabled'] ) ? 1 : 0);
	
	$result = $objDaoMusica->insertMusica ( $objMusica, $objLetra, $arquivos );
	
	$getinfo = "?titulo=$objMusica->titulo";
	
	if ($result ['result'] === TRUE) {
		$getinfo .= "&status=sucesso";
	} else {
		$getinfo .= "&status=erro&log=" . $result ['error'];
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
		method="post" enctype="multipart/form-data">
		<label>Escreva o nome da música: </label> <input type="text"
			name="musicanome" required> <br> <label>Informe a id do vídeo: </label>
		<input type="text" name="videoid" required> <br>
		<fieldset>
			<legend>Qual opção será utilizada para inserir a letra</legend>
			<input type="radio" name="escolhaLetra" value="arquivo" required
				checked>Escolha de arquivos<br> <input type="radio"
				name="escolhaLetra" value="combobox" required>Selecionarei a letra
			pelo menu de letras já existentes
		</fieldset>
		<div id="letraContainer"></div>
		<label>Informe se a música está desativada:</label> <input
			type="checkbox" name="disabled"><br> <br> <input name="submit"
			type="submit" value="Cadastrar" class="btnFinalizar">
	</form>
</body>
</html>