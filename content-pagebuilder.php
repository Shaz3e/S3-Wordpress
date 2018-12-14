<?php
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage S3Wordpress
 * @since S3 Framework 1.0
 */
 
?>
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    
	<div class="page-content">
		<?php
			// page content
			the_content();
			
			/** 
			 * edit link visisble if user is logged and has permission to edit the page
			 * 
			 * @since S3 Framework 1.0
			 */
			edit_post_link( __( 'Edit', 'S3Framework' ), '<span class="edit-link">', '</span>' );
		?>
	</div><!-- .page-content -->
    
</div><!-- #post-## -->
