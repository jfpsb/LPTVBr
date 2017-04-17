<?php
include_once '../../mysql/manager/ReleaseManager.php';
include_once '../../mysql/entidade/release.php';
include_once '../../mysql/entidade/thumbnail.php';
include_once '../../mysql/entidade/musica_release.php';
include_once '../../caracteres/GerenciaCaracter.php';

// Após cadastro a página é redirecionada para ela mesma e mostra o resultado
if (isset ( $_GET ['status'] )) {
	$status = $_GET ['status'];
	$titulo = $_GET ['titulo'];
	
	if ($status === "sucesso") {
		echo "<div class='resultado'>CADASTRO REALIZADO COM SUCESSO DE $titulo.<br><a class='link_remover_resultado' href='#'>Remover mensagem</a></div>";
	} else {
		$log = $_GET ['log'];
		echo "<div class='resultado'>HOUVE UM ERRO AO CADASTRAR $titulo. TENTE NOVAMENTE. LOG: $log <br><a class='link_remover_resultado' href='#'>Remover mensagem</a></div>";
	}
}

if (isset ( $_POST ['submit'] )) {
	// Objetos das entidades
	$objRelease = new release ();
	$objThumbnail = new thumbnail ();
	$objReleaseManager = new ReleaseManager ();
	
	// Separa ID de release de nome (Value em combobox é no formato "ID|NOME")
	$tipoReleaseArray = explode ( "|", $_POST ['tipoRelease'] );
	
	// Popula objeto de release
	$objRelease->fk_tipo_release = $tipoReleaseArray [0];
	$objRelease->caminho = removeAcentos($_POST ['caminho']);
	$objRelease->nome = $_POST ['nome'];
	$objRelease->lancamento = $_POST ['lancamento'];
	$objRelease->duracao = $_POST ['duracao'];
	$objRelease->gravadora = $_POST ['gravadora'];
	$objRelease->copyright = $_POST ['copyright'];
	
	// Constroi diretório onde ficará thumbnail de release
	$caminhoDestino = "/resources/imagens/" . removeAcentos ( $tipoReleaseArray [1] ) . "/$objRelease->caminho/";
	
	// Cria diretório se não existir
	if(! is_dir($caminhoDestino))
		mkdir($_SERVER ['DOCUMENT_ROOT'] . $caminhoDestino);
	
	$objThumbnail->large = $caminhoDestino . $objRelease->caminho . "-large." . pathinfo ( $_FILES ['thumbnail'] ['name'], PATHINFO_EXTENSION );
	$objThumbnail->medium = $caminhoDestino . $objRelease->caminho . "-medium." . pathinfo ( $_FILES ['thumbnail'] ['name'], PATHINFO_EXTENSION );
	$objThumbnail->small = $caminhoDestino . $objRelease->caminho . "-small." . pathinfo ( $_FILES ['thumbnail'] ['name'], PATHINFO_EXTENSION );
	
	// Guarda em array os objetos de musica_release para serem cadastrados
	$i = 0;
	$escolhasMusicas = [ ];
	
	while ( isset ( $_POST ['mus_' . ($i + 1)] ) ) {
		$objMusicaRelease = new musica_release ();
		$objMusicaRelease->numero = $i + 1;
		$objMusicaRelease->fk_musica = $_POST ['mus_' . ($i + 1)];
		$escolhasMusicas [$i] = $objMusicaRelease;
		$i ++;
	}
	
	$result = $objReleaseManager->inserirReleaseManager ( $objRelease, $objThumbnail, $_FILES ['thumbnail'], $escolhasMusicas );
	
	$getinfo = "?titulo=$objRelease->nome";
	
	if (! is_array ( $result )) {
		$getinfo .= "&status=sucesso";
	} else {
		$getinfo .= "&status=erro&log=" . $result ['error'];
	}
	
	// Chamada para impedir que usuário recadastre informações ao atualizar página
	header ( "Location: " . $_SERVER ['PHP_SELF'] . $getinfo );
}

?>

<html>
<head>
<title>Cadastro de Release</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" href="/resources/css/admin/releasePage.css">
<script type="text/javascript"
	src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.7.1.min.js"></script>
<script type="text/javascript"
	src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
<script type="text/javascript"
	src="/resources/js/admin/releaseCadastrar.js"></script>
</head>
<body>
	<h1>CADASTRO DE RELEASE</h1>
	<form action="<?php $_SERVER['PHP_SELF']?>" class="formulario"
		method="post" enctype="multipart/form-data">
		<label for="urlfield">Digite o caminho que será usado para esse
			release: </label> <input type="text" name="caminho"> <br> <label>Escolha
			o tipo do release: </label> <select id="tipoRelease"
			name="tipoRelease"></select> <br> <label>Escreva o nome do release: </label>
		<input type="text" name="nome"> <br> <label>Informe a data do
			lançamento: </label> <input type="date" name="lancamento"> <br> <label>Informe
			a duração (em segundos):</label> <input type="text" name="duracao"><br>
		<label>Informe a gravadora, se souber: </label> <input type="text"
			name="gravadora"> <br> <label>Informe as informações de copyright, se
			possuir: </label> <input type="text" name="copyright"> <br>

		<fieldset>
			<legend>Thumbnail:</legend>
			<label>Informe a imagem: </label> <input type="file" name="thumbnail"
				accept="image/*"> <br> <br>
		</fieldset>

		<fieldset id="grupoMusicasId" class="grupoMusicas">
			<legend>Músicas:</legend>
			<div class="musicasWrapper">
				<div class="selectWrapper">
					<label class="musIndex">1. </label> <select id="musica_1"
						name="mus_1" class="comboboxMusica">
					</select>
				</div>
			</div>
			<br> <a href="#grupoMusicasId" class="link_atualizar"
				onclick="getOpcoesMusica()">Atualizar Lista</a> <a
				href="#grupoMusicasId" class="add_combobox">Adicionar Outra Música</a>
		</fieldset>

		<input name="submit" type="submit" value="Cadastrar"
			class="btnFinalizar">
	</form>
</body>
</html>