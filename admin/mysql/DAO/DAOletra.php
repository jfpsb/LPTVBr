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
	
	function insertLetraComConn($letra, $conn) {
		$resultArray = [];
		
		$sql = "INSERT INTO letra (original, traducao) VALUES ('$letra->original', '$letra->traducao')";
		
		$result = $conn->query ( $sql );
		
		if($result === TRUE) {
			$resultArray['result'] = true;
			$resultArray['insert_id'] = $conn->insert_id;
		} else {
			$resultArray['result'] = false;
			$resultArray['error'] = $conn->error;
		}
		
		return $resultArray;
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
	
	function deletarLetra($id, $conn) {
		$sql = "DELETE FROM letra WHERE idletra=$id";
		
		$conn->query($sql);
	}
}

?>