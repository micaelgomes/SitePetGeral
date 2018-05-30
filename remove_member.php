<?php

$path = preg_replace('/wp-content.*$/','',__DIR__);
include($path.'wp-load.php');

//Função para remover o membro
function delete_user($id){
	global $wpdb;
	$table = 'wp_custom_equipe';
	$wpdb->delete( $table, array( 'id' => $id), array('%d'));
}

$user = wp_get_current_user();
$allowed_roles = array('editor', 'administrator');

if(array_intersect($allowed_roles, $user->roles )){
	$id = $_GET['id'];
	delete_user($id);
	//Redireciona para a página pet-members do plugin no painel do admin
	wp_redirect(admin_url('admin.php?page=pet-members'));
}else{
	wp_redirect(get_site_url());
}
?>