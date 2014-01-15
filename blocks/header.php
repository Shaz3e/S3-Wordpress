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
<?php
	if (is_active_sidebar('header-1')){
		$headers["header1"] = dynamic_sidebar('header-1');
	}
	if (is_active_sidebar('header-2')){
		$headers["header2"] = dynamic_sidebar('header-2');
	}
	if (is_active_sidebar('header-3')){
		$headers["header3"] = dynamic_sidebar('header-3');
	}
	if (is_active_sidebar('header-4')){
		$headers["header4"] = dynamic_sidebar('header-4');
	}

?>