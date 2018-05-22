<?php
function estabelece_conexao(){
	$host="localhost"; //colocando as informações do servidor
	$user= "root";
	$pass="";
	$banco="wordpress";
	$conexao= new mysqli($host, $user, $pass, $banco);
	//mysqli_select_db($banco) or die(mysql_error());
	if($conexao->connect_error){
		 die("Connection failed: " . $conn->connect_error);
		 return False;
	}
	return $conexao;
}

function encerra_conexao($conexao){
	if($conexao){
		$conexao->close();
	}
}

?>
