<?php

/**
 * Template Name: Layout: 3 Columns
 * @since S3 Framework 1.0
 */

// Wordpress Header
	get_header();

while ( have_posts() ) : the_post();

	// Include the page content template.
	get_template_part( 'content', 'page' );
	
	// If comments are open or we have at least one comment, load up the comment template.
	if ( comments_open() || get_comments_number() ) {
		comments_template();
	}
					

endwhile;

// Wordpress Footer
	get_footer();
?>