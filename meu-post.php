<?php
/*
Plugin Name: post-socio
Description: Mantém nossos socios e dados específicos de socios
Author: bbento
*/
 
add_action( 'init', 'custom_post_socio' );
 
function custom_post_socio() {
 
  $labels = array(
    'name'               => __( 'Socios' ),
    'singular_name'      => __( 'Socio' ),
    'add_new'            => __( 'Add novo Socio' ),
    'add_new_item'       => __( 'Add novo Socio' ),
    'edit_item'          => __( 'Editar Socio' ),
    'new_item'           => __( 'novo Socio' ),
    'all_items'          => __( 'Todos Socios' ),
    'view_item'          => __( 'Ver Socio' ),
    'search_items'       => __( 'Procurar Socio' ),
    'featured_image'     => 'Foto',
    'set_featured_image' => 'Add Foto'
  );
 
  $args = array(
    'labels'            => $labels,
    'description'       => 'Mantém nossos socios e dados específicos de socios',
    'public'            => true,
    'menu_position'     => 5,
    'supports'          => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
    'has_archive'       => true,
    'show_in_admin_bar' => true,
    'show_in_nav_menus' => true,
    'has_archive'       => true,
    'query_var'         => 'socio'
  );
 
  register_post_type( 'socio', $args);
}
 
