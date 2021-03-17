<?php

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
    if ( $permalink )
        printf( '<a href="%s" class="overlay"></a>', $permalink );

    if ( $content )
        printf( '<a href="%s" class="featured-image" style="background-image:url( %s )"></a>', $permalink, get_the_post_thumbnail_url( $id, 'large' ) );
        
    if ( !$content )
        printf( '<div class="featured-image" style="background-image:url( %s )"></div>', get_the_post_thumbnail_url( $id, 'large' ) );
        
    echo '<div class="services-content-wrap"><div class="services-content">';

        if ( $title ) {
            
            if ( $content )
                printf( '<h3><a href="%s">%s</a></h3>', $permalink, $title );

            if ( !$content )
                printf( '<h3>%s</h3>', $title );

        }

        if ( $excerpt )
            printf( '<div class="excerpt">%s</div>', $excerpt );

        edit_post_link();
    
    echo '</div></div>';
}