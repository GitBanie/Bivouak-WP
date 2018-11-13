<?php

add_action( 'init', 'bivouak_create_stage_tax' );

function bivouak_create_stage_tax() {
	register_taxonomy(
		'genre',
		'stage',
		array(
			'label' => __( 'Genre' ),
			'rewrite' => array( 'slug' => 'genre' ),
			'hierarchical' => true,
		)
	);
}
