<?php
class CarregaIframe {
	public function carregaVideoIframe($imgList, $embedSrc, $videoId, $descricao) {
		if (isset ( $imgList )) {
			echo "<div class=\"galleria\">$imgList</div>";
			echo "<h5 class=\"powered-by\">";
			echo "Powered By <a class=\"video-link\" target=\"_blank\" href=\"http://galleria.io/\">Galleria</a>";
			echo "</h5>";
			echo "<script>";
			echo "Galleria.loadTheme('/resources/galleria/themes/classic/galleria.classic.min.js');";
			echo "Galleria.run('.galleria');";
			echo "</script>";
		} else {
			echo "<div class=\"video-container\">";
			echo "<iframe src=\"$embedSrc$videoId\" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>";
			echo "</div>";
		}
		
		echo "<article class=\"descricao\">";
		echo "<p class=\"descricao texto\">$descricao</p>";
		echo "</article>";
	}
}