<?php
include_once '/../conexao.php';
class DAOMusicaRelease {
	private $conn;
	function __construct($conn) {
		$this->conn = $conn;
	}
	
	//Insere vários de uma vez
	function inserirMusicaRelease($escolhasMusicas, $id_release) {
		$resultArray = [];
		$sql = "";
		
		foreach ($escolhasMusicas as $musica) {
			$musica->fk_release = $id_release;
			$sql .= "INSERT INTO release_musica (numero, fk_release, fk_musica) VALUES ('$musica->numero','$musica->fk_release','$musica->fk_musica');";
		}
		
		$result = $this->conn->multi_query($sql);
		
		$resultArray['result'] = $result;
		
		if(! $result) {
			$resultArray['error'] = $this->conn->error;
			return $resultArray;
		}
		
		return true;
	}
}
?>