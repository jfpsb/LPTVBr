<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Administração - LPTVBr</title>
</head>
<body>
<?php
$login = $_POST['login'];
$senha = $_POST['senha'];
// Vai checar se usuário informado existe
if (isset ( $_POST ['submit'] ) && $login === "admin") {
	if($senha === "12345") {		
		include_once 'acessoConcedido.php';
	}
	else {
		include_once 'wrongPassword.html';
	}
}
else {
	include_once 'accessDenied.html';
}
?>
</body>
</html>