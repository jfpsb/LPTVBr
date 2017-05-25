<?php
include_once '/../conexao.php';
class DAO {
	private $conn;
	function __construct($conn) {
		$this->conn = $conn;
	}
	
	function insert($stringSql) {		
		$result = $this->conn->query ( $stringSql );
		
		if ($result === TRUE) {
			return $this->conn->insert_id;
		}
		
		return false;
	}
	
	function multipleInsert($stringSql) {
		$result = $this->conn->multi_query( $stringSql );
		
		return $result;
	}
}