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
 * Pagination
 * Default pagination function for S3Framework
 * 
 * @since S3 Framework 1.6.1
 */
function S3_numeric_posts_nav() {

	if( is_singular() )
		return;

	global $wp_query;

	/** Stop execution if there's only 1 page */
	if( $wp_query->max_num_pages <= 1 )
		return;

	$paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
	$max   = intval( $wp_query->max_num_pages );

	/**	Add current page to the array */
	if ( $paged >= 1 )
		$links[] = $paged;

	/**	Add the pages around the current page to the array */
	if ( $paged >= 3 ) {
		$links[] = $paged - 1;
		$links[] = $paged - 2;
	}

	if ( ( $paged + 2 ) <= $max ) {
		$links[] = $paged + 2;
		$links[] = $paged + 1;
	}

	echo '<div class="pagination"><ul>' . "\n";

	/**	Previous Post Link */
	if ( get_previous_posts_link() )
		printf( '<li>%s</li>' . "\n", get_previous_posts_link() );

	/**	Link to first page, plus ellipses if necessary */
	if ( ! in_array( 1, $links ) ) {
		$class = 1 == $paged ? ' class="active"' : '';

		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );

		if ( ! in_array( 2, $links ) )
			echo '<li>…</li>';
	}

	/**	Link to current page, plus 2 pages in either direction if necessary */
	sort( $links );
	foreach ( (array) $links as $link ) {
		$class = $paged == $link ? ' class="active"' : '';
		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
	}

	/**	Link to last page, plus ellipses if necessary */
	if ( ! in_array( $max, $links ) ) {
		if ( ! in_array( $max - 1, $links ) )
			echo '<li>…</li>' . "\n";

		$class = $paged == $max ? ' class="active"' : '';
		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
	}

	/**	Next Post Link */
	if ( get_next_posts_link() )
		printf( '<li>%s</li>' . "\n", get_next_posts_link() );

	echo '</ul></div>' . "\n";

}