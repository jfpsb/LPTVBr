<?php
include_once '../../mysql/manager/MusicaManager.php';

$objMusicaManager = new MusicaManager();

$arrayMusica = $objMusicaManager->selectMusicaManager();

if($arrayMusica !== null) {
	$conteudoTable = "<tr><th>ID</th><th>Título</th><th>VídeoID</th><th>Disabled</th><th>Opções</th></tr>";
	
	while ( $row = $arrayMusica->fetch_assoc () ) {
		$conteudoTable .= "<tr>";
		$conteudoTable .= "<td>" . $row['idmusica'] . "</td>";
		$conteudoTable .= "<td>" . $row['titulo'] . "</td>";
		$conteudoTable .= "<td>" . $row['videoId'] . "</td>";
		$conteudoTable .= "<td>" . ($row['disabled'] ? "Sim" : "Não") . "</td>";
		$conteudoTable .= "<td>" . "<a href=\"#\" title=\"Aperte para atualizar os dados deste item\">Atualizar</a><br><a href=\"#\" title=\"Aperte para remover este item\">Remover</a>" . "</td>";
	}
	
	echo $conteudoTable;
} else {
	echo "<tr><th>Não há conteúdo a ser mostrado</th></tr>";
}

?>