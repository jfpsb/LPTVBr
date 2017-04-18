<?php
include_once '/../conexao.php';
class DAOTipoVideo {
	private $conn;
	function __construct($conn) {
		$this->conn = $conn;
	}
	function insertTipoVideo($tipo_video) {
		$resultArray = [ ];
		
		$sql = "INSERT INTO tipo_video (fk_thumbnail, nome) VALUES ($tipo_release->fk_thumbnail, $tipo_release->nome)";
		
		$result = $this->conn->query ( $sql );
		
		$resultArray ['result'] = $result;
		
		if ($result) {
			$resultArray ['insert_id'] = $this->conn->insert_id;
		} else {
			$resultArray ['error'] = $this->conn->error;
		}
		
		return $resultArray;
	}
	function selectTipoVideo() {
		$sql = "SELECT * FROM tipo_video";
		
		$result = $this->conn->query ( $sql );
		
		if ($result->num_rows > 0) {
			return $result;
		}
		
		return null;
	}
}
?>