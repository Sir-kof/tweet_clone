<?php 

require_once("db.class.php");

$sql = "SELECT * FROM usuarios";

$objDb = new Db();
$link = $objDb->conecta_mysqli();

$resultado_id = mysqli_query($link, $sql);

if($resultado_id){
	$dados_usuario = array();

	while($linha = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){
		$dados_usuario[] = $linha;
	}

	foreach ($dados_usuario as $usuario) {
		var_dump($usuario);
		echo "<br><br>";
	}
} else {
	echo "Erro na execução da consulta, entrar em contato com o administrador do site.";
}


 ?>