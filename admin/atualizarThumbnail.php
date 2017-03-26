<?php
$tamanho = $_GET ['tamanho'];
$caminho = $_GET ['caminho'];
$nome = $_GET ['nome'];
?>

<html>
<head>
<title>Visualizar e Editar Thumbnail</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
	<img alt="Thumbnail <?php echo $tamanho; ?>"
		src="<?php echo $caminho;?>"
		title="Thumbnail <?php echo $tamanho . " de " . $nome?>">

	<form>
		<label>Altere a thumbnail apertando no botão a seguir. Tenha em mente
			que essa mudança afeta todos os tamanhos da imagem.</label> <br> <input
			type="file"> <input type="submit" value="Alterar Thumbnail">
	</form>
</body>