<?php
/*
	Plugin name: PET Home
	Plugin URI:
	Description: Esse plugin cadastra membros e ex-membros do Programa de Educação Tutorial
	Version: 1.0
	Author: Mr. Anderson Fonseca, Gabriel Phelipe, Eduardo Roger, Micael Gomes e Antônio Moreira
	License: GPLv2 or later
*/


defined( 'ABSPATH' ) or die( 'Nope, not accessing this' );
add_action('admin_menu', 'pet_home_plugin_setup_menu');
include('pet-members.php');
create_plugin_database_table();
/*Se a tabela não existe, então ela é criada*/
function create_plugin_database_table(){
	global $wpdb;

	$tblname = 'wp_custom_equipe';
	
	#Verifica se a tabela existe, caso não, cria a tabela

	if($wpdb->get_var( "show tables like '$wp_track_table'" ) != $tblname){

		$sql = "CREATE TABLE `wp_custom_equipe` (
			`id` int(11) NOT NULL AUTO_INCREMENT,
			`nome` varchar(60) NOT NULL,
			`email` varchar(30) NOT NULL,
			`funcao` varchar(25) NOT NULL,
			`classificacao` varchar(12) NOT NULL,
			`bio` varchar(300) NOT NULL,
			`interesse` varchar(50) NOT NULL,
			`lattes` varchar(100) NOT NULL,
			`imagem` varchar(200) NOT NULL,
			`facebook` varchar(25) NOT NULL,
			`twitter` varchar(25) NOT NULL,
			`web` varchar(300) NOT NULL,
			`filosofia` varchar(500) NOT NULL,
			`projetos` varchar(500) NOT NULL,
			`grupo_pet` tinyint(4) NOT NULL,
			PRIMARY KEY  (id)
		) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;";
		require_once( ABSPATH . '/wp-admin/includes/upgrade.php' );
		dbDelta($sql);
	}
}

function pet_home_plugin_setup_menu(){

    add_menu_page( 'PET Home Plugin Page', 'PET home', 'manage_options', 'pet-home', 'pet_home_init','dashicons-groups');
    pet_members_plugin_setup_menu();
 
}

//Consulta as informações do grupo pet
function query_pet_home(){ 
	global $wpdb;
	$itens = $wpdb->get_results("SELECT * FROM `wp_custom_equipe` WHERE `grupo_pet`= 1");
	if (empty($itens)){
		return array(array());
	}

	return $itens;
}


function pet_home_init(){
	//Busca informações do grupo pet
	$grupo = query_pet_home();

	foreach ($grupo as $g) {
		
?>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<div class="row">
			<div class="col s10">
				<h1>PET HOME &nbsp;<a href="admin.php?page=pet-members" ><button type="button" class="btn btn-info">Pet-members</button></a></h1>
			</div>
		</div>
			<br />
 
		<div class="wrap">	
			
			<form name= "signup" method= "post" enctype="multipart/form-data" action= "/wordpress/wp-content/plugins/pet-home/atualiza_pethome.php" >
			<?php
				labels_home($g);
			?>

			</form>
		</div>
		
<?php 
		
	}
}

function labels_home($p){
?>

	<table class="form-table">

	<tr>
	<th scope="row"><label for="nome">Nome</label></th>
	<td><input required="required" name="nome" type="text" id="nome" class="regular-text" value = "<?php echo $p->nome ?>" /></td>
	</tr>

	<tr>
	<th scope="row"><label for="email">Email</label></th>
	<td><input name="email" type="text" id="email" class="regular-text" value = "<?php echo $p->email ?>"/></td>
	</tr>

	<tr>
	<th scope="row"><label for="filosofia">Filosofia</label></th>
	<td><input required="required" name="filosofia" type="text" id="filosofia" class="regular-text" value = "<?php echo $p->filosofia ?>"/></td>
	</tr>

	<tr>
	<th scope="row"><label for="projetos">Projetos</label></th>
	<td><input required="required" name="projetos" type="text" id="projetos" class="regular-text" value = "<?php echo $p->projetos ?>"/></td>
	</tr>

	<tr>
	<th scope="row"><label for="lattes">Logo (Formatos aceitos: *.jpg, *.jpeg, *.png - Tamanho máximo: 2mb):</label></th>
	<td><input type="hidden" name="MAX_FILE_SIZE" value="2000000" />
		        <input name="img_petiano" type="file" accept="image/*" />
	</tr>

	<tr>
	<th scope="row"><label for="facebook">Facebook</label></th>
	<td><input name="facebook" type="text" id="facebook" class="regular-text" value = "<?php echo $p->facebook ?>"  /></td>
	</tr>

	<tr>
	<th scope="row"><label for="twitter">Twitter</label></th>
	<td><input name="twitter" type="text" id="twitter" class="regular-text" value = "<?php echo $p->twitter ?>"/></td>
	</tr>

	<tr>
	<th scope="row"><label for="web">Web</label></th>
	<td><input name="web" type="text" id="web" class="regular-text" value = "<?php echo $p->web ?>"/></td>
	</tr>

	<tr>
	<th scope="row"><label for="web">Submit</label></th>
	<td><input type="submit" value="Atualizar"/></td>
	</tr>

	</table>

<?php  
}
