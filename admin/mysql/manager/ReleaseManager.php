<?php
include_once '../../mysql/conexao.php';
include_once '../../mysql/DAO/DAORelease.php';
include_once '../../mysql/DAO/DAOThumbnail.php';
include_once '../../mysql/DAO/DAOTipoRelease.php';
include_once '../../mysql/DAO/DAOMusicaRelease.php';
include_once '../../../resources/php/smart_resize_image.function.php';

class ReleaseManager {
	private $objConexao;
	function __construct() {
		$this->objConexao = new conexaoMySql ();
	}
	function inserirReleaseManager($release, $thumbnail, $arquivo, $escolhasMusicas) {
		$conn = $this->objConexao->abreConexao ();
		
		$objDaoTipoRelease = new DAOTipoRelease ( $conn );
		$objDaoThumbnail = new DAOThumbnail ( $conn );
		$objDaoRelease = new DAORelease ( $conn );
		$objDaoMusicaRelease = new DAOMusicaRelease ( $conn );
		
		$resultArray = [ ];
		$resultadoThumbArray = [ ]; // Recebe resultado de inserts
		
		$resultadoThumbArray = $objDaoThumbnail->insertThumb ( $thumbnail );
		
		if ($resultadoThumbArray ['result'] === true) {			
			smart_resize_image($arquivo['tmp_name'], null, 1000, 1000, true, $_SERVER ['DOCUMENT_ROOT'] . $thumbnail->large, false, false, 100);
			smart_resize_image($arquivo['tmp_name'], null, 500, 500, true, $_SERVER ['DOCUMENT_ROOT'] . $thumbnail->medium, false, false, 100);
			smart_resize_image($arquivo['tmp_name'], null, 250, 250, true, $_SERVER ['DOCUMENT_ROOT'] . $thumbnail->small, false, false, 100);
			
			$release->fk_thumbnail = $resultadoThumbArray ['insert_id'];
			
			$resultArray = $objDaoRelease->insertRelease ( $release );
			
			if ($resultArray ['result'] === false) {
				return $resultArray;
			} else {
				$resultArray = $objDaoMusicaRelease->inserirMusicaRelease ( $escolhasMusicas, $resultArray ['insert_id'] );
				
				$conn->close ();
				
				if (is_array ( $resultArray )) {
					return $resultArray;
				}
			}
		} else {
			$conn->close ();
			
			$resultArray ['result'] = false;
			$resultArray ['error'] = $resultadoInsertArray ['error'];
			
			return $resultArray;
		}
		
		return true;
	}
}
?>