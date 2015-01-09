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


if( has_nav_menu('header-menu')){
	echo '<div class="dcHeaderMenu">';
		echo '<div id="dcToggleNavHeader" class="dcToggleNavHeader">';
			echo '<a href="#"><span>|||</span></a>';
		echo '</div>';
		echo '<div class="navHeader">';
			wp_nav_menu( array( 'theme_location' => 'header-menu' ) );
		echo '</div>';
	echo '</div>';
}else{
			
	if(is_active_sidebar('header-1')):
		echo '<div class="dc-header1">';
			dynamic_sidebar( 'header-1' ); 
		echo '</div>';
	endif;

	if(is_active_sidebar('header-2')):
		echo '<div class="dc-header2">';
			dynamic_sidebar( 'header-2' ); 
		echo '</div>';
	endif;
	
	if(is_active_sidebar('header-3')):
		echo '<div class="dc-header3">';
			dynamic_sidebar( 'header-3' ); 
		echo '</div>';
	endif;
	
	if(is_active_sidebar('header-4')):
		echo '<div class="dc-header4">';
			dynamic_sidebar( 'header-4' ); 
		echo '</div>';
	endif; 
}
?>