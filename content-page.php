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
	<?php
		// Page thumbnail and title.
		//twentyfourteen_post_thumbnail();
		//the_title( '<header class="entry-header"><h1 class="entry-title">', '</h1></header><!-- .entry-header -->' );
	?>
    
    <?php if(!is_front_page()): ?>
        <div class="page-header">
            <h1 class="page-title"><?php the_title(); ?></h1>
        </div>
    <?php endif; ?>
    
	<div class="page-content">
		<?php
			// page content
			the_content();

			//edit_post_link( __( 'Edit', 'S3Framework' ), '<span class="edit-link">', '</span>' );
		?>
	</div><!-- .page-content -->
    
</div><!-- #post-## -->
