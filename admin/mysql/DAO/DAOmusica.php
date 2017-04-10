<?php
include_once '/../conexao.php';
class DAOMusica {
	private $objConexao;
	
	function __construct() {
		$this->objConexao = new conexaoMySql ();
	}
	
	function insertMusica($musica) {
		$conn = $this->objConexao->abreConexao ();
		
		$sql = "INSERT INTO musica (titulo, videoid, disabled) VALUES ('$musica->titulo', '$musica->videoid', $musica->disabled)";
		
		$result = $conn->query ( $sql );
		
		$conn->close ();
		
		if ($result === TRUE) {
			return true;
		} else {
			return false;
		}
	}
	
	function selectTodasMusicas() {
		$conn = $this->objConexao->abreConexao ();
		
		$sql = "SELECT * FROM musica ORDER BY titulo";
		
		$result = $conn->query($sql);
		
		$conn->close();
		
		if($result->num_rows > 0) {
			return $result;
		}
		
		return null;
	}
}

?>