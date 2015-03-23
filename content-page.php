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
	/**
	 * check if the post has a Post Thumbnail assigned to it.
 	 *
 	 * @params string
 	 * @since S3 Framework 1.4
 	 */
	if ( has_post_thumbnail() ) {
		the_post_thumbnail();
	}
?>
    
    <?php if(is_front_page() || is_page_template('layouts/no-title.php')):
		
		/**
		 * No title on front page (static) or no-title layout page
		 *
		 * @since S3 Framework 1.0
		 */
        
	else: ?>
        
        <div class="page-header">
            <h1 class="page-title"><?php the_title(); ?></h1>
        </div>
        
    <?php endif; ?>
    
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
