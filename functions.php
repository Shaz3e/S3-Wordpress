<?php
if ( file_exists( STYLESHEETPATH . '/s3tools/class.s3-options.php' ) ) {
	require_once( STYLESHEETPATH . '/s3tools/class.s3-options.php' );
}

// if ( function_exists('register_sidebars') )
	// register_sidebars(6);
	
if ( function_exists('register_sidebar') ) {
	require_once("functions/topleftright.php");
	require_once("functions/top.php");
	require_once("functions/header.php");
	require_once("functions/menu.php");
	require_once("functions/breadcrumb.php");
	require_once("functions/slideshow.php");
	require_once("functions/showcase.php");
	require_once("functions/feature.php");
	
	register_sidebar( array(
		'name' => __( 'Left Sidebar', 'shaz3e' ),
		'id' => 'left-sidebar',
		'description' => __( 'Description', 'shaz3e' ),
		'before_widget' => '<div id="%1$s" class="dc-block %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	) );
	
	register_sidebar( array(
		'name' => __( 'Right Sidebar', 'shaz3e' ),
		'id' => 'right-sidebar',
		'description' => __( 'Description', 'shaz3e' ),
		'before_widget' => '<div id="%1$s" class="dc-block %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	) );
	
	require_once("functions/utility.php");
	require_once("functions/scroller.php");
	require_once("functions/extension.php");
	require_once("functions/bottom.php");
	require_once("functions/footer.php");
	require_once("functions/bottom-footer.php");
}

/*
	function styles(){
		get_template_part('s3tools/less','css');
		$less->setFormatter("compressed");
		wp_register_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), '1.0', 'all' );
		wp_enqueue_style( 'bootstrap' );
	}
*/

	
/*
get_template_part('s3tools/less','css');
$less = new lessc;
$less->setFormatter("compressed");
$less->checkedCompile(get_template_part('less'));
*/
// Custom theme's options for S3 Wordpress
?>