<?php

//////////////////////////////////////////////
// ADD A WIDGET AREA AFTER THE CONTENT AREA //
//////////////////////////////////////////////

//* Register the widget area
add_action( 'init', 'elodin_services_register_widget_area_below' );
function elodin_services_register_widget_area_below() {
    
    //* Bail if it's not Genesis
    if ( !function_exists( 'genesis_register_sidebar' ) )
        return;
    
        genesis_register_sidebar( array(
        'id'		    => 'after-single-service',
        'name'		    => __( 'Services single footer', 'elodin-services' ),
        'description'	=> __( 'An area intended to house anything you\'d like to show on all services (perhaps a listing of all of the services for easy navigation).', 'elodin-services' ),
        'before_title'  => '<h2>',
        'after_title'   => '</h2>',
    ) );
}

//* Display the widget area
add_action( 'genesis_before_footer', 'elodin_services_add_widget_area_after' );
function elodin_services_add_widget_area_after() {

    //* bail if we're not on a service
    if ( !is_singular( 'services' ) )
        return;

	genesis_widget_area( 'after-single-service', array(
        'before' => '<div class="services-widget-wrap-after"><div class="wrap">',
        'after' => '</div></div>',
	) );
}