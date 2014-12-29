<?php
/*======================================================================*\
|| #################################################################### ||
|| # Package - Wordpress Template based on Shaz3e S3 Framework          ||
|| # Copyright (C) 2010  shaz3e.com. All Rights Reserved.               ||
|| # Authors - Shahrukh A. Kh
|| # license - PHP files are licensed under  GNU/GPL V2                 ||
|| # license - CSS  - JS - IMAGE files  are Copyrighted material        ||
|| # bound by Proprietary License of shaz3e.com                         ||
|| # for more information visit http://www.shaz3e.com/                  ||
|| # Redistribution and  modification of this software                  ||
|| # is bounded by its licenses websites - http://www.shaz3e.com        ||
|| # A project of DiligentCreators - Construcing Ideas...               ||
|| #################################################################### ||
\*======================================================================*/
	
function dc_bottom_init() {
	register_sidebar( array(
		'name' =>	__( 'Bottom', 'shaz3e' ),
		'id' => 'bottom',
		'description' => __( 'Description', 'shaz3e' ),
		'before_widget' => '<div id="%1$s" class="block %2$s">',
		'after_widget' => '</div></div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));

	register_sidebar( array(
		'name' =>	__( 'Bottom Grid', 'shaz3e' ),
		'id' => 'bottom-grid',
		'description' => __( 'Description', 'shaz3e' ),
		'before_widget' => '<div id="%1$s" class="%2$s">',
		'after_widget' => '</div></div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
}
add_action( 'widgets_init', 'dc_bottom_init' );
?>