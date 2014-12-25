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
 


include_once("functions/s3_title.php");
include_once("functions/s3_sidebars.php");
include_once("functions/s3_wordpress.php");
include_once("s3tools/s3_theme_options.php");

/**
 * Support Added: Type PHP Code in text widget
 * 
 * @since S3 Framework 1.0
 */
add_filter('widget_text','execute_php',100);
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
 * Hide admin tool bar for logged-in user front-end
 * disable this hook to show admin tool bar at top
 *
 * @since S3 Framework 1.0
 */
add_filter('show_admin_bar', '__return_false');


?>