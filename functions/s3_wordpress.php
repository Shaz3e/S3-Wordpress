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
	 */
	return 20;
}
add_filter( 'excerpt_length', 's3_excerpt_length', 999 );


/*
 * excerpt with read more link
 *
 * @link reference: http://codex.wordpress.org/Function_Reference/the_excerpt
 * @since S3 Framework 1.0
 * @param string
 */
function new_excerpt_more( $more ) {
	return ' <a class="read-more" href="'. get_permalink( get_the_ID() ) . '">' . __('Read More', 'your-text-domain') . '</a>';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );

?>