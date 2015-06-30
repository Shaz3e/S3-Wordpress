<?php
/*======================================================================*\
|| #################################################################### ||
|| # Package - Wordpress Template based on Shaz3e S3 Framework          ||
|| # Copyright (C) 2010  shaz3e.com. All Rights Reserved.               ||
|| # Authors - Shahrukh A. Khan (Shaz3e) and DiligentCreators           ||
|| # license - PHP files are licensed under  GNU/GPL V2                 ||
|| # license - CSS  - JS - IMAGE files  are Copyrighted material        ||
|| # bound by Proprietary License of shaz3e.com                         ||
|| # for more information visit http://www.shaz3e.com/                  ||
|| # Redistribution and  modification of this software                  ||
|| # is bounded by its licenses websites - http://www.shaz3e.com        ||
|| # A project of DiligentCreators - Construcing Ideas...               ||
|| #################################################################### ||
\*======================================================================*/

// Global Settings for Option Pages
global $s3_options;
$s3_settings = get_option( 's3_options', $s3_options );

/**
 * default Wordpress function enhance here
 * 
 * @since S3 Framework 1.0
 */
 
 
/**
 * Navigations
 * @since S3 Framework 1.0
 * @var array
 */
function register_s3_menus() {
	register_nav_menus(
		array(
		  'main-menu' => __( 'Main Menu' ),
		  'header-menu' => __( 'Header Menu' ),
		)
	);
}
add_action( 'init', 'register_s3_menus' );

/**
 * Custom length for excerpt
 * @link reference: http://codex.wordpress.org/Function_Reference/the_excerpt
 * @since S3 Framework 1.0
 * @param string
 * @return int
 */	
function s3_excerpt_length( $length ) {
	/**
	 * change 20 with the word count
	 * it's a sentence or paragraph (5 words)
	 *
	 * @since S3 Framework 1.6
	 */
	return (s3_option('excerpt_length') == 'auto' ? 20 : s3_option('excerpt_length'));
}
add_filter( 'excerpt_length', 's3_excerpt_length', 999 );


/**
 * excerpt with read more link
 *
 * @link reference: http://codex.wordpress.org/Function_Reference/the_excerpt
 * @since S3 Framework 1.5 updated
 * @param string
 */
function new_excerpt_more( $more ) {
	return ' <a class="read-more" href="'. get_permalink( get_the_ID() ) . '">' . __(s3_option('excerpt_more') == 'auto' ? "Read More" : s3_option('excerpt_more'), 'S3Framework') . '</a>';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );


/**
 * Hide WP Meta Generator Version
 *
 * @since S3 Framework 1.0
 */
if($s3_settings['meta_generator']):
	function s3_meta_generator() {
		
		return '';
	}
	add_filter('the_generator', 's3_meta_generator');
endif;

/**
 * Hide admin tool bar for logged-in user front-end
 * disable this hook to show admin tool bar at top from theme options
 *
 * @since S3 Framework 1.0
 */

if( s3_option('hide_admin_bar') == 1){
	add_filter('show_admin_bar', '__return_false');
}
?>