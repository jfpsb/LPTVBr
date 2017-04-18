<?php 
	include_once '../../mysql/manager/VideoManager.php';
	include_once '../../mysql/entidade/tipo_video.php';
	include_once '../../mysql/entidade/video.php';
	include_once '../../mysql/entidade/thumbnail.php';
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

	if(isset($_POST['submit'])) {
		$objVideo = new video();
		$objThumbnail = new thumbnail();
		$objVideoManager = new VideoManager();
		
		// Separa ID de video de nome (Value em combobox é no formato "ID|NOME")
		$tipoVideoArray = explode ( "|", $_POST ['tipoVideo'] );
		$postadoArray = explode("T", $_POST['postado']);
		$lancamentoArray = explode("T", $_POST['lancamento']);
		
		$objVideo->fk_tipo_video = $tipoVideoArray[0];
		$objVideo->nome = $_POST['nome'];
		$objVideo->caminho = removeAcentos($_POST ['caminho']);
		$objVideo->postado = $postadoArray[0] . " " . $postadoArray[1] . ":00";
		$objVideo->lancamento = $lancamentoArray[0] . " " . $lancamentoArray[1] . ":00";
		$objVideo->duracao = $_POST['duracao'];
		$objVideo->corpo = $_POST['corpo'];
		
		// Constroi diretório onde ficará thumbnail de video
		$caminhoDestino = "/resources/imagens/videos/" . removeAcentos ( $tipoVideoArray[1] ) . "/$objVideo->caminho/";
		
		// Cria diretório se não existir
		if(! is_dir($caminhoDestino))
			mkdir($_SERVER ['DOCUMENT_ROOT'] . $caminhoDestino);
		
		$objThumbnail->large = $caminhoDestino . $objVideo->caminho. "-large." . pathinfo ( $_FILES ['thumbnail'] ['name'], PATHINFO_EXTENSION );
		$objThumbnail->medium = $caminhoDestino . $objVideo->caminho. "-medium." . pathinfo ( $_FILES ['thumbnail'] ['name'], PATHINFO_EXTENSION );
		$objThumbnail->small = $caminhoDestino . $objVideo->caminho. "-small." . pathinfo ( $_FILES ['thumbnail'] ['name'], PATHINFO_EXTENSION );
		
		$result = $objVideoManager->inserirVideoManager ( $objVideo, $objThumbnail, $_FILES ['thumbnail'] );
		
		$getinfo = "?titulo=$objVideo->nome";
		
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
<title>Cadastro de Vídeo</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" href="/resources/css/admin/telaCadastrar.css">
<script type="text/javascript"
	src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.7.1.min.js"></script>
<script type="text/javascript"
	src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
<script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=dha8k71hx43wtpt4k4xftdq4apxpwtd3vyh00o7k40d2ggfg"></script>
<script>tinymce.init({ selector:'textarea' });</script>
<script type="text/javascript"
	src="/resources/js/admin/videoCadastrar.js"></script>
</head>
<body>
	<h1>CADASTRO DE VÍDEO</h1>
	<form action="<?php $_SERVER['PHP_SELF']?>" class="formulario" method="post" enctype="multipart/form-data">
		<label>Caminho do vídeo: </label>
		<input type="text" name="caminho"><br>
		<label>Nome do vídeo: </label>
		<input type="text" name="nome"><br>
		<label>Selecione o tipo de vídeo: </label>
		<select id="tipoVideo" name="tipoVideo" class="comboBox"></select><br>
		<label>Data e hora de postagem: </label>
		<input type="datetime-local" name="postado"><br>
		<label>Data e hora de lançamento do vídeo original: </label>
		<input type="datetime-local" name="lancamento"><br>
		<label>Duração em segundos do vídeo: </label>
		<input type="text" name="duracao"><br>
		
		<fieldset>
			<legend>Thumbnail:</legend>
			<label>Informe a imagem: </label> <input type="file" name="thumbnail"
				accept="image/*"> <br> <br>
		</fieldset><br>
		
		<label>Digite o corpo do texto deste vídeo: </label>
		<textarea name="corpo"></textarea><br>
		<input type="submit" name="submit" value="Cadastrar"
			class="btnFinalizar">
	</form>
</body>
</html>