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
 * All Sidebars related functions
 * @since S3 Wordperss 1.0
 */

/**
 * Put the first word in widget's title in span and style it in theme LESS/CSS file
 * @since S3 Wordperss 1.0
 */
 
function s3_title($title) {
    $title_parts = explode(' ', $title, 2);
    $title = '<span>'.$title_parts[0].'</span>';
    if(isset($title_parts[1])){
        $title .= ' '.$title_parts[1];
	}
    return $title;
}
add_filter('widget_title', 's3_title');

/**
 * 12 Column Grid but content-top and content-bottom has 3 columns
 * @since S3 Wordperss 1.0
 */
function dc_sidebar_params($dc_params) {
	$dc_sidebar_id = $dc_params[0]['id'];

	if (
		$dc_sidebar_id == 'top' || 
		$dc_sidebar_id == 'breadcrumb' || 
		$dc_sidebar_id == 'slideshow' || 
		$dc_sidebar_id == 'showcase' || 
		$dc_sidebar_id == 'feature' || 
		$dc_sidebar_id == 'bottom-feature' ||
		$dc_sidebar_id == 'content-top' ||
		$dc_sidebar_id == 'content-bottom' || 
		$dc_sidebar_id == 'utility' || 
		$dc_sidebar_id == 'scroller' || 
		$dc_sidebar_id == 'extension' || 
		$dc_sidebar_id == 'bottom' || 
		$dc_sidebar_id == 'footer' || 
		$dc_sidebar_id == 'bottom-footer') {

		$dc_total_widgets = wp_get_sidebars_widgets();
		$dc_sidebar_widgets = count($dc_total_widgets[$dc_sidebar_id]);
 
		/**
		 * header static (4 sidebars)
		 * @since S3 Framework 1.0
		 */
		if($dc_sidebar_id == 'header-1' || $dc_sidebar_id == 'header-2' || $dc_sidebar_id == 'header-3' || $dc_sidebar_id == 'header-4'){
			$dc_params[0]['before_widget'] = $dc_params[0]['before_widget'];
		}

		/**
		 * panel sidebars
		 * @since S3 Framework 1.0
		 */
		if($dc_sidebar_id == 'top-left-panel' || $dc_sidebar_id == 'top-right-panel' || $dc_sidebar_id == 'left-panel' || $dc_sidebar_id == 'right-panel' || $dc_sidebar_id == 'bottom-left-panel' || $dc_sidebar_id == 'bottom-right-panel'){
			$dc_params[0]['before_widget'] = $dc_params[0]['before_widget'];
		}

		/**
		 * content-top and content-bottom has 3 column sidebars
		 * @since S3 Framework 1.0
		 */
		if($dc_sidebar_id == 'content-top' || $dc_sidebar_id == 'content-bottom'){
			if($dc_sidebar_widgets > 3){
				$dc_params[0]['before_widget'] = '<div class="col-3">'.$dc_params[0]['before_widget'];
			}else{
				$dc_params[0]['before_widget'] = '<div class="col-' . $dc_sidebar_widgets.'">'.$dc_params[0]['before_widget'];
			}
		}else{
			/**
			 * all dc_sidebar_id has 12 columns
			 * @since S3 Framework 1.0
			 */
			 
			/* 
			 * less 1 column max 12 column as defined in css/template.less
			 * @since S3 Framework 1.0
			 */
			if($dc_sidebar_widgets > 12){
				/**
				 * change col-12 to default in class="col-12"
				 * default 12 columns sidebars change the number to make it default
				 * @since S3 Framework 1.0
				 */
				$dc_params[0]['before_widget'] = '<div class="col-12">'.$dc_params[0]['before_widget'];
			}else{
				$dc_params[0]['before_widget'] = '<div class="col-' . $dc_sidebar_widgets.'">'.$dc_params[0]['before_widget'];
			}
		}
	}
	return $dc_params;
}
add_filter('dynamic_sidebar_params','dc_sidebar_params');

/*
 * All Sidebars Respactive Files
 * @since S3 Framework 1.0
 */

if ( function_exists('register_sidebar') ) {
	
	register_sidebar( array(
		'name' => __( 'Left Sidebar', 'shaz3e' ),
		'id' => 'left-sidebar',
		'description' => __( 'Description', 'shaz3e' ),
		'before_widget' => '<div id="%1$s" class="block %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	) );
	
	register_sidebar( array(
		'name' => __( 'Right Sidebar', 'shaz3e' ),
		'id' => 'right-sidebar',
		'description' => __( 'Description', 'shaz3e' ),
		'before_widget' => '<div id="%1$s" class="block %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	) );
	
	/**
	 * 6 Sidebars with h3 heading hidden
	 * Positions: Abolsute of the page
	 * Top sidebars left/right
	 * Center of page left/right
	 * Bottom sidebars left/right
	 * 
	 * @since S3 Framework 1.0
	 */
	require_once("sidebars/panels.php");
	
	/**
	 * 12 Sidebars
	 * @since S3 Framework 1.0
	 */
	require_once("sidebars/top.php");
	
	/**
	 * 12 Sidebars
	 * @since S3 Framework 1.0
	 */
	require_once("sidebars/header.php");
	
	/**
	 * 12 Sidebars
	 * @since S3 Framework 1.0
	 */
	require_once("sidebars/breadcrumb.php");
	
	/**
	 * 12 Sidebars
	 * @since S3 Framework 1.0
	 */
	require_once("sidebars/slideshow.php");
	
	/**
	 * 12 Sidebars
	 * @since S3 Framework 1.0
	 */
	require_once("sidebars/showcase.php");
	
	/**
	 * 24 Sidebars
	 * Sidebar Names: feature and bottom-feature
	 * @since S3 Framework 1.0
	 */
	require_once("sidebars/feature.php");
	
	/**
	 * 3 Sidebars before post-content
	 * @since S3 Framework 1.0
	 */
	require_once("sidebars/contentTop.php");	
	
	/**
	 * 3 Sidebars after post-content
	 * @since S3 Framework 1.0
	 */
	require_once("sidebars/contentBottom.php");
	
	/**
	 * 12 Sidebars
	 * @since S3 Framework 1.0
	 */
	require_once("sidebars/utility.php");
	
	/**
	 * 12 Sidebars
	 * @since S3 Framework 1.0
	 */
	require_once("sidebars/scroller.php");
	
	/**
	 * 12 Sidebars
	 * @since S3 Framework 1.0
	 */
	require_once("sidebars/extension.php");
	
	/**
	 * 12 Sidebars
	 * @since S3 Framework 1.0
	 */
	require_once("sidebars/bottom.php");
	
	/**
	 * 24 Sidebars
	 * Sidebar Names: footer and bottom-footer
	 * @since S3 Framework 1.0
	 */
	require_once("sidebars/footer.php");
}
?>