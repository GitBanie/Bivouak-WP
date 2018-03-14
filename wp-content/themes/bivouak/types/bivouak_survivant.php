<?php

add_action( 'init', 'bivouak_register_survivant' );
/**
 * Register a survivant post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function bivouak_register_survivant() {
	$labels = array(
		'name'               => _x( 'Survivants', 'post type general name'),
		'singular_name'      => _x( 'Survivant', 'post type singular name'),
		'menu_name'          => _x( 'Survivants', 'admin menu'),
		'name_admin_bar'     => _x( 'Survivant', 'add new on admin bar'),
		'add_new'            => _x( 'Ajouter', 'survivant'),
		'add_new_item'       => __( 'Ajouter un nouveau survivant'),
		'new_item'           => __( 'Nouveau survivant'),
		'edit_item'          => __( 'Modifier le survivant'),
		'view_item'          => __( 'Voir le survivant'),
		'all_items'          => __( 'Tous les survivants'),
		'search_items'       => __( 'Rechercher un survivant'),
		'parent_item_colon'  => __( 'Parent Survivants:'),
		'not_found'          => __( 'Aucun survivant.'),
		'not_found_in_trash' => __( 'Aucun survivant dans la corbeille.')
	);

	$args = array(
		'labels'             => $labels,
    'description'        => __( 'Liste des survivants.', 'your-plugin-textdomain' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'survivant' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 5,
	);

	register_post_type( 'survivant', $args );
}
