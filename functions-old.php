<?php
if ( file_exists( STYLESHEETPATH . '/s3tools/class.s3-options.php' ) ) {
	require_once( STYLESHEETPATH . '/s3tools/class.s3-options.php' );
}

// if ( function_exists('register_sidebars') )
	// register_sidebars(6);
	
if ( function_exists('register_sidebar') ) {
	register_sidebar( array(
		'name' => __( 'Slideshow 1', 'shaz3e' ),
		'id' => 'slideshow-1',
		'description' => __( 'Description', 'shaz3e' ),
		'before_widget' => '<div id="%1$s" class="dc-block %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	) );
	
	register_sidebar( array(
		'name' => __( 'Slideshow 2', 'shaz3e' ),
		'id' => 'slideshow-2',
		'description' => __( 'Description', 'shaz3e' ),
		'before_widget' => '<div id="%1$s" class="dc-block %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	) );
	
	register_sidebar( array(
		'name' => __( 'Slideshow 3', 'shaz3e' ),
		'id' => 'slideshow-3',
		'description' => __( 'Description', 'shaz3e' ),
		'before_widget' => '<div id="%1$s" class="dc-block %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	) );
	
	register_sidebar( array(
		'name' => __( 'Slideshow 4', 'shaz3e' ),
		'id' => 'slideshow-4',
		'description' => __( 'Description', 'shaz3e' ),
		'before_widget' => '<div id="%1$s" class="dc-block %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	) );
	
	register_sidebar( array(
		'name' => __( 'Slideshow 5', 'shaz3e' ),
		'id' => 'slideshow-5',
		'description' => __( 'Description', 'shaz3e' ),
		'before_widget' => '<div id="%1$s" class="dc-block %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	) );
	
	register_sidebar( array(
		'name' => __( 'Slideshow 6', 'shaz3e' ),
		'id' => 'slideshow-6',
		'description' => __( 'Description', 'shaz3e' ),
		'before_widget' => '<div id="%1$s" class="dc-block %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	) );
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