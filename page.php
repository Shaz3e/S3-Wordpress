<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other 'pages' on your WordPress site will use a different page templates as you define them.
 *
 * @package WordPress
 * @subpackage S3Wordpress
 * @since S3 Framework 1.0
 */

// Wordpress Header
	get_header();
?>

<?php
	/*
	if ( is_front_page() && twentyfourteen_has_featured_posts() ) {
		// Include the featured content template.
		get_template_part( 'featured-content' );
	}
	*/
	
	
	// Start the Loop.
	while ( have_posts() ) : the_post();
		// Include the page content template.
		get_template_part( 'content', 'page' );
		
		// If comments are open or we have at least one comment, load up the comment template.
		/*
		if ( comments_open() || get_comments_number() ) {
			comments_template();
		}
		*/
	endwhile;
	
// Wordpress Footer
	get_footer();
?>