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
	'name' => __( 'Copyright', 'shaz3e' ),
	'id' => 'copyright',
	'description' => __( 'Description', 'shaz3e' ),
	'before_widget' => '<div id="%1$s" class="%2$s">',
	'after_widget' => '</div>',
	'before_title' => '<h3 class="dc-hidden">',
	'after_title' => '</h3>',
) );

register_sidebar( array(
	'name' => __( 'Credit', 'shaz3e' ),
	'id' => 'credit',
	'description' => __( 'Description', 'shaz3e' ),
	'before_widget' => '<div id="%1$s" class="%2$s">',
	'after_widget' => '</div>',
	'before_title' => '<h3 class="dc-hidden">',
	'after_title' => '</h3>',
) );

?>