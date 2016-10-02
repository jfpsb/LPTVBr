<div class="postData">
	<p class="dataTexto">
		<?php
		$dataLancadoString = $dataLancado->format ( "d/m/Y" );
		$dataPostadoString = $dataPostado->format ( "d/m/Y" );
		echo "Lançado: " . $dataLancadoString . "<br>";
		echo "Postado Trad.: " . $dataPostadoString;
		?>
	</p>
</div>