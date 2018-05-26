<?php
function add_edit_member_page(){
	//Coloca o caminho da página principal do pet-members como 'pai' da funcionalidade de editar a fim de que a opção de editar não aparecesse no painel principal do wordpress
	 add_submenu_page('admin.php?page=pet-members','Edit member','Edit member', 'manage_options','edit_member', 'edit_int');

}

//Consulta o BD pelo ID do membro
function query_members_by_id($id){ 
	global $wpdb;
	$items = $wpdb->get_results("SELECT * FROM `wp_custom_equipe` WHERE `id`='". $id ."'");
	return $items;
}
//Verifica a classe do membro e coloca checked no radio button
function verify_class($class, $class_radio){
	if ($class == $class_radio){
		return 'checked';
	} else{
		return '';
	}

}
//Inicio 
function edit_int(){

	if (isset($_GET['id'])){
		$id=$_GET['id'];
		$petiano = query_members_by_id($id);
		foreach ($petiano as $p) {

?>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

		<h3>Editar Integrante:</h3>
		<style type="text/css">
		.plugin form{
			float: left;
			padding-left: 20%;
			padding-top: 7%;
		}



		</style>

		<div class="wrap">	
			
			<form name= "signup" method= "post" enctype="multipart/form-data" action= "<?php echo plugins_url('edit_member_db.php?id='.$id,__FILE__); ?>" >
				<?php
				labels_edit($p);
				?>

			</form>
		</div>

<?php	
		
			
		}
	}else{
		//Redireciona para a página do plugin no painel do admin caso ocorra algum erro
		header('Location:/wordpress/wp-admin/admin.php?page=pet-members');
	}
}


function labels_edit($p){
?>

	<table class="form-table">

	<tr>
	<th scope="row"><label for="nome">Nome</label></th>
	<td><input required="required" name="nome" type="text" id="nome" class="regular-text" value = "<?php echo $p->nome ?>" /></td>
	</tr>

	<tr>
	<th scope="row"><label for="email">Email</label></th>
	<td><input name="email" type="text" id="email" class="regular-text" value = "<?php echo $p->email ?>" /></td>
	</tr>

	<tr>
	<th scope="row"><label for="classificacao">Função</label></th>
	<td><input name="funcao" type="text" id="funcao" class="regular-text" value = "<?php echo $p->funcao ?>" /></td>
	</tr>

	<tr>
	<th scope="row"><label for="funcao">Classificação</label></th>
	<td><input type="radio" name="classificacao" value="Tutor" <?php echo verify_class($p->classificacao,'Tutor')?> > Tutor &nbsp; &nbsp;
		<input type="radio" name="classificacao" value="Petianos" <?php echo verify_class($p->classificacao,'Petianos')?> > Petianos  &nbsp; &nbsp;
		<input type="radio" name="classificacao" value="Ex-Petianos" <?php echo verify_class($p->classificacao,'Ex-Petianos')?> > Ex-Petianos<br /><br /></td>
	</tr>

	<tr>
	<th scope="row"><label for="bio">Bio</label></th>
	<td><input name="bio" type="text" id="bio" class="regular-text" value = "<?php echo $p->bio ?>" /></td>
	</tr>

	<tr>
	<th scope="row"><label for="interesse">Interesse</label></th>
	<td><input name="interesse" type="text" id="interesse" class="regular-text" value = "<?php echo $p->interesse ?>" /></td>
	</tr>

	<tr>
	<th scope="row"><label for="lattes">Lattes</label></th>
	<td><input name="lattes" type="text" id="lattes" class="regular-text" value = "<?php echo $p->lattes ?>" /></td>
	</tr>

	<tr>
	<th scope="row"><label for="lattes">Imagem (Formatos aceitos: *.jpg, *.jpeg, *.png - Tamanho máximo: 2mb):</label></th>
	<td><input type="hidden" name="MAX_FILE_SIZE" value="2000000" />
		        <input name="img_petiano" type="file" accept="image/*" />
	</tr>

	<tr>
	<th scope="row"><label for="facebook">Facebook</label></th>
	<td><input name="facebook" type="text" id="facebook" class="regular-text" value = "<?php echo $p->facebook ?>" /></td>
	</tr>

	<tr>
	<th scope="row"><label for="twitter">Twitter</label></th>
	<td><input name="twitter" type="text" id="twitter" class="regular-text" value = "<?php echo $p->twitter ?>"/></td>
	</tr>

	<tr>
	<th scope="row"><label for="web">Web</label></th>
	<td><input name="web" type="text" id="web" class="regular-text" value = "<?php echo $p->web ?>" /></td>
	</tr>

	<tr>
	<th scope="row"><label for="web">Submit</label></th>
	<td><input type="submit" value="Atualizar"/></td>
	</tr>

	</table>

<?php
}

// referencia: https://blog.idrsolutions.com/2014/06/wordpress-plugin-part-1/
?>

