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
	public function listaVideos($releaseArray, $anoArray, $invertido, $tamanhoThumb) {
		date_default_timezone_set ( "America/Fortaleza" );
		
		$dataHoraAtual = date ( "Y-m-d H:i:s" );
		$videoListadoFlag = false;
		
		if (is_array ( $releaseArray )) {
			if ($invertido)
				$releaseArray = array_reverse ( $releaseArray, true );
			
			foreach ( $releaseArray as $url => $release ) {
				// Variáveis de data são usadas em postDataTemplate
				$dataPostado = new DateTime ( $release ['postado'] );
				
				// Se estiver no ambiente de desenvolvimento sempre irá mostrar o vídeo independente da hora programada
				if (@$_COOKIE ["LPTVBrCookie"] === "1124" && $_SERVER ['HTTP_HOST'] === "localhost" && $dataPostado->format("Y") < "2999")
					$dataPostado = new DateTime ( "1999-01-01 00:00:00" );
				
				if ($dataHoraAtual >= $dataPostado->format ( "Y-m-d H:i:s" )) {
					$caminho = $anoArray . DIRECTORY_SEPARATOR . $url;
					$titulo = $release ['title'];
					$imagem = $release ['thumbnail'] [$tamanhoThumb];
					
					$dataLancado = new DateTime ( $release ['lancado'] );
					
					echo "<div class=\"panel\">";
					echo "<a href=\"$caminho/\" class=\"link\">";
					include '../../template/postDataTemplate.php';
					echo "<img class=\"linkImg\" src=\"$imagem\" alt=\"$titulo\" />";
					echo "<label class=\"nomeLink\">$titulo</label></a></div>";
					
					$videoListadoFlag = true;
				}
			}
		}
		
		if (! $videoListadoFlag) {
			echo "<div align=\"center\" style=\"margin: 0 auto;\">";
			echo "<h2 style=\"font-family: 'Trebuchet MS', Helvetica, sans-serif; color: black;\">";
			echo "Os vídeos desta seção ainda não estão disponíveis!<br>Volte em breve.";
			echo "</h2></div>"; // Fechando tags
		}
	}
}

?>