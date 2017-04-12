<?php
include_once '/../conexao.php';
include_once 'DAOletra.php';
include_once '../../arquivo/gerenciaArquivo.php';

class DAOMusica {
	private $objConexao;
	function __construct() {
		$this->objConexao = new conexaoMySql ();
	}
	function insertMusica($musica, $letra, $arquivos) {
		$conn = $this->objConexao->abreConexao ();
		$objDaoLetra = new DAOletra ( true );
		$objGerenciaArquivo = new gerenciaArquivo();
		$resultLetraArray; // Array que recebe resultado do cadastro da letra em método separado
		$resultArray = [ ]; // Array que recebe resultado do cadastro da música
		
		if (isset ( $letra->idletra )) {
			$resultLetraArray ['result'] = true;
			$resultLetraArray ['insert_id'] = $letra->idletra;
		} else {
			$resultLetraArray = $objDaoLetra->insertLetraComConn ( $letra, $conn );
		}
		
		// Se a letra foi adicionada com sucesso
		if ($resultLetraArray ['result'] === true) {
			
			if(count($arquivos) > 0) {
 				$objGerenciaArquivo->enviarArquivo($arquivos['original'], $letra->original);
 				$objGerenciaArquivo->enviarArquivo($arquivos['traducao'], $letra->traducao);
			}
			
			$sql = "INSERT INTO musica (fk_letra, titulo, videoId, disabled) VALUES ('" . $resultLetraArray ['insert_id'] . "', \"$musica->titulo\", \"$musica->videoid\", $musica->disabled)";
			
			$result = $conn->query ( $sql );
			
			if ($result === TRUE) {
				$resultArray ['result'] = true; // Se a música foi cadastrado com sucesso
			} else {
				$resultArray ['result'] = false;
				$resultArray ['error'] = $conn->error;
			}
		} else {
			$resultArray ['result'] = false;
			$resultArray ['error'] = $resultLetraArray ['error']; // Se o erro foi no cadastro da letra
		}
		
		$conn->close ();
		
		return $resultArray;
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