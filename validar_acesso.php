<?php 
	
	session_start();

	require_once("db.class.php");

	$usuario = $_POST['usuario'];
	$senha = md5($_POST['senha']);

	$sql = "SELECT id, usuario, email FROM usuarios WHERE usuario = '$usuario' AND senha = '$senha'";

	$objDb = new Db();
	$link = $objDb->conecta_mysqli();

	$resultado_id = mysqli_query($link, $sql);

	if($resultado_id){
		$dados_usuario = mysqli_fetch_array($resultado_id);

		if(isset($dados_usuario['usuario'])){

			$_SESSION['id_usuario'] = $dados_usuario['id'];
			$_SESSION['usuario'] = $dados_usuario['usuario'];
			$_SESSION['email'] = $dados_usuario['email'];


			header("Location: home.php");

		} else {
			header("Location: index.php?erro=1");
		}
	} else {
		echo "Entrar em contato com o Administrador do site.";
	}

 ?>