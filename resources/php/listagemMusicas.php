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
		
		foreach ( $releaseArray as $url => $itemRelease ) {
			$caminho = $url;
			$titulo = $itemRelease ['album'];
			$imagem = $itemRelease ['thumbnail'] [$tamanhoThumb];
			
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
		foreach ( $albumSelecionado as $url => $itemMusica ) {
			if (isset ( $itemMusica ['title'] ) && (is_array ( $itemMusica ))) {
				$title = $itemMusica ['title'];
				$class = "trad-button";
				$href = "href=\"$url/\"";
				$tooltip = "Tradução de $title";
				
				if(isset($itemMusica['disabled']) && $itemMusica['disabled'] === "true") {
					$class = $class." disabled";
					$href = "";
					$tooltip = "Não há nada sobre essa música ainda.";
				}
				
				echo "<tr>";
				echo "<td>$numero.</td>";
				echo "<td>$title</td>";
				echo "<td id=\"button-td\"><a class=\"$class\" $href title=\"$tooltip\">Tradução</a></td>";
				echo "</tr>";
				
				$numero ++;
			}
		}
	}
	public function listaMusicasAlbumAside($albumSelecionado, $tipo, $urlAlbum) {
		$numero = 1;
		foreach ( $albumSelecionado as $url => $itemMusica ) {
			if (isset ( $itemMusica ['title'] ) && (is_array ( $itemMusica ))) {
				$title = $itemMusica ['title'];
				$class = "album-text";
				$href = "href=\"/musica/$tipo/$urlAlbum/$url/\"";
				$tooltip = "Tradução de $title";
				
				if(isset($itemMusica['disabled']) && $itemMusica['disabled'] === "true") {
					$class = $class." disabled";
					$href = "";
					$tooltip = "Não há nada sobre essa música ainda.";
				}
				
				echo "<li class=\"traducao-li\">";
				echo "<a class=\"$class\" $href title=\"$tooltip\">$numero. $title</a>";
				echo "</li>";
				$numero ++;
			}
		}
	}
}

?>