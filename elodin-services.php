<?php
/*
	Plugin Name: Elodin Services
	Plugin URI: https://elod.in
    Description: Just another services plugin
	Version: 0.1
    Author: Jon Schroeder
    Author URI: https://elod.in

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
    GNU General Public License for more details.
*/


/* Prevent direct access to the plugin */
if ( !defined( 'ABSPATH' ) ) {
    die( "Sorry, you are not allowed to access this page directly." );
}

// Plugin directory
define( 'ELODIN_SERVICES', dirname( __FILE__ ) );

// Define the version of the plugin
define ( 'ELODIN_SERVICES_VERSION', '0.1' );

// Post type
require_once( 'lib/post_type.php' );

// Tax
require_once( 'lib/tax.php' );

//* Layouts
require_once( 'layout/services.php' );
require_once( 'layout/services-photo.php' );

add_action( 'wp_enqueue_scripts', 'elodin_services_enqueues' );
function elodin_services_enqueues() {
	
	// Plugin styles
    wp_enqueue_style( 'elodin-services-style', plugin_dir_url( __FILE__ ) . 'css/elodin-services.css', array(), ELODIN_SERVICES_VERSION, 'screen' );
	
}