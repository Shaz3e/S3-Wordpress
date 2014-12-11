<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one
 * of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query,
 * e.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage S3Wordpress
 * @since S3 Framework 1.0
 */

// Wordpress Header
get_header();

if ( have_posts() ) :
	// start loop
	while ( have_posts() ) : the_post();
?>
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
else:

	// If no content, include the "No posts found" template.
	get_template_part( 'content', 'none' );
	
endif;

// Wordpress Footer
get_footer();
?>