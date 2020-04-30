<?php

add_action( 'init', 'elodin_register_owens_taxonomies' );
function elodin_register_owens_taxonomies() {
	register_taxonomy(
		'service-categories',
		'services',
		array(
			'label' => __( 'Service Categories' ),
			'rewrite' => array( 'slug' => 'service-categories' ),
			'hierarchical' => true,
		)
	);
}