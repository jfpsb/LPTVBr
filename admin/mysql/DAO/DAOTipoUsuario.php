<?php
include_once '/../conexao.php';
class DAOTIpoUsuario {
	private $conn;
	function __construct($conn) {
		$this->conn = $conn;
	}
	
	function insertTipoUsuario($tipousuario) {
		$resultadoArray = [ ];
		
		$sql = "INSERT INTO tipo_usuario (idtipo_usuario, nome) VALUES ('$tipousuario->idtipousuario', '$tipousuario->nome')";
		
		$result = $this->conn->query ( $sql );
		
		$resultadoArray ['result'] = $result;
		
		if ($result === TRUE) {
			$resultadoArray ['insert_id'] = $this->conn->insert_id;
		} else {
			$resultadoArray ['error'] = $this->conn->error;
		}
		
		return $resultadoArray;
	}
	function selectTodosTipoUsuario() {
		$sql = "SELECT * FROM tipo_usuario";
		
		$result = $conn->query ( $sql );
		
		if ($result->num_rows > 0) {
		}
		
		return null;
	}
	function deletarTipoUsuario($id) {
		$sql = "DELETE FROM tipo_usuario WHERE idtipo_usuario=$id";
		
		$this->conn->query ( $sql );
	}
}
?>