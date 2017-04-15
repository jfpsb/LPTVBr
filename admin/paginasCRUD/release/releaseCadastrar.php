<?php 
	include_once '../../mysql/manager/ReleaseManager.php';
	include_once '../../mysql/entidade/release.php';
	include_once '../../mysql/entidade/thumbnail.php';
	
	if(isset($_POST['submit'])) {
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
	}

	if(isset($_POST['submit'])) {
		$objRelease = new release();
		$objThumbnail = new thumbnail();
		$objReleaseManager = new ReleaseManager();
		
		$objRelease->fk_tipo_release = $_POST['tipoRelease'];
		$objRelease->caminho = $_POST['caminho'];
		$objRelease->nome = $_POST['nome'];
		$objRelease->lancamento = $_POST['lancamento'];
		$objRelease->duracao = $_POST['duracao'];
		$objRelease->gravadora = $_POST['gravadora'];
		$objRelease->copyright = $_POST['copyright'];
		
		$objThumbnail->large = $_FILES['thumbnail']['tmp_name'];
		$objThumbnail->medium = $_FILES['thumbnail']['tmp_name'];
		$objThumbnail->small = $_FILES['thumbnail']['tmp_name'];
		
		$result = $objReleaseManager->inserirReleaseManager($objRelease, $objThumbnail);
		
		if(! is_array($result)) {
			echo "AEHOOO";
		}
		else {
			echo "DEU RUIM";
		}
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
	<form action="<?php $_SERVER['PHP_SELF']?>" class="formulario" method="post" enctype="multipart/form-data">
		<label for="urlfield">Digite o caminho que será usado para esse release: </label>
		<input type="text" name="caminho"> <br>
		<label>Escolha o tipo do release: </label>
		<select id="tipoRelease" name="tipoRelease"></select> <br>
		<label>Escreva o nome do release: </label>
		<input type="text" name="nome"> <br>
		<label>Informe a data do lançamento: </label>
		<input type="date" name="lancamento"> <br>
		<label>Informe a duração (em segundos):</label>
		<input type="text" name="duracao"><br>
		<label>Informe a gravadora, se souber: </label>
		<input type="text" name="gravadora"> <br>
		<label>Informe as informações de copyright, se possuir: </label>
		<input type="text" name="copyright"> <br>

		<fieldset>
			<legend>Thumbnail:</legend>
			<label>Informe a imagem: </label> <input type="file"
				name="thumbnail" accept="image/*"> <br> <br>
			<!-- Para usar input file $_FILES['releaseThumbUpload']['tmp_name'] -->
		</fieldset>

		<fieldset id="grupoMusicasId" class="grupoMusicas">
			<legend>Músicas:</legend>
			<div class="musicasWrapper">
				<div class="selectWrapper">
					<label class="musIndex">1. </label>
					<select id="musica_1" class="comboboxMusica">
					</select>
				</div>
			</div>
			<br> <a href="#grupoMusicasId" class="link_atualizar"
				onclick="getOpcoesMusica()">Atualizar Lista</a> <a href="#grupoMusicasId"
				class="add_combobox">Adicionar Outra Música</a>
		</fieldset>

		<input name="submit" type="submit" value="Cadastrar"
			class="btnFinalizar">
	</form>
</body>
</html>