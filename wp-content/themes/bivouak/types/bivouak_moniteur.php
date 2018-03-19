<?php

add_action( 'init', 'bivouak_register_moniteur' );
/**
 * Register a moniteur post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function bivouak_register_moniteur() {
	$labels = array(
		'name'               => _x( 'Moniteurs', 'post type general name'),
		'singular_name'      => _x( 'Moniteur', 'post type singular name'),
		'menu_name'          => _x( 'Moniteurs', 'admin menu'),
		'name_admin_bar'     => _x( 'Moniteur', 'add new on admin bar'),
		'add_new'            => _x( 'Ajouter', 'moniteur'),
		'add_new_item'       => __( 'Ajouter un nouveau moniteur'),
		'new_item'           => __( 'Nouveau moniteur'),
		'edit_item'          => __( 'Modifier le moniteur'),
		'view_item'          => __( 'Voir le moniteur'),
		'all_items'          => __( 'Tous les moniteurs'),
		'search_items'       => __( 'Rechercher un moniteur'),
		'parent_item_colon'  => __( 'Parent Moniteurs:'),
		'not_found'          => __( 'Aucun moniteur.'),
		'not_found_in_trash' => __( 'Aucun moniteur dans la corbeille.')
	);

	$args = array(
		'labels'             => $labels,
    'description'        => __( 'Liste des moniteurs.', 'your-plugin-textdomain' ),
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

	register_post_type( 'moniteur', $args );
}
