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
	
function dc_top_init() {
	
	//Full width sidebar
	register_sidebar( array(
		'name' =>	__( 'Top Top', 'shaz3e' ),
		'id' => 'top-top',
		'description' => __( 'Top Top Full Width', 'shaz3e' ),
		'before_widget' => '<div id="%1$s" class="full-width block %2$s">',
		'after_widget' => '</div></div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
	
	// columns
	register_sidebar( array(
		'name' =>	__( 'Top', 'shaz3e' ),
		'id' => 'top',
		'description' => __( 'Columns will be automatically added', 'shaz3e' ),
		'before_widget' => '<div id="%1$s" class="block %2$s">',
		'after_widget' => '</div></div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
	
	// blocks
	register_sidebar( array(
		'name' =>	__( 'Top Grid', 'shaz3e' ),
		'id' => 'top-grid',
		'description' => __( 'Make sure you use custom grid blocks here', 'shaz3e' ),
		'before_widget' => '<div id="%1$s" class="block %2$s">',
		'after_widget' => '</div></div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
	
	//Full width sidebar
	register_sidebar( array(
		'name' =>	__( 'Top Bottom', 'shaz3e' ),
		'id' => 'top-bottom',
		'description' => __( 'Top Bottom Full Width', 'shaz3e' ),
		'before_widget' => '<div id="%1$s" class="full-width block %2$s">',
		'after_widget' => '</div></div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
}
add_action( 'widgets_init', 'dc_top_init' );
?>