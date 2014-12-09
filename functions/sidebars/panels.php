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
	

register_sidebar( array(
	'name' =>	__( 'Top Left Panel', 'shaz3e' ),
	'id' => 'top-left-panel',
	'description' => __( 'Fixed Sidebar at Top Left Corner', 'shaz3e' ),
	'before_widget' => '<div id="%1$s" class="block %2$s">',
	'after_widget' => '</div>',
	'before_title' => '<h3 class="dc-hidden">',
	'after_title' => '</h3>',
));

register_sidebar( array(
	'name' =>	__( 'Top Right Panel', 'shaz3e' ),
	'id' => 'top-right-panel',
	'description' => __( 'Fixed Sidebar at Top Right Corner', 'shaz3e' ),
	'before_widget' => '<div id="%1$s" class="block %2$s">',
	'after_widget' => '</div>',
	'before_title' => '<h3 class="dc-hidden">',
	'after_title' => '</h3>',
));

register_sidebar( array(
	'name' =>	__( 'Left Panel', 'shaz3e' ),
	'id' => 'left-panel',
	'description' => __( 'Fixed Sidebar at Left Center of the Page', 'shaz3e' ),
	'before_widget' => '<div id="%1$s" class="block %2$s">',
	'after_widget' => '</div>',
	'before_title' => '<h3 class="dc-hidden">',
	'after_title' => '</h3>',
));

register_sidebar( array(
	'name' =>	__( 'Right Panel', 'shaz3e' ),
	'id' => 'right-panel',
	'description' => __( 'Fixed Sidebar at Right Center of the Page', 'shaz3e' ),
	'before_widget' => '<div id="%1$s" class="block %2$s">',
	'after_widget' => '</div>',
	'before_title' => '<h3 class="dc-hidden">',
	'after_title' => '</h3>',
));

register_sidebar( array(
	'name' =>	__( 'Bottom Left Panel', 'shaz3e' ),
	'id' => 'bottom-left-panel',
	'description' => __( 'Fixed Sidebar at Bottom Left Corner', 'shaz3e' ),
	'before_widget' => '<div id="%1$s" class="block %2$s">',
	'after_widget' => '</div>',
	'before_title' => '<h3 class="dc-hidden">',
	'after_title' => '</h3>',
));

register_sidebar( array(
	'name' =>	__( 'Bottom Right Panel', 'shaz3e' ),
	'id' => 'bottom-right-panel',
	'description' => __( 'Fixed Sidebar at Bottom Right Corner', 'shaz3e' ),
	'before_widget' => '<div id="%1$s" class="block %2$s">',
	'after_widget' => '</div>',
	'before_title' => '<h3 class="dc-hidden">',
	'after_title' => '</h3>',
));

?>