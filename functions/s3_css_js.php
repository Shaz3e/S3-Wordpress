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

	/**
	 * Load Files from CDN or Locally
	 */
	if ( s3_option('LocalCDN') == 1){

		/**
		 * Load Files from CDN
		 */
	 
		// Load Font Awesome
		if( s3_option('loadFontAwesome') == 1){
			wp_enqueue_style( 'font-awesome', 'https://use.fontawesome.com/releases/v5.1.0/css/all.css', array(), '5.1.0' );
		}
		
		// Load Boostrap
		if( s3_option('loadBootstrap') == 1 ){
			wp_enqueue_style( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css', array(), '4.1.1' );
		}
		
		// Load animate.css
		if( s3_option('loadAnimateCSS') == 1 ){
			wp_enqueue_style( 'animate', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css', array(), '3.5.2' );
		}
		
		// Load jQuery
		if( s3_option('loadJquery') == 1 ){
			wp_enqueue_script( 'jquery.min', 'https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js', array(), '3.2.1' );	
		}
		
		// Load Bootstrap
		if( s3_option('loadBootstrap') == 1 ){
			wp_enqueue_script( 'jquery-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js', array(), '4.1.1' );
			wp_enqueue_script( 'jquery-bootstrap-slim', 'https://code.jquery.com/jquery-3.3.1.slim.min.js', array(), '3.3.1' );
			wp_enqueue_script( 'jquery-bootstrap-popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', array(), '1.14.3' );
		}
		
		// jQuery FitVIDS
		if( s3_option('loadResponsiveVideo') == 1 ){
			wp_enqueue_script( 'jquery-fitvids', '//cdnjs.cloudflare.com/ajax/libs/fitvids/1.1.0/jquery.fitvids.min.js', array(), '1.1' );
		}

	}else{
		/**
		 * Load Files Locally
		 */
		
		// Load Bootstrap
		if( s3_option('loadBootstrap') == 1 ){
			wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '4.0' );
		}
		
		// Load animate.css
		if( s3_option('loadAnimateCSS') == 1 ){
			wp_enqueue_style( 'animate', get_template_directory_uri() . '/css/animate.css', array(), '3.6.0' );
		}	
		
		// Add Javascripts
		if( s3_option('loadJquery') == 1 ){
			wp_enqueue_script( 'jquery.min', get_template_directory_uri() . '/js/jquery.min.js', array(), '1.11.3' );
		}
		
		// Load Bootstrap
		if( s3_option('loadBootstrap') == 1 ){
			wp_enqueue_script( 'jquery-bootstrap', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array(), '4.0' );
		}

		// Load Font Awesome
		if( s3_option('loadFontAwesome') == 1 ){
			wp_enqueue_script( 'font-awesome', get_template_directory_uri() . '/font-awesome/js/all.js', array(), '5.1.0' );
		}
		
		// jQuery FitVIDS
		if( s3_option('loadResponsiveVideo') == 1 ){
			wp_enqueue_script( 'jquery-fitvids', get_template_directory_uri() . '/js/jquery.fitvids.js', array(), '1.1' );
		}
	}

	/**
	 * load user fonts only when google fonts are disabled
	 * Google Fonts Added
	 * 
	 * @since S3 Framework 2.0
	 */
	if( s3_option('css_custom_font') == 1 ){
		wp_enqueue_style( 's3-fonts', get_template_directory_uri() . '/fonts/fonts.css', array(), '1.0' );
	}

	// load S3 Framework Responsive Menu
	if( s3_option('s3_main_menu') == 1) {
		wp_enqueue_script( 's3-menu', get_template_directory_uri() . '/js/menu.js', array(), '1.0' );
	}
	
	// load user script before closing </body> tag
	if( s3_option('search_box') == 1){
		wp_enqueue_script( 's3-search', get_template_directory_uri() . '/js/search.js', array(), '1.0' );
	}

	// jQuery FitText
	if( s3_option('loadResponsiveText') == 1 ){
		wp_enqueue_script( 'jquery-fittext', get_template_directory_uri() . '/js/jquery.fittext.js', array(), '1.2' );
	}

	// jQuery lettering
	if( s3_option('loadLettering') == 1 ){
		wp_enqueue_script( 'jquery-lettering', get_template_directory_uri() . '/js/jquery.lettering.js', array(), '0.7.0' );
	}

	// load user script before closing </body> tag
	wp_enqueue_script( 's3-script', get_template_directory_uri() . '/js/scripts.js', array(), '1.0' );
	
	/**
	 * Calls less.js and style.less files in s3tools/s3_head.php
	 * Compile *.less files to style.css 
	 * Compress s3_option('styles')/style.css file
	 *
	 * @since 1.0
	 */
	
	if( s3_option('development_mode') != 1):	
		// Compile LESS file to CSS
		if ( !class_exists( 'lessc' ) ) {
			require( get_template_directory() . '/s3tools/lessc.inc.php' );
		}
		
		$inputFileTheme  = get_template_directory() . '/themes/colors/theme'.s3_option('s3_themes').'.less';
		$inputFileStyle  = get_template_directory() . '/themes/styles/style'.s3_option('s3_styles').'.less';
		
		$outputFileTheme = get_template_directory() . '/themes/colors/theme'.s3_option('s3_themes').'.css';
		$outputFileStyle = get_template_directory() . '/themes/styles/style'.s3_option('s3_styles').'.css';
		
		$less = new lessc;
		$less->setFormatter("compressed");
		$cacheTheme = $less->cachedCompile($inputFileTheme);
		$cacheStyle = $less->cachedCompile($inputFileStyle);
		
		file_put_contents($outputFileTheme, $cacheTheme["compiled"]);
		file_put_contents($outputFileStyle, $cacheStyle["compiled"]);
		
		$FileThemeUpdated = $cacheTheme["updated"];
		$FileStyleUpdated = $cacheStyle["updated"];
		
		$cacheTheme = $less->cachedCompile($cacheTheme);
		$cacheStyle = $less->cachedCompile($cacheStyle);
		
			if ($cacheTheme["updated"] > $FileThemeUpdated) {
				file_put_contents($outputFileTheme, $cacheTheme["compiled"]);
			}
			
			if ($cacheStyle["updated"] > $FileStyleUpdated) {
				file_put_contents($outputFileStyle, $cacheStyle["compiled"]);
			}
		
		wp_enqueue_style( 's3-framework-color', get_template_directory_uri() . '/themes/colors/theme'.s3_option('s3_themes').'.css', array() );
		wp_enqueue_style( 's3-framework-style', get_template_directory_uri() . '/themes/styles/style'.s3_option('s3_styles').'.css', array() );
	endif;
	
	// load IE condistional CSS Template Files
	wp_enqueue_style( 's3framework-ie', get_template_directory_uri() . '/css/ie.css', array(), '1.0');
	wp_style_add_data( 's3framework-ie', 'conditional', 'lt IE 9' );
	
} // close s3_css_js()

add_action( 'wp_enqueue_scripts', 's3_css_js' );