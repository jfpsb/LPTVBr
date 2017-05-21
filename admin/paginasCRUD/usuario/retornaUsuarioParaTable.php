<?php
include_once '../../mysql/manager/UsuarioManager.php';

$objUsuarioManager = new UsuarioManager();

$arrayUsuario = $objUsuarioManager->selectUsuarioManager();

if($arrayUsuario !== null) {
	$conteudoTable = "<tr><th>ID</th><th>Tipo Usuário</th><th>Login</th><th>Nome</th><th>Opções</th></tr>";
	
	while ( $row = $arrayUsuario->fetch_assoc () ) {
		$conteudoTable .= "<tr>";
		$conteudoTable .= "<td>" . $row['idusuario'] . "</td>";
		$conteudoTable .= "<td>" . $row['tiponome'] . "</td>";
		$conteudoTable .= "<td>" . $row['login'] . "</td>";
		$conteudoTable .= "<td>" . $row['nome'] . "</td>";
		$conteudoTable .= "<td>" . "<a href=\"#\" title=\"Aperte para atualizar os dados deste item\">Atualizar</a><br><a href=\"#\" title=\"Aperte para remover este item\">Remover</a>" . "</td>";
	}
	
	echo $conteudoTable;
} else {
	echo "<tr><th>Não há conteúdo a ser mostrado</th></tr>";
}

?>