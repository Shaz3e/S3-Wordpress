<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing div elements and other elements
 * which is opened in header file on different actions
 *
 * @package WordPress
 * @subpackage S3Wordpress
 * @since S3 Framework 1.0
 */

	/**
	 * Hide main body by selecting Layout: Without Body in page template
	 * No sidebar left/right are enabled in this layout
	 * no content-top/bottom are enabled in this layout
	 */
	if(is_page_template('layouts/no-body.php')):
		// this will not show main body
	else:
 
	/**
	 * page template no-post to hide post/page area
	 */
	if(is_page_template('layouts/no-post.php')):
		// this will not post/page area but sidebars will be enabled	
	else: 
	
		/**
		 * if no-post selected default will be display
		 */
		echo '</article>'; // <article> opend in header
	echo '</div>'; // <div id="page-content" class="block dc-page-content"> opened in header

	endif;
	

		/**
		 * content bottom sidebar if enabled
		 * @since S3 Framework 1.0
		 */
		include_once("blocks/contentBottom.php");
		
		/**
		 * is_page_template('layouts/3-columns.php') // <div class="grid-6">
		 * is_page_template('layouts/2-columns-left-sidebar.php') // <div class="grid-9">
		 * is_page_template('layouts/2-columns-right-sidebar.php') // <div class="grid-9">
		 * is_page_template('layouts/full-width.php') // <div class="grid-12">
		 * </div> close grid div for 3 column (grid-6)| 2 column (grid-9) | full width page (grid-12)
		 * @since S3 Framework 1.0
		 */
		echo '</div>'; 
		
		
		/**
		 * Call right sidebar if right-sidebar is enabled but template page is not active
		 * @since S3 Framework 1.0
		 */
		if(!is_page_template('layouts/full-width.php') && !is_page_template('layouts/2-columns-left-sidebar.php')){
			
			/**
			 * right sidebar
			 * @since S3 Framework 1.0
			 */
			include_once("blocks/right.php");
		}
	?>
    
    <?php
    	/**
		 * <div class="row">
		 * @since S3 Framework 1.0
		 */
	if( !is_page_template('layouts/page-fluid.php') ): 
	    echo '</div>';
	endif;


/**
 * <section class="dc-container dc-clear" id="container">
 * @since S3 Framework 1.0
 */

echo '</section>';

/**
 * Hide main body by selecting Layout: Without Body in page template
 * if(is_page_template('layouts/no-body.php')):
 */
endif;

	/**
	 * all sidebars after post/page container
	 * @since S3 Framework 1.0
	 */
	include_once("blocks/utility.php");
	include_once("blocks/scroller.php");
	include_once("blocks/extension.php");
	include_once("blocks/bottom.php");
	include_once("blocks/footer.php");
?>

<?php
	/**
	 * footer Styles can be selected via s3 theme option page
	 * @since S3 Framework 2.0
	 */
	include_once("s3inc/s3cc/s3cc.php");
?>

<?php
	wp_footer();
	
	// Show/Hide Scroll on Scroll Up/Down
	include(get_template_directory() . '/s3tools/s3_fixed_header.php');
?>
</body>
</html>