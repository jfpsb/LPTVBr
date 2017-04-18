<?php
include_once '../../mysql/DAO/DAOTipoVideo.php';
include_once '../../mysql/conexao.php';

$objConexao = new conexaoMySql();

$conn = $objConexao->abreConexao();

$objTipoVideo = new DAOTipoVideo($conn);

$arrayTipoVideo= $objTipoVideo->selectTipoVideo();

$option = "<option value='0'>Selecione o tipo</option>";

if($arrayTipoVideo!== null) {
	while($row = $arrayTipoVideo->fetch_assoc()) {
		$option .= "<option value='" . $row['idtipo_video']. "|" . $row['nome']. "'>" . $row['nome'] . "</option>";
	}
}

$conn->close();

echo $option;

?>