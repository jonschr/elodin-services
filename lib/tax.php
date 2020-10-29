<?php

add_action( 'init', 'elodin_register_services_taxonomies' );
function elodin_register_services_taxonomies() {
	register_taxonomy(
		'service-categories',
		'services',
		array(
			'label' 		=> __( 'Service Categories' ),
			'rewrite' 		=> array( 'slug' => 'service-categories' ),
			'hierarchical' 	=> true,
			'show_in_rest' 	=> true,
		)
	);
}