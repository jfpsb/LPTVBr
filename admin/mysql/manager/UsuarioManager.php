<?php
include_once '../../mysql/conexao.php';
include_once '../../mysql/DAO/DAOUsuario.php';
include_once '../../mysql/DAO/DAOTipoUsuario.php';
class UsuarioManager {
	private $objConexao;
	function __construct() {
		$this->objConexao = new conexaoMySql ();
	}
//	function inserirMusicaManager($usuario, $tipo_usuario) {
// 		$conn = $this->objConexao->abreConexao ();
		
// 		$objDaoMusica = new DAOMusica ( $conn );
// 		$objDaoLetra = new DAOLetra ( $conn );
// 		$objArquivos = new gerenciaArquivo ();
		
// 		$resultadoArray = [ ];
// 		$resultadoArrayLetra = [ ];
		
// 		if(isset($letra->idletra)) {
// 			$resultadoArrayLetra ['result'] = true;
// 			$resultadoArrayLetra ['insert_id'] = $letra->idletra;
// 		}
// 		else {
// 			$resultadoArrayLetra = $objDaoLetra->insertLetra ( $letra );
// 		}
		
// 		if ($resultadoArrayLetra ['result'] === true) {
// 			if (count ( $arquivos ) === 2) {
// 				$objArquivos->enviarArquivo ( $arquivos ['original'], $letra->original );
// 				$objArquivos->enviarArquivo ( $arquivos ['traducao'], $letra->traducao );
// 			}
			
// 			$musica->fkletra = $resultadoArrayLetra ['insert_id'];
			
// 			$resultadoArray = $objDaoMusica->insertMusica ( $musica );
			
// 			$conn->close ();
			
// 			if ($resultadoArray ['result'] === false) {
// 				$objDaoLetra->deletarLetra($musica->fkletra);
// 				return $resultArray;
// 			}
// 		} else {
// 			$conn->close ();
			
// 			$resultadoArray ['result'] = false;
// 			$resultadoArray ['error'] = $resultadoArrayLetra ['error'];
			
// 			return $resultArray;
// 		}
		
// 		return true;
	//}
	
	function selectUsuarioManager() {
		$conn = $this->objConexao->abreConexao ();
		
		$objDaoUsuario = new DAOUsuario ( $conn );
		
		$result = $objDaoUsuario->selectTodosUsuarios();
		
		$conn->close();
		
		return $result;
	}
}

?>