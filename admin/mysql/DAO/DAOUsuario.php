<?php
include_once '/../conexao.php';
class DAOUsuario {
	private $conn;
	function __construct($conn) {
		$this->conn = $conn;
	}
	function insertUsuario($usuario) {
		$resultadoArray = [ ];
		
		$sql = "INSERT INTO usuario (fk_tipo_usuario, login, senha, nome) VALUES ('$usuario->tipousuario', '$usuario->login', '$usuario->nome', '$usuario->senha')";
		
		$result = $this->conn->query ( $sql );
		
		$resultadoArray ['result'] = $result;
		
		if ($result === TRUE) {
			$resultadoArray ['insert_id'] = $this->conn->insert_id;
		} else {
			$resultadoArray ['error'] = $this->conn->error;
		}
		
		return $resultadoArray;
	}
	function selectTodosUsuarios() {
		$sql = "SELECT usuario.idusuario as idusuario, tipo_usuario.nome as tiponome, usuario.login as login, usuario.nome as nome, login FROM usuario, tipo_usuario WHERE fk_tipo_usuario = idtipo_usuario";
		
		$result = $this->conn->query ( $sql );
		
		if ($result->num_rows > 0) {
			return $result;
		}
		
		return null;
	}
	function deletarUsuario($id) {
		$sql = "DELETE FROM usuario WHERE idusuario=$id";
		
		$this->conn->query ( $sql );
	}
}
?>