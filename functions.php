<?php
if ( file_exists( STYLESHEETPATH . '/s3tools/class.s3-options.php' ) ) {
	require_once( STYLESHEETPATH . '/s3tools/class.s3-options.php' );
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