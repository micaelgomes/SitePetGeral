<?php


function add_member_menu_setup(){
	 add_submenu_page( 'admin.php?page=pet-members', 'Adicionar Integrante', 'Adicionar Integrante',
    'manage_options', 'add-pet-member','add_init');

}

function add_init(){
    echo "<h1>Adicionar Integrante:</h1>";
    
?>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<style type="text/css">
	.plugin form{
		float: left;
		padding-left: 20%;
		padding-top: 7%;
	}

	</style>

	<div class="wrap">
		<!-- Não esquecer de modificar o link da action('Pet members foi provisorio')-->
		<form name= "signup" method= "post" enctype="multipart/form-data" action= "/beta/wp-content/plugins/pet-home/CadastroPetiano/cadastrando.php?page=test-plugin" >
			<?php
			labels_add();
			?>
			
		</form>
	</div>

<?php  

}

	
	
function labels_add(){
?>

	<table class="form-table">

	<tr>
	<th scope="row"><label for="nome">Nome</label></th>
	<td><input required="required" name="nome" type="text" id="nome" class="regular-text" /></td>
	</tr>

	<tr>
	<th scope="row"><label for="email">Email</label></th>
	<td><input name="email" type="text" id="email" class="regular-text" /></td>
	</tr>

	<tr>
	<th scope="row"><label for="classificacao">Função</label></th>
	<td><input name="funcao" type="text" id="funcao" class="regular-text" /></td>
	</tr>

	<tr>
	<th scope="row"><label for="funcao">Classificação</label></th>
	<td><input type="radio" name="classificacao" value="Tutor" checked> Tutor &nbsp; &nbsp;
		  		<input type="radio" name="classificacao" value="Petianos"> Petianos  &nbsp; &nbsp;
		  		<input type="radio" name="classificacao" value="Ex-Petianos"> Ex-Petianos<br /><br /></td>
	</tr>

	<tr>
	<th scope="row"><label for="bio">Bio</label></th>
	<td><input name="bio" type="text" id="bio" class="regular-text" /></td>
	</tr>

	<tr>
	<th scope="row"><label for="interesse">Interesse</label></th>
	<td><input name="interesse" type="text" id="interesse" class="regular-text" /></td>
	</tr>

	<tr>
	<th scope="row"><label for="lattes">Lattes</label></th>
	<td><input name="lattes" type="text" id="lattes" class="regular-text" /></td>
	</tr>

	<tr>
	<th scope="row"><label for="lattes">Imagem (Formatos aceitos: *.jpg, *.jpeg, *.png - Tamanho máximo: 2mb):</label></th>
	<td><input type="hidden" name="MAX_FILE_SIZE" value="2000000" />
		        <input name="img_petiano" type="file" accept="image/*" />
	</tr>

	<tr>
	<th scope="row"><label for="facebook">Facebook</label></th>
	<td><input name="facebook" type="text" id="facebook" class="regular-text" /></td>
	</tr>

	<tr>
	<th scope="row"><label for="twitter">Twitter</label></th>
	<td><input name="twitter" type="text" id="twitter" class="regular-text" /></td>
	</tr>

	<tr>
	<th scope="row"><label for="web">Web</label></th>
	<td><input name="web" type="text" id="web" class="regular-text" /></td>
	</tr>

	<tr>
	<th scope="row"><label for="web">Submit</label></th>
	<td><input type="submit" value="Cadastrar"/></td>
	</tr>

	</table>

<?php  
}

// referencia: https://blog.idrsolutions.com/2014/06/wordpress-plugin-part-1/
?>