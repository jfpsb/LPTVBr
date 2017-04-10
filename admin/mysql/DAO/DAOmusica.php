<?php
include_once '/../conexao.php';
include_once 'DAOletra.php';
class DAOMusica {
	private $objConexao;
	function __construct() {
		$this->objConexao = new conexaoMySql ();
	}
	function insertMusica($musica, $letra) {
		$conn = $this->objConexao->abreConexao ();
		$objLetra = new DAOletra ( true );
		
		$resultadoLetra = $objLetra->insertLetra ( $letra, $conn );
		
		if ($resultadoLetra !== null) {
			
			$sql = "INSERT INTO musica (fk_letra, titulo, videoid, disabled) VALUES ('$resultadoLetra', $musica->titulo', '$musica->videoid', $musica->disabled)";
			
			$result = $conn->query ( $sql );
			
			$conn->close ();
			
			return $result;
		}
		
		return "ERRO AO INSERIR ARQUIVOS DE LETRA";
	}
	function selectTodasMusicas() {
		$conn = $this->objConexao->abreConexao ();
		
		$sql = "SELECT * FROM musica ORDER BY titulo";
		
		$result = $conn->query ( $sql );
		
		$conn->close ();
		
		if ($result->num_rows > 0) {
			return $result;
		}
		
		return null;
	}
}

?>