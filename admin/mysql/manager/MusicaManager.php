<?php
include_once '../../mysql/conexao.php';
include_once '../../mysql/DAO/DAOMusica.php';
include_once '../../mysql/DAO/DAOLetra.php';
include_once '../../arquivo/gerenciaArquivo.php';
class MusicaManager {
	private $objConexao;
	function __construct() {
		$this->objConexao = new conexaoMySql ();
	}
	function inserirMusicaManager($musica, $letra, $arquivos) {
		$conn = $this->objConexao->abreConexao ();
		
		$objDaoMusica = new DAOMusica ( $conn );
		$objDaoLetra = new DAOLetra ( $conn );
		$objArquivos = new gerenciaArquivo ();
		
		$resultadoArray = [ ];
		$resultadoArrayLetra = [ ];
		
		if(isset($letra->idletra)) {
			$resultadoArrayLetra ['result'] = true;
			$resultadoArrayLetra ['insert_id'] = $letra->idletra;
		}
		else {
			$resultadoArrayLetra = $objDaoLetra->insertLetra ( $letra );
		}
		
		if ($resultadoArrayLetra ['result'] === true) {
			if (count ( $arquivos ) === 2) {
				$objArquivos->enviarArquivo ( $arquivos ['original'], $letra->original );
				$objArquivos->enviarArquivo ( $arquivos ['original'], $letra->traducao );
			}
			
			$musica->fkletra = $resultadoArrayLetra ['insert_id'];
			
			$resultadoArray = $objDaoMusica->insertMusica ( $musica );
			
			$conn->close ();
			
			if ($resultadoArray ['result'] === false) {
				$objDaoLetra->deletarLetra($musica->fkletra);
				return $resultArray;
			}
		} else {
			$conn->close ();
			
			$resultadoArray ['result'] = false;
			$resultadoArray ['error'] = $resultadoArrayLetra ['error'];
			
			return $resultArray;
		}
		
		return true;
	}
	
	function selectMusicaManager() {
		$conn = $this->objConexao->abreConexao ();
		
		$objDaoMusica = new DAOMusica ( $conn );
		
		$result = $objDaoMusica->selectTodasMusicas();
		
		$conn->close();
		
		return $result;
	}
}

?>