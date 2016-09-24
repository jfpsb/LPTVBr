<?php
class listagemMusicas {
	/**
	 * Cria os painéis dos itens a serem listados.
	 *
	 * @param array $releaseArray
	 *        	Array contendo os itens.
	 * @param boolean $invertido
	 *        	True se deseja que o array seja lido em ordem reversa
	 * @param String $tamanhoThumb
	 *        	Tamanho da thumbnail desejado.
	 */
	public function listaAlbuns(array $releaseArray, $invertido, $tamanhoThumb) {
		if ($invertido)
			$releaseArray = array_reverse ( $releaseArray, true );
		
		foreach ( $releaseArray as $url => $release ) {
			$caminho = $url;
			$titulo = $release ['album'];
			$imagem = $release ['thumbnail'] [$tamanhoThumb];
			$tipo = $release['tipo'];
			
			echo "<div class=\"panel\">";
			echo "<a href=\"$tipo/$caminho/\" class=\"link\">";
			echo "<img class=\"linkImg\" src=\"$imagem\" alt=\"$titulo\" />";
			echo "<label class=\"nomeLink\">$titulo</label></a></div>";
		}
	}
}

?>