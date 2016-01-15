<?php

/*
 * Template Name: Fluid Page
 * custome page template for dummy
 * @since S3 Framework 1.0
 */
 
// Wordpress Header
get_header();

	if ( have_posts() ) :
		while ( have_posts() ) : the_post(); ?>
			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				    
				    <?php if(is_page_template('layouts/no-title.php')):
						
						/**
						 * No title on front page (static) or no-title layout page
						 *
						 * @since S3 Framework 1.0
						 */
				        
					else: ?>
				        
				        <div class="page-header">
				            <h1 class="page-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
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


			</div>
		<?php endwhile;
	else :
	
		// If no content, include the "No posts found" template.
		get_template_part( 'content', 'none' );

	endif; // if ( have_posts() ) :

// Wordpress Footer
get_footer();
?>