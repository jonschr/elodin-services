<?php

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
    if ( $content )
        printf( '<a href="%s" class="featured-image" style="background-image:url( %s )"></a>', $permalink, get_the_post_thumbnail_url( $id, 'large' ) );

    if ( !$content )
        printf( '<div class="featured-image" style="background-image:url( %s )"></div>', get_the_post_thumbnail_url( $id, 'large' ) );

    if ( $title ) {
        
        if ( $content )
            printf( '<h3><a href="%s">%s</a></h3>', $permalink, $title );

        if ( !$content )
            printf( '<h3>%s</h3>', $title );

    }

    edit_post_link();
}