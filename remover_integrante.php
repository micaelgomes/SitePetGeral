<?php

$path = preg_replace('/wp-content.*$/','',__DIR__);
include($path.'wp-load.php');

function delete_user($id){
	global $wpdb;
	$table = 'wp_custom_equipe';
	$wpdb->delete( $table, array( 'id' => $id), array('%d'));
}

$id = $_GET['id'];
delete_user($id);


header('Location:/beta/wp-admin/admin.php?page=pet-members');
?>