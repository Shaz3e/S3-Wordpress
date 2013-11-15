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


$left_right = $this->countModules('top-left') || $this->countModules('top-right');

$topModules = $this->countModules('top-1') || $this->countModules('top-2') || $this->countModules('top-3') || $this->countModules('top-4') || $this->countModules('top-5') || $this->countModules('top-6');

$modTopModules = $this->countModules('mod-top-1') || $this->countModules('mod-top-2') || $this->countModules('mod-top-3') || $this->countModules('mod-top-4') || $this->countModules('mod-top-5') || $this->countModules('mod-top-6');

$headerModules = $this->countModules('header-1') || $this->countModules('header-2') || $this->countModules('header-3') || $this->countModules('header-4') || $this->countModules('header-5') || $this->countModules('header-6');

$modHeaderModules = $this->countModules('mod-header-1') || $this->countModules('mod-header-2') || $this->countModules('mod-header-3') || $this->countModules('mod-header-4') || $this->countModules('mod-header-5') || $this->countModules('mod-header-6');

$menuModules = $this->countModules('menu-1') || $this->countModules('menu-2') || $this->countModules('menu-3') || $this->countModules('menu-4') || $this->countModules('menu-5') || $this->countModules('menu-6');

$modMenuModules = $this->countModules('mod-menu-1') || $this->countModules('mod-menu-2') || $this->countModules('mod-menu-3') || $this->countModules('mod-menu-4') || $this->countModules('mod-menu-5') || $this->countModules('mod-menu-6');

$slideshowModules = $this->countModules('slideshow-1') || 
	$this->countModules('slideshow-2') || $this->countModules('slideshow-3') || $this->countModules('slideshow-4') || $this->countModules('slideshow-5') || $this->countModules('slideshow-6');
	
$modSlideshowModules = $this->countModules('mod-slideshow-1') || 
	$this->countModules('mod-slideshow-2') || $this->countModules('mod-slideshow-3') || $this->countModules('mod-slideshow-4') || $this->countModules('mod-slideshow-5') || $this->countModules('mod-slideshow-6');
	
$showcaseModules = $this->countModules('showcase-1') || 
	$this->countModules('showcase-2') || $this->countModules('showcase-3') || $this->countModules('showcase-4') || $this->countModules('showcase-5') || $this->countModules('showcase-6');
	
$modShowcaseModules = $this->countModules('mod-showcase-1') || 
	$this->countModules('mod-showcase-2') || $this->countModules('mod-showcase-3') || $this->countModules('mod-showcase-4') || $this->countModules('mod-showcase-5') || $this->countModules('mod-showcase-6');
	
$featureModules = $this->countModules('feature-1') || 
	$this->countModules('feature-2') || $this->countModules('feature-3') || $this->countModules('feature-4') || $this->countModules('feature-5') || $this->countModules('feature-6');
	
$modFeatureModules = $this->countModules('mod-feature-1') || 
	$this->countModules('mod-feature-2') || $this->countModules('mod-feature-3') || $this->countModules('mod-feature-4') || $this->countModules('mod-feature-5') || $this->countModules('mod-feature-6');
	
$bottomFeatureModules = $this->countModules('bottom-feature-1') || 
	$this->countModules('bottom-feature-2') || $this->countModules('bottom-feature-3') || $this->countModules('bottom-feature-4') || $this->countModules('bottom-feature-5') || $this->countModules('bottom-feature-6');
	
$modBottomFeatureModules = $this->countModules('mod-bottom-feature-1') || 
	$this->countModules('mod-bottom-feature-2') || $this->countModules('mod-bottom-feature-3') || $this->countModules('mod-bottom-feature-4') || $this->countModules('mod-bottom-feature-5') || $this->countModules('mod-bottom-feature-6');
	
$breadcrumbModules = $this->countModules('breadcrumb-1') || 
	$this->countModules('breadcrumb-2') || $this->countModules('breadcrumb-3') || $this->countModules('breadcrumb-4') || $this->countModules('breadcrumb-5') || $this->countModules('breadcrumb-6');
	
$modBreadcrumbModules = $this->countModules('mod-breadcrumb-1') || 
	$this->countModules('mod-breadcrumb-2') || $this->countModules('mod-breadcrumb-3') || $this->countModules('mod-breadcrumb-4') || $this->countModules('mod-breadcrumb-5') || $this->countModules('mod-breadcrumb-6');
	
$utilityModules = $this->countModules('utility-1') || 
	$this->countModules('utility-2') || $this->countModules('utility-3') || $this->countModules('utility-4') || $this->countModules('utility-5') || $this->countModules('utility-6');
	
$modUtilityModules = $this->countModules('mod-utility-1') || 
	$this->countModules('mod-utility-2') || $this->countModules('mod-utility-3') || $this->countModules('mod-utility-4') || $this->countModules('mod-utility-5') || $this->countModules('mod-utility-6');
	
$scrollerModules = $this->countModules('scroller-1') || 
	$this->countModules('scroller-2') || $this->countModules('scroller-3') || $this->countModules('scroller-4') || $this->countModules('scroller-5') || $this->countModules('scroller-6');
	
$modScrollerModules = $this->countModules('mod-scroller-1') || 
	$this->countModules('mod-scroller-2') || $this->countModules('mod-scroller-3') || $this->countModules('mod-scroller-4') || $this->countModules('mod-scroller-5') || $this->countModules('mod-scroller-6');
	
$extensionModules = $this->countModules('extension-1') || 
	$this->countModules('extension-2') || $this->countModules('extension-3') || $this->countModules('extension-4') || $this->countModules('extension-5') || $this->countModules('extension-6');
	
$modExtensionModules = $this->countModules('mod-extension-1') || 
	$this->countModules('mod-extension-2') || $this->countModules('mod-extension-3') || $this->countModules('mod-extension-4') || $this->countModules('mod-extension-5') || $this->countModules('mod-extension-6');
	
$bottomModules = $this->countModules('bottom-1') || 
	$this->countModules('bottom-2') || $this->countModules('bottom-3') || $this->countModules('bottom-4') || $this->countModules('bottom-5') || $this->countModules('bottom-6');
	
$modBottomModules = $this->countModules('mod-bottom-1') || 
	$this->countModules('mod-bottom-2') || $this->countModules('mod-bottom-3') || $this->countModules('mod-bottom-4') || $this->countModules('mod-bottom-5') || $this->countModules('mod-bottom-6');
	
$footerModules = $this->countModules('footer-1') || 
	$this->countModules('footer-2') || $this->countModules('footer-3') || $this->countModules('footer-4') || $this->countModules('footer-5') || $this->countModules('footer-6');
	
$modFooterModules = $this->countModules('mod-footer-1') || 
	$this->countModules('mod-footer-2') || $this->countModules('mod-footer-3') || $this->countModules('mod-footer-4') || $this->countModules('mod-footer-5') || $this->countModules('mod-footer-6');
	
$bottomFooterModules = $this->countModules('bottom-footer-1') || 
	$this->countModules('bottom-footer-2') || $this->countModules('bottom-footer-3') || $this->countModules('bottom-footer-4') || $this->countModules('bottom-footer-5') || $this->countModules('bottom-footer-6');

$modBottomFooterModules = $this->countModules('mod-bottom-footer-1') || 
	$this->countModules('mod-bottom-footer-2') || $this->countModules('mod-bottom-footer-3') || $this->countModules('mod-bottom-footer-4') || $this->countModules('mod-bottom-footer-5') || $this->countModules('mod-bottom-footer-6');

?>