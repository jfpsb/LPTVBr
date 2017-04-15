<?php
include_once '../../mysql/conexao.php';
include_once '../../mysql/DAO/DAORelease.php';
include_once '../../mysql/DAO/DAOThumbnail.php';
include_once '../../mysql/DAO/DAOTipoRelease.php';
class ReleaseManager {
	private $objConexao;
	function __construct() {
		$this->objConexao = new conexaoMySql ();
	}
	function inserirReleaseManager($release, $thumbnail) {
		$conn = $this->objConexao->abreConexao ();
		
		$objDaoTipoRelease = new DAOTipoRelease ( $conn );
		$objDaoThumbnail = new DAOThumbnail ( $conn );
		$objDaoRelease = new DAORelease ( $conn );
		
		$resultArray = [ ];
		$resultadoInsertArray = [ ]; // Recebe resultado de inserts
		
		$resultadoInsertArray = $objDaoThumbnail->insertThumb ( $thumbnail );
		
		if ($resultadoInsertArray ['result'] === true) {
			// TODO: METODO PARA ENVIAR ARQUIVOS DE THUMB
			
			$release->fk_thumbnail = $resultadoInsertArray ['insert_id'];
			
			$resultadoInsertArray = $objDaoRelease->insertRelease ( $release );
			
			$conn->close();
			
			$resultArray ['result'] = $resultadoInsertArray ['result'];
			
			if ($resultadoInsertArray ['result'] === false) {
				$resultArray ['error'] = $resultadoInsertArray ['error'];
				
				return $resultArray;
			}
		} else {
			$conn->close();
			
			$resultArray ['result'] = false;
			$resultArray ['error'] = $resultadoInsertArray ['error'];
			
			return $resultArray;
		}
		
		return true;
	}
}
?>