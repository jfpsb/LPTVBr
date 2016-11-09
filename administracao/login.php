<?php
// Destrói se a sessão se estiver aberta.
if (session_status () === PHP_SESSION_ACTIVE)
	session_destroy ();
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Login - LPTVBr</title>
</head>
<body>
	<div align="center">
		<form action="admin.php" method="post">
			<label for="login">Login:</label><br> <input type="text" name="login"
				required><br> <label for="senha">Senha:</label><br> <input
				type="password" name="senha" required> <br> <input type="submit"
				value="Entrar" name="submit">
		</form>
	</div>
</body>
</html>