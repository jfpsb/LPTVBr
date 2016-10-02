<?php
class listagemVideos {
	/**
	 * Cria os painéis dos itens a serem listados.
	 *
	 * @param array $releaseArray
	 *        	Array contendo os itens.
	 * @param boolean $invertido
	 *        	True se deseja que o array seja lido em ordem reversa
	 * @param String $tamanhoThumb
	 *        	Tamanho da thumbnail desejado.
	 * @param boolean $lancado
	 *        	Se True, irá no mostrar "Lançado" no campo de data
	 */
	public function listaVideos(array $releaseArray, $anoArray, $invertido, $tamanhoThumb) {
		if ($invertido)
			$releaseArray = array_reverse ( $releaseArray, true );
		
		foreach ( $releaseArray as $url => $release ) {
			$caminho = $anoArray . DIRECTORY_SEPARATOR . $url;
			$titulo = $release ['title'];
			$imagem = $release ['thumbnail'] [$tamanhoThumb];
			// Variáveis de data são usadas em postDataTemplate
			$dataPostado = new DateTime ( $release ['postado'] );
			$dataLancado = new DateTime ( $release ['lancado'] );
			
			echo "<div class=\"panel\">";
			echo "<a href=\"$caminho/\" class=\"link\">";
			include '../../template/postDataTemplate.php';
			echo "<img class=\"linkImg\" src=\"$imagem\" alt=\"$titulo\" />";
			echo "<label class=\"nomeLink\">$titulo</label></a></div>";
		}
	}
}

?>