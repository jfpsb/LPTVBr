<?php
class gerenciaArquivo {
	function enviarArquivo($arquivo, $destino) {
		if ($arquivo ['name']) {
			// if no errors...
			if (! $arquivo ['error']) {
				// now is the time to modify the future file name and validate the file
				$new_file_name = strtolower ( $arquivo ['tmp_name'] ); // rename file
				
				move_uploaded_file ( $arquivo ['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . $destino );
			} else {
				// set that to be the returned message
				echo $message = 'Ooops!  Your upload triggered the following error:  ' . $arquivo ['error'];
			}
		}
	}
}
?>