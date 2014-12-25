<?php

/**
 * Template Name: Layout: Without Title
 * @since S3 Framework 1.0
 */

// Wordpress Header
	get_header();

while ( have_posts() ) : the_post();

	// Include the page content template.
	get_template_part( 'content', 'page' );					

endwhile;

// Wordpress Footer
	get_footer();
?>