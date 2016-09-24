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
	 */
	public function listaVideos(array $releaseArray, $invertido, $tamanhoThumb) {
		if ($invertido)
			$releaseArray = array_reverse ( $releaseArray, true );
		
		foreach ( $releaseArray as $url => $release ) {
			$caminho = $url;
			$titulo = $release ['title'];
			$imagem = $release ['thumbnail'] [$tamanhoThumb];
			$data = $release ['data'];
			
			$dia = $data ['dia'];
			$mes = $data ['mes'];
			$ano = $data ['ano'];
			
			echo "<div class=\"panel\">";
			echo "<a href=\"$caminho/\" class=\"link\">";
			include '../../template/postDataTemplate.php';
			echo "<img class=\"linkImg\" src=\"$imagem\" alt=\"$titulo\" />";
			echo "<label class=\"nomeLink\">$titulo</label></a></div>";
		}
	}
}

?>