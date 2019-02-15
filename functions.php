<?php
/**
 * S3 Wordpress functions and definitions
 *
 * all function file created separately to enhance in future if required
 * 
 * @package WordPress
 * @subpackage S3Wordpress
 * @since S3 Framework 1.0
 */

// default S3 Framework functions to Call CSS/JS Files Accordingly.
require ( get_template_directory() . "/functions/s3_css_js.php" );

/**
 * Register S3 Framework Theme Setting Pages
 * @since 1.0
 */
//require_once( $dcTemplate . "/s3framework/s3framework.php" );
require ( get_template_directory() . "/s3framework/s3-options.php" );

/**
 * Header's functions are here
 * @since S3 Framework 2.0
 */
require ( get_template_directory() . "/functions/s3_headers.php" );

// Title Page
require ( get_template_directory() . "/functions/s3_title.php" );

// All Sidebars functions are here
require ( get_template_directory() . "/functions/s3_sidebars.php" );

// default S3 Framework functions to extend WP
require ( get_template_directory() . "/functions/s3_wordpress.php" );

/**
 * Support Added: Type PHP Code in text widget or page/post area
 * 
 * @since S3 Framework 1.0
 */
function execute_php($html){
     if(strpos($html,"<"."?php")!==false){
          ob_start();
          eval("?".">".$html);
          $html=ob_get_contents();
          ob_end_clean();
     }
     return $html;
}

/**
 * PHP code also be include in widgets
 * 
 * @since S3 Framework 1.0
 */
add_filter('widget_text','execute_php',100);

/**
 * PHP code also be include in post/page area in text mode
 * 
 * @since S3 Framework 1.0
 */
add_filter('the_content','execute_php',2);
add_filter('the_excerpt','execute_php',2);

/**
 * Add thumbnails support
 *
 * @params string
 * @since S3 Framework 1.4
 */
add_theme_support( 'post-thumbnails' );
// default Post Thumbnail dimensions (cropped)
set_post_thumbnail_size(
	// thumbnail width
	s3_option('thumbnails_width'),
	
	// thumbnail height
	s3_option('thumbnails_height'),
	
	// Crop thumnail true/flase
	s3_option('thumbnails_crop') 
);

/**
 * Numeric Bootstrap3 Pagination
 * Default pagination function for S3Framework
 * http://www.wpbeginner.com/wp-themes/how-to-add-numeric-pagination-in-your-wordpress-theme/
 * http://getbootstrap.com/components/#pagination
 * 
 * @since S3 Framework 1.6.1
 * @updated S3 Framework 1.6.2
 */
function S3_numeric_posts_nav() {
    $pages = $query_wp->max_num_pages;
    $big = 999999999; // need an unlikely integer
    if ($pages > 1)
    {
        $page_current = max(1, get_query_var('paged'));
        echo paginate_links(array(
            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
            'format' => '?paged=%#%',
            'current' => $page_current,
            'total' => $pages,
        ));
    }
}