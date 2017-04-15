<?php
include_once '/../conexao.php';
class DAOTipoRelease {
	private $conn;
	function __construct($conn) {
		$this->conn = $conn;
	}
	function insertTipoRelease($tipo_release) {
		$resultArray = [ ];
		
		$sql = "INSERT INTO tipo_release (nome) VALUES ($tipo_release->nome)";
		
		$result = $this->conn->query ( $sql );
		
		$resultArray ['result'] = $result;
		
		if ($result) {			
			$resultArray ['insert_id'] = $this->conn->insert_id;
		} else {
			$resultArray ['error'] = $this->conn->error;
		}
		
		return $resultArray;
	}
	function selectTipoRelease() {
		$sql = "SELECT * FROM tipo_release";
		
		$result = $this->conn->query ( $sql );
		
		if ($result->num_rows > 0) {
			return $result;
		}
		
		return null;
	}
}
?>