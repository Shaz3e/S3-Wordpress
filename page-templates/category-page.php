<?php
/**
 * Template Name: Category Page
 * Display the posts of one category in a Page
 * for same page’s name as category’s name only 
 *
 */

// Wordpress Header
get_header(); ?>

	<?php if ( have_posts() ) : ?>
		<?php
			
			// While starts
			while ( have_posts() ) : the_post(); ?>

			<h1><?php the_title(); ?></h1>

			<?php the_content(); ?>

			<?php
				// edit link to current page
				edit_post_link( __( 'Edit', 'shaz3e.com' ), '<span class="edit-link">', '</span>' );
			?>
		<?php
			// endwhile of page
        	endwhile;
		?>

	<?php
		else:
			// if page condition is false

		endif;
		// end of if ( have_postss() )
	?>

	<?php
		// here the magic starts
		query_posts('category_name='.get_the_title().'&post_status=publish');?>

	<?php if ( have_posts() ) : ?>
	
		<?php while ( have_posts() ) : the_post(); ?>
			<h1>
				<a href="<?php the_permalink(); ?>">
					<?php the_title(); ?>
				</a>
			</h1>

			<?php the_content(); ?>
		
		<?php endwhile; ?>
	
	<?php
		else:
			// if category condition is false
	?>

	<?php endif; ?>

<?php 
// Wordpress Footer
get_footer();
?>