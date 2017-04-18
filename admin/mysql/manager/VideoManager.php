<?php
include_once '../../mysql/conexao.php';
include_once '../../mysql/DAO/DAOVideo.php';
include_once '../../mysql/DAO/DAOThumbnail.php';
include_once '../../../resources/php/smart_resize_image.function.php';

class VideoManager {
	private $objConexao;
	function __construct() {
		$this->objConexao = new conexaoMySql ();
	}
	function inserirVideoManager($video, $thumbnail, $arquivo) {
		$conn = $this->objConexao->abreConexao ();
		
		$objDaoVideo = new DAOVideo ( $conn );
		$objDaoThumbnail = new DAOThumbnail ( $conn );
		
		$resultArray = [ ];
		$resultadoThumbArray = [ ]; // Recebe resultado de inserts
		
		$resultadoThumbArray = $objDaoThumbnail->insertThumb ( $thumbnail );
		
		if ($resultadoThumbArray ['result'] === true) {
			smart_resize_image($arquivo['tmp_name'], null, 1000, 1000, true, $_SERVER ['DOCUMENT_ROOT'] . $thumbnail->large, false, false, 100);
			smart_resize_image($arquivo['tmp_name'], null, 500, 500, true, $_SERVER ['DOCUMENT_ROOT'] . $thumbnail->medium, false, false, 100);
			smart_resize_image($arquivo['tmp_name'], null, 250, 250, true, $_SERVER ['DOCUMENT_ROOT'] . $thumbnail->small, false, false, 100);
			
			$video->fk_thumbnail = $resultadoThumbArray ['insert_id'];
			
			$resultArray = $objDaoVideo->insertVideo( $video );
			
			$conn->close ();
			
			if ($resultArray ['result'] === false) {
				return $resultArray;
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