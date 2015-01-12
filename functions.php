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
include_once( $dcTemplate . "/functions/s3_css_js.php" );

/**
 * Register S3 Framework Theme Setting Pages
 * @since 1.0
 */
//require_once( $dcTemplate . "/s3framework/s3framework.php" );
require_once( $dcTemplate . "/s3tools/s3-options.php" );

// Title Page
include_once( $dcTemplate . "/functions/s3_title.php" );

// All Sidebars functions are here
include_once( $dcTemplate . "/functions/s3_sidebars.php" );

// default S3 Framework functions to extend WP
include_once( $dcTemplate . "/functions/s3_wordpress.php" );


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
 * Hide admin tool bar for logged-in user front-end
 * disable this hook to show admin tool bar at top
 *
 * @since S3 Framework 1.0
 */
add_filter('show_admin_bar', '__return_false');

