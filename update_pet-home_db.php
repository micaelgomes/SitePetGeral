
<?php
$path = preg_replace('/wp-content.*$/','',__DIR__);
include($path.'wp-load.php');
global $wpdb;



function verifica_imagem_no_bd(){
	global $wpdb;
	$result = $wpdb->get_results("SELECT * FROM `wp_custom_equipe` WHERE `grupo_pet`= 1");
	if (!empty($result)){
		return $result[0];
	}
	return 0;
}


$user = wp_get_current_user();
$allowed_roles = array('editor', 'administrator');

if(array_intersect($allowed_roles, $user->roles )){

	$dirImg = guarda_imagem('pet_home');
	$result = verifica_imagem_no_bd();


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
		'funcao'=>'',
		'classificacao'=>'',
		'bio'=>'',
		'interesse'=>'',
		'lattes'=>'',
		'imagem'=> $dirImg,
		'facebook'=>secureStr($_POST['facebook']),
		'twitter'=>secureStr($_POST['twitter']),
		'web'=>$_POST['web'],
		'filosofia' =>secureStr($_POST['filosofia']),
		'projetos' => secureStr($_POST['projetos']),
		'grupo_pet' => 1,
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
		$wpdb->update( 'wp_custom_equipe', $dados , array('grupo_pet'=> 1), $formato);
	} else{
		//Vai inserir, pois é um novo dado
		$wpdb->insert( 'wp_custom_equipe', $dados , $formato);
	}

	//Redireciona para a página principal do plugin no painel do admin
	wp_redirect(admin_url('admin.php?page=pet-home'));
}else{
	wp_redirect(get_site_url());
}

?>