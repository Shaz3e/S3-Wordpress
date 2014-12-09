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
?>

<?php if ( have_posts() ) : ?>

    	<div class="page-header">
			<h1>
				<?php if ( is_single() ): ?>
                		the_title();
				<?php else: ?>
                	<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
                <?php endif; ?>
            </h1>
        </div>
        
        <?php the_content(); ?>
        


<?php endif; ?>

<?php
// Wordpress Footer
	get_footer();
?>