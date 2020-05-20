<?php
/*
	Plugin Name: Elodin Services
	Plugin URI: https://github.com/jonschr/elodin-services
    Description: Just another services plugin
	Version: 1.1.1
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
define ( 'ELODIN_SERVICES_VERSION', '1.1.1' );

//* Basic setup
require_once( 'lib/post_type.php' );
require_once( 'lib/tax.php' );
require_once( 'lib/single-services-modifications.php' );

//* Layouts
require_once( 'layout/services.php' );
require_once( 'layout/services-photo.php' );
require_once( 'layout/services-excerpt.php' );
require_once( 'layout/services-slider.php' );

add_action( 'wp_enqueue_scripts', 'elodin_services_enqueues' );
function elodin_services_enqueues() {
	
	// Plugin styles
    wp_enqueue_style( 'elodin-services-style', plugin_dir_url( __FILE__ ) . 'css/elodin-services.css', array(), ELODIN_SERVICES_VERSION, 'screen' );

    // Slick 
    wp_register_style( 'elodin-services-slick-styles', plugin_dir_url( __FILE__ ) . 'vendor/slick/slick.css', array(), ELODIN_SERVICES_VERSION, 'screen' );
    wp_register_style( 'elodin-services-slick-theme', plugin_dir_url( __FILE__ ) . 'vendor/slick/slick-theme.css', array(), ELODIN_SERVICES_VERSION, 'screen' );
    wp_register_script( 'elodin-services-slick-main', plugin_dir_url( __FILE__ ) . 'vendor/slick/slick.min.js', array( 'jquery' ), ELODIN_SERVICES_VERSION, true );
	
}


// Updater
require 'vendor/plugin-update-checker/plugin-update-checker.php';
$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
	'https://github.com/jonschr/elodin-services',
	__FILE__,
	'elodin-services'
);

// Optional: Set the branch that contains the stable release.
$myUpdateChecker->setBranch('master');