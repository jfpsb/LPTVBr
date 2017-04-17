<?php
class DAOMusica {
	private $conn;
	function __construct($conn) {
		$this->conn = $conn;
	}
	function insertMusica($musica) {
		$resultArray = [ ];
		
		$sql = "INSERT INTO musica (fk_letra, titulo, videoId, disabled) VALUES ('$musica->fkletra', '$musica->titulo', '$musica->videoid', $musica->disabled)";
		
		$result = $this->conn->query ( $sql );
		
		$resultArray ['result'] = $result;
		
		if (! $result) {
			$resultArray ['error'] = $this->conn->error;
		}
		
		return $resultArray;
	}
	function selectTodasMusicas() {
		$sql = "SELECT * FROM musica ORDER BY titulo";
		
		$result = $this->conn->query ( $sql );
		
		if ($result->num_rows > 0) {
			return $result;
		}
		
		return null;
	}
}

?>