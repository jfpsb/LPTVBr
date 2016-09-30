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
	public function listaAlbuns(array $releaseArray, $invertido, $tamanhoThumb, $tipo) {
		if ($invertido)
			$releaseArray = array_reverse ( $releaseArray, true );
		
		foreach ( $releaseArray as $url => $release ) {
			$caminho = $url;
			$titulo = $release ['album'];
			$imagem = $release ['thumbnail'] [$tamanhoThumb];
			
			echo "<div class=\"panel\">";
			echo "<a href=\"$tipo/$caminho/\" class=\"link\">";
			echo "<img class=\"linkImg\" src=\"$imagem\" alt=\"$titulo\" />";
			echo "<label class=\"nomeLink\">$titulo</label></a></div>";
		}
	}
	/**
	 * Lista as músicas dos álbuns para a tela de álbum, colocando o botão "Tradução" ao lado.
	 *
	 * @param unknown $albumSelecionado
	 *        	Álbum selecionado na página.
	 */
	public function listaMusicas($albumSelecionado) {
		$numero = 1;
		foreach ( $albumSelecionado as $url => $musica ) {
			if (isset ( $musica ['title'] )) {
				$title = $musica ['title'];
				echo "<tr>";
				echo "<td>$numero.</td>";
				echo "<td>$title</td>";
				echo "<td id=\"button-td\"><a class=\"trad-button\" href=\"$url/\">Tradução</a></td>";
				echo "</tr>";
				
				$numero ++;
			}
		}
	}
	public function listaMusicasAlbumAside($albumSelecionado, $tipo, $urlAlbum) {
		$numero = 1;
		foreach ( $albumSelecionado as $url => $musica ) {
			if (isset ( $musica ['title'] )) {
				$title = $musica ['title'];
				echo "<li class=\"traducao-li\">";
				echo "<a class=\"album-text\" href=\"/musica/$tipo/$urlAlbum/$url/\">$numero. $title</a>";
				echo "</li>";
				$numero ++;
			}
		}
	}
}

?>