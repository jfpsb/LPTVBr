<?php
class LoopArrayClass {
	public function loopArray($array, $chave, $videoSelecionado) {
		if (is_array ( $array )) {
			foreach ( $array as $url => $elemento ) {
				
				if ($url === $chave)
					$videoSelecionado = $elemento;
				
				$this->loopArray ( $elemento, $chave, $videoSelecionado );
			}
		}
	}
}
?>