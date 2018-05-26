<?php

$path = preg_replace('/wp-content.*$/','',__DIR__);
include($path.'wp-load.php');

//Função para remover o membro
function delete_user($id){
	global $wpdb;
	$table = 'wp_custom_equipe';
	$wpdb->delete( $table, array( 'id' => $id), array('%d'));
}

$id = $_GET['id'];
delete_user($id);

//Redireciona para a página pet-members do plugin no painel do admin
wp_redirect(admin_url('admin.php?page=pet-members'));

?>