<?php
include_once '../../mysql/DAO/DAOmusica.php';

$objMusica = new DAOMusica ();

$arrayMusica = $objMusica->selectTodasMusicas ();

$option = "<option value='0'>Selecione a música</option>";

if($arrayMusica !== null) {
	while($row = $arrayMusica->fetch_assoc()) {
		$option .= "<option value='" . $row['idmusica'] . "'>" . $row['titulo'] . "</option>";
	}
}

echo $option;

?>