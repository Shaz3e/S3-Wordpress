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


$app = JFactory::getApplication();
$doc = JFactory::getDocument();
//$doc =& JFactory::getDocument();
$this->language = $doc->language;
$this->direction = $doc->direction;
$dcTemplatePath = $this->baseurl.'/templates/'.$this->template;

// Sitename
$sitename = $app->getCfg('sitename');
$sitetitle = htmlspecialchars($this->params->get('sitetitle'));

// Add Stylesheets
$doc->addStyleSheet('templates/'.$this->template.'/css/bootstrap.css');
$doc->addStyleSheet('templates/'.$this->template.'/css/bootstrap-responsive.css');

// Add Javascripts
// $doc->addScript($dcTemplatePath.'/js/jquery.min.js', 'text/javascript');
$doc->addScript($dcTemplatePath.'/js/jquery-noconflict.js', 'text/javascript');
$doc->addScript($dcTemplatePath.'/js/bootstrap.min.js', 'text/javascript');
$doc->addScript($dcTemplatePath.'/js/scripts.js', 'text/javascript');

include_once(JPATH_ROOT . "/templates/" . $this->template . '/s3tools/s3_functions.php');
include_once(JPATH_ROOT . "/templates/" . $this->template . '/s3tools/s3_params.php');
include_once(JPATH_ROOT . "/templates/" . $this->template . '/s3tools/s3_blocks.php');

require "lessc.inc.php";
$less = new lessc;
$less->setFormatter("compressed");
$less->checkedCompile(JPATH_ROOT . "/templates/" . $this->template ."/themes/". $this->params->get('style') ."/style.less", JPATH_ROOT . "/templates/" . $this->template ."/compile/style.css");
?>