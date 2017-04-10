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
			release: </label> <input type="text" name="urlfield"> <br> <label>Escolha
			o tipo do release: </label> <select>
			<option value="op1">Opcao 1</option>
			<option value="op2">Opcao 2</option>
			<option value="op3">Opcao 3</option>
			<option value="op4">Opcao 4</option>
		</select> <br> <label>Escreva o nome do release: </label> <input
			type="text" name="releasename"> <br> <label>Informe a data do
			lançamento: </label> <input type="datetime-local"
			name="releaselancamento"> <br> <label>Informe a duração (em
			segundos):</label> <input type="text" name="releaseduracao"><br> <label>Informe
			a gravadora, se souber: </label> <input type="text"
			name="releasegravadora"> <br> <label>Informe as informações de
			copyright, se possuir: </label> <input type="text"
			name="releasecopyright"> <br>

		<fieldset>
			<legend>Thumbnail:</legend>
			<label>Informe a imagem: </label> <input type="file"
				name="releaseThumbUpload" accept="image/*"> <br> <br>
			<!-- Para usar input file $_FILES['releaseThumbUpload']['tmp_name'] -->
		</fieldset>

		<fieldset id="grupoMusicasId" class="grupoMusicas">
			<legend>Músicas:</legend>
			<div class="musicasWrapper">
				<div class="selectWrapper">
					<label class="musIndex">1. </label> <select id="musica_1"
						class="comboboxMusica">
						<option value="0">Selecione a Música</option>
					</select>
				</div>
			</div>
			<br> <a href="#grupoMusicasId" class="link_atualizar"
				onclick="getOpcoes()">Atualizar Lista</a> <a href="#grupoMusicasId"
				class="add_combobox">Adicionar Outra Música</a>
		</fieldset>

		<input name="submit" type="submit" value="Cadastrar"
			class="btnFinalizar">
	</form>
</body>
</html>