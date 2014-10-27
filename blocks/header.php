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


?>
<?php if(is_active_sidebar('header-1')): ?>
	<div class="dc-header1"><?php dynamic_sidebar( 'header-1' ); ?></div>
<?php endif; ?>

<?php if(is_active_sidebar('header-2')): ?>
	<div class="dc-header2"><?php dynamic_sidebar( 'header-2' ); ?></div>
<?php endif; ?>

<?php if(is_active_sidebar('header-3')): ?>
	<div class="dc-header3"><?php dynamic_sidebar( 'header-3' ); ?></div>
<?php endif; ?>

<?php if(is_active_sidebar('header-4')): ?>
	<div class="dc-header4"><?php dynamic_sidebar( 'header-4' ); ?></div>
<?php endif; ?>