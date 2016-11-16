<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" href="/resources/css/administracao/releasePage.css">
</head>
<body>
	<h1>CADASTRO DE RELEASE</h1>
	<form action="<?php $_SERVER['PHP_SELF']?>" class="formulario">
		<label for="urlfield">Digite o URL que será usada para esse release: </label>
		<input required type="text" name="urlfield">
		<br>
		<label>Escolha o tipo do release: </label>
		<select required>
			<option value="op1">Opcao 1</option>
			<option value="op2">Opcao 2</option>
			<option value="op3">Opcao 3</option>
			<option value="op4">Opcao 4</option>
		</select> <br>
		<label>Escreva o nome do release: </label>
		<input type="text" name="releasename" required>
		<br>
		<label>Informe a data do lançamento: </label>
		<input type="datetime-local" name="releaselancamento" required>
		<br>
		<label>Informe a duração (em segundos):</label>
		<input type="text" name="releaseduracao" required>
		<br>
		<label>Informe a quantidade de músicas presentes no release: </label>
		<input type="text" name="releasequant" required>
		<br>
		<label>Informe a gravadora, se souber: </label>
		<input type="text" name="releasegravadora" required>
		<br>
		<label>Informe as informações de copyright, se possuir: </label>
		<input type="text" name="releasecopyright" required>
		<br> <br>
		<input name="submit" type="submit" value="Cadastrar" class="btnFinalizar" required>
	</form>
</body>
</html>