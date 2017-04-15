<?php
include_once '/../conexao.php';
include_once '../../../resources/php/smart_resize_image.function.php';
class DAORelease {
	private $conn;
	function __construct($conn) {
		$this->conn = $conn;
	}
	function insertRelease($release) {
		$resultArray = [ ];
		
		$sql = "INSERT INTO releases (fk_thumbnail, fk_tipo_release, caminho, nome, lancamento, duracao, gravadora, copyright) VALUES ('$release->fk_thumbnail', '$release->fk_tipo_release','$release->caminho','$release->nome','$release->lancamento','$release->duracao','$release->gravadora','$release->copyright')";
		
		$result = $this->conn->query ( $sql );
		
		$resultArray ['result'] = $result;
		
		if ($result === false) {
			$resultArray ['error'] = $this->conn->error;
		}
		
		return $resultArray;
	}
}
?>