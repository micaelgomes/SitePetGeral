<?php
/*
	Plugin name: PET Members
	Plugin URI:
	Description: Esse plugin cadastra membros e ex-membros do Programa de Educação Tutorial
	Version: 1.0
	Author: Mr. Anderson Fonseca, Gabriel Phelipe, Eduardo Roger e Micael Gomes 
	License: GPLv2 or later
*/


defined( 'ABSPATH' ) or die( 'Nope, not accessing this' );
include('CadastroPetiano/adicionar_integrante.php');
include('EditaPetiano/editar_integrante.php');



function pet_members_plugin_setup_menu(){
	add_submenu_page('pet-home', 'PET members', 'PET members','manage_options', 'pet-members', 'pet_members_init','dashicons-groups');
   
    add_member_menu_setup();
    add_edit_member_page();
}

function query_members($peopleclass){

	global $wpdb;
	$itens = $wpdb->get_results("SELECT * FROM `wp_custom_equipe` WHERE `classificacao`='". $peopleclass ."' ORDER BY nome");
	if (empty($itens))
		return false;
	return $itens;
	
}

function show_classification($peopleclass, $title){
	$members=query_members($peopleclass);

	if ($members!=false){
	//Título da Seção
	echo '<table class="table table-hover">';
		echo '<thead class="thead-dark">
				<tr>
					<th scope="col">#</th>';
			  echo '<th scope="col">'.$title.'</th>';
			  echo '<th scope="col"></th>
	      			<th scope="col"></th>
	      		</tr>
	      	  </thead>';

		foreach ($members as $member){
			$url_remove = "remover_integrante.php?id=".$member->id;
			echo '
			<tbody>
		    	<tr>
		    		<th scope="row">-></th>
		      		<td>'.$member->nome.'</td>
		     		<td><a href="admin.php?page=edit_member&id='.$member->id.'" ><button type="button" class="btn btn-success">Editar</button></td>
		      		<td><a href="'.plugins_url($url_remove, __FILE__).'" ><button type="button" class="btn btn-danger">Remover</button></td>
		    	</tr>
		  	</tbody>' ;	
		}

		echo "</table>";
		return true;
	}
	return false;
	
}

function pet_members_init(){
 
?>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<div class="row">
		<div class="col s10">
			<h1>PET members &nbsp;<a href="admin.php?page=add-pet-member" ><button type="button" class="btn btn-info">Adicionar Integrante</button></a></h1>
		</div>
	</div>
		<br />
	<div class="container">
		<div class="row" >
			
			<?php 
				$res1 = show_classification("Tutor", "Tutor");
			    $res2 = show_classification("Petianos", "Petianos");
				$res3 = show_classification("Ex-Petianos", "Ex-Petianos");
				if (!$res1 && !$res2 )
					echo '<h3> Não existem membros cadastrados</h3>';	
			?> 

		</div>  
    </div>

<?php  
}
