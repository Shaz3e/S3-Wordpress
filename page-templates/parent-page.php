<?php
/**
 * Template Name: Parent Page
 * Display the child pages of a current parent page
 * @since S3 Framework 1.6.4
 */

// Wordpress 
get_header();

/**
 * Get all parent's sub pages (aka child pages)
 * You can get all the parameters
 * WordPress Codex for more information
 * @link https://codex.wordpress.org/Function_Reference/get_pages
 */
$s3pages = get_pages(
	array(
		'child_of' => $post->ID,
		'sort_order' => 'asc',
		'sort_column' => 'post_title',
		'post_type' => 'page',
		'post_status' => 'publish',
	)
);

/**
 * Get all pages as page
 * @param int
 */

foreach( $s3pages as $page ){
	$content = $page->post_content;
	/**
	 * Check for empty page
	 * continue;
	 * $content = apply_filters( 'the_content', $content );
	 */
	if ( ! $content )
	
?>
	<div class="s3-col-3">
    	<div class="block s3-child-pages">
        	<div class="s3-child-page-title">
            	<a href="<?php echo get_page_link( $page->ID ); ?>">
					<?php echo $page->post_title; ?>
                </a>
            </div>
            
            <div class="s3-child-page-content">
            	<?php echo $content; ?>
            </div>
            
            <div class="s3-child-page-image">
            	<?php echo get_the_post_thumbnail( $page->ID ); ?>
            </div>
        </div>
    </div>
<?php
} // foreach
				
// Wordpress Footer
get_footer();
?>