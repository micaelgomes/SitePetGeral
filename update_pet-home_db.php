
<?php



$path = preg_replace('/wp-content.*$/','',__DIR__);

include($path.'wp-load.php');
global $wpdb;


$encontrado = $_GET['encontrado'];
$dirImg = guarda_imagem();

if ($dirImg!=''){
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

/*Atualiza os dados no BD */
$result = $wpdb->update( 'wp_custom_equipe', $dados , array('grupo_pet'=> 1), $formato);
//Se não existe, então insere
if($result!=1)
	$result = $wpdb->insert( 'wp_custom_equipe', $dados , $formato);

//Redireciona para a página principal do plugin no painel do admin
wp_redirect(admin_url('admin.php?page=pet-home'));

?>
