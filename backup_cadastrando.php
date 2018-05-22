
<?php
$host="localhost"; //colocando as informações do servidor
$user= "root";
$pass="";
$banco="wordpress";
$conexao= new mysqli($host, $user, $pass, $banco);
//mysqli_select_db($banco) or die(mysql_error());
if($conexao->connect_error){
	 die("Connection failed: " . $conn->connect_error);
}

?>
<?php
$nome=$_POST['nome'];
$email=$_POST['email'];
$funcao=$_POST['funcao'];
$classificacao=$_POST['classificacao'];
$bio=$_POST['bio'];
$interesse=$_POST['interesse'];
$lattes=$_POST['lattes'];
$imagem=$_POST['imagem'];
$facebook=$_POST['facebook'];
$twitter=$_POST['twitter'];
$web=$_POST['web'];

$sql = "INSERT INTO wp_custom_equipe(nome, email, funcao, classificacao, bio, interesse, lattes, imagem, facebook, twitter, web) VALUES('$nome', '$email', '$funcao', '$classificacao', '$bio', '$interesse', '$lattes', '$imagem', '$facebook', '$twitter', '$web')";
if($conexao->query($sql) === TRUE){
	echo '<script>alert("Eae!");</script>';
	 echo "xama!!!";
}else{
	echo '<script>alert("Errou!");</script>';
	echo "Error: " . $sql . "<br>" . $conexao->error;
}
$conexao->close();
//Redireciona para a página do plugin no painel do admin
header('Location:/wordpress/wp-admin/admin.php?page=test-plugin');

?>
