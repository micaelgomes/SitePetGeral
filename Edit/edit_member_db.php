
<?php

$id = $_GET['id'];

$path = preg_replace('/wp-content.*$/','',__DIR__);
include($path.'wp-load.php');
global $wpdb;

function verifica_imagem_no_bd($id){
	global $wpdb;
	$result = $wpdb->get_results("SELECT * FROM `wp_custom_equipe` WHERE `id`= '$id'");
	if (!empty($result)){
		return $result[0];
	}
	return 0;
}

$dirImg = guarda_imagem('pet_member');
$result = verifica_imagem_no_bd($id);

//O administrador não colocou nova logo e no bd já existe logo cadastrada
if ($dirImg=='' && $result!=0){
	$dirImg = $result->imagem;
//O administrador colocou nova logo, então, deve-se sobrescrever
}else if($dirImg!=''){
	//é feito uma concatenação com do diretorio da imagem com o wp-contents
	$dirImg = content_url().'/'.$dirImg;
}

/*Insere os dados no BD*/
$dados = array(
	'nome'=>secureStr($_POST['nome']),
	'email'=>secureStr($_POST['email']),
	'funcao'=>secureStr($_POST['funcao']),
	'classificacao'=>secureStr($_POST['classificacao']),
	'bio'=>secureStr($_POST['bio']),
	'interesse'=>secureStr($_POST['interesse']),
	'lattes'=>secureStr($_POST['lattes']),
	'imagem'=> $dirImg,
	'facebook'=>secureStr($_POST['facebook']),
	'twitter'=>secureStr($_POST['twitter']),
	'web'=>secureStr($_POST['web']),
	'filosofia' =>'',
	'projetos' => '',
	'grupo_pet' => 0,
);
$formato = array(
	'%s',
	'%s',
	'%s',
	'%s',
	'%s',
	'%s',
	'%s',
	'%s',
	'%s',
	'%s',
	'%s',
	'%s',
	'%s',
	'%d',
);


if($result!=0){
	/*Atualiza os dados no BD */
	$result = $wpdb->update( 'wp_custom_equipe', $dados , array('id'=> $id), $formato);
} 

//Redireciona para a página pet-members do plugin no painel do admin
wp_redirect(admin_url('admin.php?page=pet-members'));


?>
