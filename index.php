<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one
 * of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query,
 * e.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage S3Wordpress
 * @since S3 Framework 1.0
 */

// Wordpress Header
get_header();


if(is_home() || is_front_page()){
	echo 'your latest post <br>';
}

if(is_home()){
	echo 'is_home (static page but only post-page selected)<br>';
}

if(is_front_page()){
	echo 'is_front_page() <br>';
}

if(is_front_page() && is_home()){
	echo 'is_front_page(), is_home()';
}


// Wordpress Footer
get_footer();
?>