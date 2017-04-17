<?php
include_once '/../conexao.php';
class DAOLetra {
	private $conn;
	function __construct($conn) {
		$this->conn = $conn;
	}
	function insertLetra($letra) {
		$resultadoArray = [ ];
		
		$sql = "INSERT INTO letra (original, traducao) VALUES ('$letra->original', '$letra->traducao')";
		
		$result = $this->conn->query ( $sql );
		
		$resultadoArray ['result'] = $result;
		
		if ($result === TRUE) {
			$resultadoArray ['insert_id'] = $this->conn->insert_id;
		} else {
			$resultadoArray ['error'] = $this->conn->error;
		}
		
		return $resultadoArray;
	}
	function selectTodasLetras() {
		$sql = "SELECT * FROM letra";
		
		$result = $conn->query ( $sql );
		
		if ($result->num_rows > 0) {
		}
		
		return null;
	}
	function deletarLetra($id) {
		$sql = "DELETE FROM letra WHERE idletra=$id";
		
		$this->conn->query ( $sql );
	}
}

?>