<?php 
/** 
	Plugin Name: integrantes 
	Plugin URI:
	Description: Esse plugin cadastra membros e ex-membros do Programa de Educação Tutorial
	Version: 1.0
	Author: Mr. Anderson Fonseca, Gabriel Phelipe, Eduardo Roger e Micael Gomes 
	License: GPLv2 or later
	

**/ 
 
// Register the Custom Music Review Post Type 
  
function labels_interface() { 
  
    $labels = array( 
        'name' => _x( 'Pet Members', 'pet members' ), 
        'singular_name' => _x( 'Pet Members', 'pet members' ), 
        'add_new' => _x( 'Adiconar Integrante', 'pet_members' ), 
        'add_new_item' => _x( 'Add New Integrante', 'pet_members' ), 
        'edit_item' => _x( 'Edit Integrante', 'pet_members' ), 
        'new_item' => _x( 'New Integrante', 'pet_members' ), 
        'view_item' => _x( 'View Integrante', 'pet_members' ), 
        'search_items' => _x( 'Search Integrante', 'pet_members' ), 
        'not_found' => _x( 'Sem Integrante', 'pet_members' ), 
        'not_found_in_trash' => _x( 'Nenhum Integrante apagado', 'pet_members' ), 
        'parent_item_colon' => _x( 'NÃO ENTENDI ISSO AQUI:', 'pet_members' ), 
        'menu_name' => _x( 'Integrantes', 'pet_members' ), 
    ); 
  
    $args = array( 
        'labels' => $labels, 
        'hierarchical' => true, 
        'description' => 'Music reviews filterable by genre', 
        'supports' => array( 'title','thumbnail','add_init'), 
        'taxonomies' => array( 'genres' ), 
        'public' => true, 
        'show_ui' => true, 
        'show_in_menu' => true, 
        'menu_position' => 5, 
        'menu_icon' => 'dashicons-smiley', 
        'show_in_nav_menus' => true, 
        'publicly_queryable' => true, 
        'exclude_from_search' => false, 
        'has_archive' => true, 
        'query_var' => true, 
        'can_export' => true, 
        'rewrite' => true, 
        'capability_type' => 'post' 
    ); 
  
    register_post_type( 'pet_members', $args ); 
} 
  
add_action( 'init', 'labels_interface' ); 
 
function genres_taxonomy() { 
    register_taxonomy( 
        'genres', 
        'music_review', 
        array( 
            'hierarchical' => true, 
            'label' => 'Genres', 
            'query_var' => true, 
            'rewrite' => array( 
                'slug' => 'genre', 
                'with_front' => false 
            ) 
        ) 
    ); 
} 
 
add_action( 'init', 'genres_taxonomy'); 
 
 
?>
