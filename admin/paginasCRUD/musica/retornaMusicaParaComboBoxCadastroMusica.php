<?php
include_once '../../mysql/manager/MusicaManager.php';

$objMusicaManager = new MusicaManager();

$arrayMusica = $objMusicaManager->selectMusicaManager();

$option = "<option value='0'>Selecione a música</option>";

if($arrayMusica !== null) {
	while($row = $arrayMusica->fetch_assoc()) {
		$option .= "<option value='" . $row['fk_letra'] . "'>" . $row['titulo'] . "</option>";
	}
}

echo $option;

?>