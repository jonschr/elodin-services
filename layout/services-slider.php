<?php

//* Output services_slider before
add_action( 'before_loop_layout_services_slider', 'elodin_services_slider_before' );
function elodin_services_slider_before( $args ) {
    
    //* add slick
    wp_enqueue_script( 'elodin-services-slick-main' );
	wp_enqueue_style( 'elodin-services-slick-styles' );
    wp_enqueue_style( 'elodin-services-slick-theme' );

    $script = '
        jQuery(document).ready(function($){
            $(".loop-layout-services_slider").slick({
                autoplay: false, 
                arrows: false, 
                dots: true, 
                infinite: true,
                slidesToShow: 3,
                slidesToScroll: 3,
                adaptiveHeight: true,
                responsive: [
                    {
                        breakpoint: 740,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                ]
            });
        });
    ';
    
    //* init
    wp_add_inline_script( 'elodin-services-slick-main', $script );
    
}

//* Output each services_slider
add_action( 'add_loop_layout_services_slider', 'elodin_services_slider_each' );
function elodin_services_slider_each() {

	//* Global vars
	global $post;
	$id = get_the_ID();

	//* Vars
	$title = get_the_title();
	$permalink = get_the_permalink();
    // $thing = get_post_meta( $id, 'thing', true );

    printf( '<a class="overlay" href="%s"></a>', $permalink );

    if ( has_post_thumbnail() ) 
        printf( '<div class="featured-image" style="background-image:url( %s )"></div>', get_the_post_thumbnail_url( $post_id, 'large' ) );
    
    echo '<div class="service-content">';

        //* Markup
        if ( $title )
            printf( '<h3>%s</h3>', $title );
    
        the_excerpt();

    echo '</div>';
}