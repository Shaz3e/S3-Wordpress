<?php

/**
 * Template Name: Layout: Page Builder
 * @since S3 Framework 1.0
 */

// Wordpress Header
get_header();
while ( have_posts() ) : the_post();

// Include the page content template.
get_template_part( 'content', 'pagebuilder' );					

endwhile;
// Wordpress Footer
	get_footer();
?>