<?php

/*======================================================================*\
|| #################################################################### ||
|| # Package - Joomla Template based on Shaz3e S3 Framework             ||
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

// Add pageclass from menu item
$pageclass = $app->getParams('com_content');

// Logo Params
$logoName = $this->params->get('logo');

	// Logo Image
	if($logoName){
		$logo = '<img src="'. JURI::root() . $logoName .'" alt="'. $sitetitle .'">';
	}else{
		$logo = '<img src="'.$dcTemplatePath.'/themes/'. $this->params->get('style') .'/images/logo.png'.'" alt="'.$sitetitle.'">';
	}

?>