<?php

//* Output services before
// add_action( 'before_loop_layout_services_photo', 'rb_services_photo_before' );
function rb_services_photo_before( $args ) {
	// wp_enqueue_script( 'SCRIPTHANDLE' );
}

//* Output each services
add_action( 'add_loop_layout_services_photo', 'rb_services_photo_each' );
function rb_services_photo_each() {

	//* Global vars
	global $post;
	$id = get_the_ID();

	//* Vars
	$title = get_the_title();
	$permalink = get_the_permalink();
    $content = get_the_content();

    //* Markup
    printf( '<div class="featured-image" style="background-image:url( %s )"></div>', get_the_post_thumbnail_url( get_the_ID(), 'large' ) );

    if ( $title )
        printf( '<h3>%s</h3>', $title );
    
    if ( $content )
        printf( '<a href="%s" class="button">Learn more</a>', $permalink );

        edit_post_link();
}