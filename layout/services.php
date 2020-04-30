<?php

//* Output services before
// add_action( 'before_loop_layout_services', 'rb_services_before' );
function rb_services_before( $args ) {
	// wp_enqueue_script( 'SCRIPTHANDLE' );
}

//* Output each services
add_action( 'add_loop_layout_services', 'rb_services_each' );
function rb_services_each() {

	//* Global vars
	global $post;
	$id = get_the_ID();

	//* Vars
	$title = get_the_title();
	$permalink = get_the_permalink();
    $excerpt = apply_filters( 'the_content', apply_filters( 'the_content', get_the_excerpt() ) );
    $content = get_the_content();

	//* Markup
    if ( $title )
        printf( '<h3>%s</h3>', $title );

    if ( $excerpt )
        printf( '<div class="excerpt">%s</div>', $excerpt );
    
    if ( $content )
        printf( '<a href="%s" class="button">Learn more</a>', $permalink );

    edit_post_link();
}