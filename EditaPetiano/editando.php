
<?php

$id = $_GET['id'];

$path = preg_replace('/wp-content.*$/','',__DIR__);
include($path.'wp-load.php');
global $wpdb;

/*Verifica a extensão*/
function extensao_permitida($nome){
	$aceita = array('image/pjpeg', 'image/jpeg', 'image/jpg', 'image/png');
	$finfo = finfo_open(FILEINFO_MIME_TYPE);
	#Pega a extensão do arquivo
	$tipo = finfo_file($finfo, $nome);
	finfo_close($finfo);
	#Verifica se o tipo pertence aos aceitáveis
	if(in_array($tipo, $aceita))
		return true;
	else
		return false;
}
/*Se os diretorios necessários para guardar a imagem não existirem, serão criados*/
function verifica_diretorios(){
	chdir('../../../');
	//Cada imagem colocada no diretorio de uploads é salva em uma pasta de acordo com o mes e ano em que foi feito o upload
	$diretorio = 'uploads/sites/1/'.date('Y').'/'.date('m').'/';
	if(!is_dir($diretorio)){
		//Cria uma pasta dentro da outra (que pode ou não ser nova) - Criação Recursiva
		mkdir($diretorio,  0777, true);
		
	}
	return $diretorio;
}

function secureStr($str){
   	$str = preg_replace("/[;'`()\"%=*><]/", "", $str);
   	return $str;
}

/*Faz a verificação da imagem*/
function guarda_imagem(){

    /*A imagem ficará guardada no diretório wp_contents/uploads/sites/1/'ano'/'mes'/
	Então, é necessário que se verifique a existência das pastas, se não, serão criadas
    */
   	$diretorio_upload = verifica_diretorios();
 
	//Pode fazer o upload da imagem
	if($_FILES['img_petiano']['error'] == 0){
		
		//Não houve erro no upload
		if(extensao_permitida($_FILES['img_petiano']['tmp_name'])){
			//O formato é suportado
			if($_FILES['img_petiano']['size'] < 2000000 || $_FILES['img_petiano']['size'] == 0){		
				//Tamanho aceito
				$dirImg = $diretorio_upload.'/'.$_FILES['img_petiano']['name'];
				//Fa o upload da imagem no diretorio
				if(@move_uploaded_file($_FILES['img_petiano']['tmp_name'], $dirImg)){
					return $dirImg;
				}
			}
		}
	}
	
	return '';
}

$dirImg = guarda_imagem();

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

/*Atualiza os dados no BD */
$result = $wpdb->update( 'wp_custom_equipe', $dados , array('id'=> $id), $formato);
//Redireciona para a página do plugin no painel do admin
header('Location:/wordpress/wp-admin/admin.php?page=pet-members');


?>
