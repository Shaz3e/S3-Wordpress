<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage S3Wordpress
 * @since S3 Framework 1.0
 */

// Wordpress Header
get_header();

	// Start the Loop.
	while ( have_posts() ) : the_post();
		get_template_part( 'content', 'page' );
		
		// If comments are open or we have at least one comment, load up the comment template.
		if ( comments_open() || get_comments_number() ) {
			comments_template();
		}
	endwhile;
	
// Wordpress Footer
	get_footer();
?>