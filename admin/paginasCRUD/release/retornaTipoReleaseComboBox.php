<?php
include_once '../../mysql/DAO/DAOTipoRelease.php';
include_once '../../mysql/conexao.php';

$objConexao = new conexaoMySql();

$conn = $objConexao->abreConexao();

$objTipoRelease = new DAOTipoRelease($conn);

$arrayTipoRelease= $objTipoRelease->selectTipoRelease();

$option = "<option value='0'>Selecione o tipo</option>";

if($arrayTipoRelease!== null) {
	while($row = $arrayTipoRelease->fetch_assoc()) {
		$option .= "<option value='" . $row['idtipo_release']. "|" . $row['nome']. "'>" . $row['nome'] . "</option>";
	}
}

$conn->close();

echo $option;

?>