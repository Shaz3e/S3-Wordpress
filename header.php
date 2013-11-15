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
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, intial-scale=1, maximum-scale=1, user-scaleable=no">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/bootstrap-responsive.css">

<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/jquery-noconflict.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/scripts.js"></script>


<link rel="stylesheet/less" type="text/css" href="<?php echo get_template_directory_uri(); ?>/themes/style1/style.less">
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/less.js"></script>

<?php

/****************************************************************************************************
// $lessFile = get_template_directory_uri() . '/themes/style1/style.less';
// $compiledFile = get_template_directory_uri() . '/compile/style.css';
*/
include(TEMPLATEPATH .'/s3tools/lessc.inc.php');
$less = new lessc;
$less->setFormatter("compressed");
// $less->checkedCompile($lessFile , $compiledFile);
$less->checkedCompile('wp-content/themes/s3-wordpress/themes/style1/style.less', 'wp-content/themes/s3-wordpress/compile/style.css');
/****************************************************************************************************/
// get_template_part('s3tools/s3','tool');

?>


<script type="text/javascript">
	less.env = "development";
	less.watch();
</script>

<?php wp_head(); ?>
</head>
<body class="dc-wrapper">
<?php 
echo basename(basename(getcwd())); 
?>