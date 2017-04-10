<?php
include_once '/../conexao.php';

class DAOletra {
	private $objConexao;
	
	function __construct($jaPossuiConexao) {
		if(!$jaPossuiConexao)
			$this->objConexao = new conexaoMySql ();
	}
	
	function insertLetra($letra) {
		$conn = $this->objConexao->abreConexao ();
		
		$sql = "INSERT INTO letra (original, traducao) VALUES ('$letra->original', '$letra->traducao')";
		
		$result = $conn->query ( $sql );
		
		$conn->close ();
		
		if($result === TRUE) {
			return $conn->insert_id;
		}
		
		return "ERRO AO INSERIR LETRA -- " . $conn->error;
	}
	
	function insertLetra($letra, $conn) {		
		$sql = "INSERT INTO letra (original, traducao) VALUES ('$letra->original', '$letra->traducao')";
		
		$result = $conn->query ( $sql );
		
		if($result === TRUE) {
			return $conn->insert_id;
		}
		
		return "ERRO AO INSERIR LETRA -- " . $conn->error;
	}
	
	function selectTodasLetras() {
		$conn = $this->objConexao->abreConexao ();
		
		$sql = "SELECT * FROM letra";
		
		$result = $conn->query($sql);
		
		$conn->close();
		
		if($result->num_rows > 0) {
			
		}
		
		return null;
	}
}

?>