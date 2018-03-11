<?php
/**
 * Template Name: Parent Page with Custom Fields
 * Display the child pages of a current parent page
 * @since S3 Framework 1.6.4
 */

// Wordpress 
get_header(); 


$this_page_id = $wp_query->post->ID;

	query_posts(
		array(
			'showposts' => -1, // number of pages
			'post_parent' => $this_page_id, // int
			'post_type' => 'page', // page
			'orderby' => 'rand', // sort
		)
	);
	
	while (have_posts()) { the_post();?>
    
	<div class="s3-col-3">
    	<div class="block s3-child-pages">
        	<div class="s3-child-page-title">
            	<a href="<?php the_permalink(); ?>">
					<?php the_title(); ?>
                </a>
            </div>
            
            <?php
            	/**
            	 * Custom fields
            	 * @param string
            	 */
            	get_post_meta($post->ID, 'field-name', true);
            ?>
            </div>
            
            <?php
            	/**
            	 * Page Content
            	 */
            ?>
            <div class="s3-child-page-content">
            	<?php the_content(); ?>
            </div>
            
            <?php
            	/**
            	 * Page thumbnail
            	 */
            ?>
            <div class="s3-child-page-image">
            	<?php echo get_the_post_thumbnail( $page->ID ); ?>
            </div>
        </div>
    </div>
    
	<?php } ?>

<?php				
// Wordpress Footer
get_footer();
?>
