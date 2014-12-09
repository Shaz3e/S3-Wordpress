<?php
/**
 * The Template for displaying search results
 *
 * @package WordPress
 * @subpackage S3Wordpress
 * @since S3 Framework 1.0
 */

// Wordpress Header
	get_header();
?>
	<?php if ( have_posts() ) : ?>
    	<div class="page-header">
        	<h1 class="page-title">
	            <?php
					// get search query
                	printf( __( 'Search Results for: %s', 'S3Framework' ), get_search_query() );
				?>
            </h1>
        </div>
        
        <?php while( have_posts() ) : the_post(); ?>

            <div class="page-header">
                <h2 class="page-title">
					<a href="<?php the_permalink(); ?>" rel="bookmark">
                    	<?php the_title(); ?>
                    </a>
                </h2>
            </div>
            
            <div class="page-content">
                <?php
                    /*
					 * page excerpt content
					 * more information about exceprt see functions/s3_wordpress.php
					 */
					the_excerpt(); 
					
					// admin edit link
					edit_post_link( __( 'Edit', 'S3Framework' ), '<span class="edit-link">', '</span>' );
                ?>
            </div><!-- .page-content -->

		<?php
				
			endwhile;
			
			// Previous/next post navigation.
			
		else:
			// If no content, include the "No posts found" template.
			get_template_part( 'content', 'none' );
		endif;
	?>

<?php
// Wordpress Footer
	get_footer();
?>