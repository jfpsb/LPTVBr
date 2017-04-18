<?php
include_once '/../conexao.php';
class DAOVideo {
	private $conn;
	function __construct($conn) {
		$this->conn = $conn;
	}
	function insertVideo($video) {
		$resultArray = [ ];
		
		$sql = "INSERT INTO video (fk_thumbnail, fk_tipo_video, nome, caminho, postado, lancamento, duracao, corpo) VALUES ($video->fk_thumbnail, $video->fk_tipo_video, '$video->nome', '$video->caminho', '$video->postado', '$video->lancamento', $video->duracao, '$video->corpo')";
		
		$result = $this->conn->query ( $sql );
		
		$resultArray ['result'] = $result;
		
		if ($result) {
			$resultArray ['insert_id'] = $this->conn->insert_id;
		} else {
			$resultArray ['error'] = $this->conn->error;
		}
		
		return $resultArray;
	}
	function selectVideo() {
		$sql = "SELECT * FROM video";
		
		$result = $this->conn->query ( $sql );
		
		if ($result->num_rows > 0) {
			return $result;
		}
		
		return null;
	}
}
?>