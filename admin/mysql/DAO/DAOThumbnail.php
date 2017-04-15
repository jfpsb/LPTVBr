<?php
	include_once '/../conexao.php';
	
	class DAOThumbnail {
		private $conn;
		
		function __construct($conn) {
			$this->conn = $conn;
		}
		
		function insertThumb($thumbnail) {
			$resultArray = [];
			
			$sql = "INSERT INTO thumbnail (large, medium, small) VALUES ('$thumbnail->large', '$thumbnail->medium', '$thumbnail->small')";
			
			$result = $this->conn->query ( $sql );
			
			$resultArray['result'] = $result;
			
			if($result === TRUE) {
				$resultArray['insert_id'] = $this->conn->insert_id;
			} else {
				$resultArray['error'] = $this->conn->error;
			}
			
			return $resultArray;
		}
	}
?>