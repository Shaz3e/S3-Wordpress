<?php
/*======================================================================*\
|| #################################################################### ||
|| # Package - Wordpress Template based on Shaz3e S3 Framework          ||
|| # Copyright (C) 2010  shaz3e.com. All Rights Reserved.               ||
|| # Authors - Shahrukh A. Khan (Shaz3e) and DiligentCreators           ||
|| # license - PHP files are licensed under  GNU/GPL V2                 ||
|| # license - CSS  - JS - IMAGE files  are Copyrighted material        ||
|| # bound by Proprietary License of shaz3e.com                         ||
|| # for more information visit http://www.shaz3e.com/                  ||
|| # Redistribution and  modification of this software                  ||
|| # is bounded by its licenses websites - http://www.shaz3e.com        ||
|| # A project of DiligentCreators - Construcing Ideas...               ||
|| #################################################################### ||
\*======================================================================*/

/**
 * efault S3 Framework functions to Call CSS/JS Files Accordingly.
 * 
 * @since S3 Framework 1.0
 */

function s3_css_js(){

	// Load js Files with CDN
	if( s3_option('hosted_cdn') == 1 ){
		wp_enqueue_script( 'jquery.min', 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js', array(), '1.11.3' );	
		
		// load bootstrap library
		if( s3_option('bootstrap')  == 1){
			wp_enqueue_script( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js', array(), '3.3.5' );
		}

		// load Responsive Video fitvids.js with CDN
		if( s3_option('responsive_video') == 1):
			wp_enqueue_script( 'fitvids', '//cdnjs.cloudflare.com/ajax/libs/fitvids/1.1.0/jquery.fitvids.min.js', array(), '1.1' );
		endif;
		
	// Load js File Locally
	}else{
		
		wp_enqueue_script( 'jquery.min', get_template_directory_uri() . '/js/jquery.min.js', array(), '1.11.3' );
		
		// load bootstrap library
		if( s3_option('bootstrap')  == 1){
			wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '3.3.5' );
		}
		
		// load Responsive Video fitvids.js localy
		if( s3_option('responsive_video') == 1):
			wp_enqueue_script( 'fitvids', get_template_directory_uri() . '/js/jquery.fitvids.js', array(), '1.1' );
		endif;
	}

	// load S3 Framework Responsive Menu
	wp_enqueue_script( 's3-menu', get_template_directory_uri() . '/js/menu.js', array(), '1.0' );
	
	// load user script
	wp_enqueue_script( 's3-script', get_template_directory_uri() . '/js/scripts.js', array(), '1.0' );
	
	/**
	 * Load CSS Files
	 * Files are Hosted Localy or CDN
	 * 
	 */
	
	// load font awesome library
	if( s3_option('font_awesome')  == 1){
		// load font awesome library on CDN
		if( s3_option('hosted_cdn') == 1 ){
			wp_enqueue_style( 'font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css', array(), '4.3.0' );
		}else{
		// load font awesome library locally
			wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/font-awesome/css/font-awesome.min.css', array(), '4.3.0' );
		}
	}
	
	// load bootstrap library
	if( s3_option('bootstrap')  == 1){
		// load bootstrap on CDN
		if( s3_option('hosted_cdn') == 1 ){
			wp_enqueue_style( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css', array(), '3.3.5' );
		}else{
			// load bootstrap locally
			wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), '3.3.5' );
		}
	}
	
	// load bootstrap theme library
	if( s3_option('bootstrap_theme')  == 1){
		// load bootstrap theme on CDN
		if( s3_option('hosted_cdn') == 1 ){
			wp_enqueue_style( 'bootstrap-theme', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css', array(), '3.3.5' );
		}else{
			// load bootstrap theme locally
			wp_enqueue_style( 'bootstrap-theme', get_template_directory_uri() . '/css/bootstrap-theme.css', array(), '3.3.5' );
		}
	}
	
	// load user fonts
	wp_enqueue_style( 's3-fonts', get_template_directory_uri() . '/fonts/fonts.css', array(), '1.0' );
	
	/**
	 * Calls less.js and style.less files in s3tools/s3_head.php
	 * Compile *.less files to style.css 
	 * Compress s3_option('styles')/style.css file
	 *
	 * @since 1.0
	 */
	
	if( s3_option('development_mode') != 1):	
		// Compile LESS file to CSS
		require( get_template_directory() . '/s3tools/lessc.inc.php' );
		
		$inputFile  = get_template_directory() . '/themes/style'.s3_option('styles').'/style.less';
		$outputFile = get_template_directory() . '/themes/style'.s3_option('styles').'/style.css';
		
		$less = new lessc;
		$less->setFormatter("compressed");
		$cache = $less->cachedCompile($inputFile);
		
		file_put_contents($outputFile, $cache["compiled"]);
		
		$last_updated = $cache["updated"];
		$cache = $less->cachedCompile($cache);
			if ($cache["updated"] > $last_updated) {
				file_put_contents($outputFile, $cache["compiled"]);
			}
		
		wp_enqueue_style( 's3-framework', get_template_directory_uri() . '/themes/style'.s3_option('styles').'/style.css', array() );
	endif;
	
	// load IE condistional CSS Template Files
	wp_enqueue_style( 's3framework-ie', get_template_directory_uri() . '/css/ie.css', array(), '1.0');
	wp_style_add_data( 's3framework-ie', 'conditional', 'lt IE 9' );
	
} // close s3_css_js()

add_action( 'wp_enqueue_scripts', 's3_css_js' );