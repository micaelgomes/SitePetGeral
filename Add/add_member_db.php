
<?php

$path = preg_replace('/wp-content.*$/','',__DIR__);

include($path.'wp-load.php');
global $wpdb;


$dirImg = guarda_imagem();
echo $dirImg;
if ($dirImg!=''){
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

/*Insere os dados no BD */
$result = $wpdb->insert( 'wp_custom_equipe', $dados , $formato);

//Redireciona para a página pet-members do plugin no painel do admin
wp_redirect(admin_url('admin.php?page=pet-members'));

?>
