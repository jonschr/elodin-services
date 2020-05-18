<?php

//* Output each services
add_action( 'add_loop_layout_services_excerpt', 'elodin_services_register_services_excerpt_layout' );
function elodin_services_register_services_excerpt_layout() {

	//* Global vars
	global $post;
	$id = get_the_ID();

	//* Vars
	$title = get_the_title();
	$permalink = get_the_permalink();
    $excerpt = apply_filters( 'the_content', apply_filters( 'the_content', get_the_excerpt() ) );
    $content = get_the_content();

    //* Markup
    if ( $permalink )
        printf( '<a href="%s" class="overlay"></a>', $permalink );

    if ( $title ) {
        
        if ( $content )
            printf( '<h3><a href="%s">%s</a></h3>', $permalink, $title );

        if ( !$content )
            printf( '<h3>%s</h3>', $title );

    }

    if ( $excerpt )
        printf( '<div class="excerpt">%s</div>', $excerpt );
    
    if ( $content )
        printf( '<a href="%s" class="button">Learn more</a>', $permalink );

    edit_post_link();
}