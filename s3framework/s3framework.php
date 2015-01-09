<?php
/**
 * S3 Framework Option Page
 *
 * @package S3Framework
 * @since   1.0
 */

if( is_admin() ):
	// Create Menu items for all pages
	function s3_theme_options(){
		add_theme_page( 'Style', 'Style', 'edit_theme_options', 'style', 's3_theme_options_style' );
		add_theme_page( 'Libraries', 'Libraries', 'edit_theme_options', 'libraries', 's3_theme_options_libraries' );
		add_theme_page( 'Layout Settings', 'Layout Settings', 'edit_theme_options', 'layout_settings', 's3_theme_options_layout_settings' );
		add_theme_page( 'Theme Configuration', 'Theme Configuration', 'edit_theme_options', 'configuration', 's3_theme_options_configuration' );
		add_theme_page( 'S3 Framework', 'S3 Framework', 'edit_theme_options', 's3framework', 's3_framework' );
	}
	add_action( 'admin_menu', 's3_theme_options' );
	
	// include all files
	require_once( "style.php" );
	require_once( "libraries.php" );
	require_once( "layout_settings.php" );
	require_once( "configuration.php" );
	
	// Register Settings for Style Page
	function s3framework_register_settings(){
		register_setting(
			's3framework',
			's3_options'
		);
	}
	add_action( 'admin_init', 's3framework_register_settings' );

// Theme Options Pages
function s3_framework(){
	
	echo '<div class="wrap">';

	echo "<h2>About S3 Framework</h2>";
	
	include("message.php");
	include("s3.php");
	echo '</div>'; // .wrap
} // s3_framework
	
endif; // is_admin()
