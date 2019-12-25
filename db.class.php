<?php 

class Db{
	//host
	private $host = "localhost";

	//usuário
	private $usuario = "root";

	//senha
	private $senha = "";

	//banco de dados
	private $database = "twiter_clone";

	public function conecta_mysqli(){

		//criar conexão com o banco de dados mysqli
		$conn = mysqli_connect($this->host, $this->usuario, $this->senha, $this->database);

		//ajustar o charset entre a aplicação e o banco de dados
		mysqli_set_charset($conn, "UTF8");

		if(mysqli_connect_errno()){
			echo "erro ao tentar se conectar ao banco de dados: ".mysqli_connect_error();
		}

		return $conn;
	}
}

 ?>