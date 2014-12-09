<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage S3Wordpress
 * @since S3 Framework 1.0
 */

// Wordpress Header
	get_header();
?>

<div class="page-header">
	<h1 class="page-title"><?php _e( 'Not Found', 'S3Framework' ); ?></h1>
</div>

<div class="page-content">
	<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'S3Framework' ); ?></p>
	<?php get_search_form(); ?>
</div><!-- .page-content -->


<?php
// Wordpress Footer
	get_footer();
?>