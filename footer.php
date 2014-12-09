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
 

		echo '</article>'; // <article> opend in header
	echo '</div>'; // <div id="page-content" class="block dc-page-content"> opened in header

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
	
    echo '</div>';


/**
 * <section class="dc-container dc-clear" id="container">
 * @since S3 Framework 1.0
 */

echo '</section>';

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

<section class="DiligentCreators dc-clear" id="DiligentCreators">
	<div class="row">
    	<div class="grid-6 dc-copyright" id="dc-copyright">
            <div class="block">
                <p>&copy; <?php echo date('Y'); ?> <a href="<?php echo bloginfo('url'); ?>" title="<?php echo bloginfo('name'); ?>"><?php echo bloginfo('name'); ?></a> | All Rights Reserved.</p>
            </div>
        </div>
        
        <div class="grid-6 dc-credits" id="dc-credits">
        	<div class="block">
            	<p>Designed &amp; Developed by <a href="http://www.diligentcreators.com" title="DiligentCreators" target="_blank">DiligentCreators</a></p>
            </div>
        </div>
        
        <div class="dc-clear"></div>
        
        <a href="http://www.shaz3e.com" class="shaz3e" id="shaz3e" target="_blank" title="Shaz3e">
        <img src="data:image/png;base64,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" alt="Shaz3e"/>
		</a>

    </div>
</section>

<?php wp_footer(); ?>
</body>
</html>