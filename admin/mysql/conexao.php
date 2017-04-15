<?php
	class conexaoMySql {
		private $servername = "localhost:3306";
		private $username = "root";
		private $password = "1124";
		private $bancodedados = "lptvbr";

		function abreConexao() {
			// Create connection
			$conn = new mysqli ( $this->servername, $this->username, $this->password, $this->bancodedados );
			
			// Check connection
			if ($conn->connect_error) {
				return null;
			}
			
			return $conn;			
		}
	}
?>