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
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, intial-scale=1, maximum-scale=1, user-scaleable=no">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    
    <?php wp_head(); ?>
    
    <!--<script src="<?php echo $dcTemplate; ?>/js/jquery.min.js"></script> -->
    
    <link rel="stylesheet" type="text/css" href="<?php echo $dcTemplate; ?>/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $dcTemplate; ?>/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $dcTemplate; ?>/css/bootstrap-theme.css">
    
    <?php require_once("s3_styles.php"); ?>
    
    <script src="<?php echo $dcTemplate; ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo $dcTemplate; ?>/js/jquery-noconflict.js"></script>
    <script src="<?php echo $dcTemplate; ?>/js/scripts.js"></script>
    
    <!--[if lt IE 9]>
        <script src="<?php echo dcTemplate; ?>/js/html5.js"></script>
        <script src="<?php echo dcTemplate; ?>/js/respond.js"></script>
    <![endif]-->
    
    <link rel="shortcut icon" href="<?php echo $dcTemplate; ?>/images/favicon/favicon.ico">
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo $dcTemplate; ?>/images/favicon/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo $dcTemplate; ?>/images/favicon/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo $dcTemplate; ?>/images/favicon/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo $dcTemplate; ?>/images/favicon/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo $dcTemplate; ?>/images/favicon/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo $dcTemplate; ?>/images/favicon/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo $dcTemplate; ?>/images/favicon/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo $dcTemplate; ?>/images/favicon/apple-touch-icon-152x152.png">
    <link rel="icon" type="image/png" href="<?php echo $dcTemplate; ?>/images/favicon/favicon-196x196.png" sizes="196x196">
    <link rel="icon" type="image/png" href="<?php echo $dcTemplate; ?>/images/favicon/favicon-160x160.png" sizes="160x160">
    <link rel="icon" type="image/png" href="<?php echo $dcTemplate; ?>/images/favicon/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="<?php echo $dcTemplate; ?>/images/favicon/favicon-16x16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="<?php echo $dcTemplate; ?>/images/favicon/favicon-32x32.png" sizes="32x32">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?php echo $dcTemplate; ?>/images/favicon/mstile-144x144.png">
    <meta name="msapplication-config" content="<?php echo $dcTemplate; ?>/images/favicon/browserconfig.xml">
</head>