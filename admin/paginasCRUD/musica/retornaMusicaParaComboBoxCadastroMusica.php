<?php
include_once '../../mysql/manager/MusicaManager.php';

$objMusicaManager = new MusicaManager();

$arrayUsuario = $objMusicaManager->selectMusicaManager();

$option = "<option value='0'>Selecione a música</option>";

if($arrayUsuario !== null) {
	while($row = $arrayUsuario->fetch_assoc()) {
		$option .= "<option value='" . $row['fk_letra'] . "'>" . $row['titulo'] . "</option>";
	}
}

echo $option;

?>