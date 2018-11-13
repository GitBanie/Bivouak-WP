<?php

add_action( 'init', 'bivouak_register_stage' );
/**
 * Register a stage post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function bivouak_register_stage() {
	$labels = array(
		'name'               => _x( 'Stages', 'post type general name'),
		'singular_name'      => _x( 'Stage', 'post type singular name'),
		'menu_name'          => _x( 'Stages', 'admin menu'),
		'name_admin_bar'     => _x( 'Stage', 'add new on admin bar'),
		'add_new'            => _x( 'Ajouter', 'stage'),
		'add_new_item'       => __( 'Ajouter un nouveau stage'),
		'new_item'           => __( 'Nouveau stage'),
		'edit_item'          => __( 'Modifier le stage'),
		'view_item'          => __( 'Voir le stage'),
		'all_items'          => __( 'Tous les stages'),
		'search_items'       => __( 'Rechercher un stage'),
		'parent_item_colon'  => __( 'Parent Stages:'),
		'not_found'          => __( 'Aucun stage.'),
		'not_found_in_trash' => __( 'Aucun stage dans la corbeille.')
	);

	$args = array(
		'labels'             => $labels,
    'description'        => __( 'Liste des stages.', 'your-plugin-textdomain' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'stage' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => true,
		'menu_position'      => 5,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt')
	);

	register_post_type( 'stage', $args );
}
