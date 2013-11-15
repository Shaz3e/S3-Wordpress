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
?>
<script type="text/javascript" src="<?php echo $dcTemplatePath;?>/js/jquery.min.js"></script>
<jdoc:include type="head" />
<?php include_once(JPATH_ROOT . "/templates/" . $this->template . '/s3tools/s3_styles.php'); ?>
<script type="text/javascript" src="<?php echo $dcTemplatePath;?>/js/less.js"></script>
<?php if($this->params->get('developmentMode')): ?>
	<script type="text/javascript">
         less.env = "development";
         less.watch();
    </script>
<?php endif; ?>
<?php
// Google Analytics
if($this->params->get('analytics')): ?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', '<?php echo $this->params->get('analytics');?>', '<?php echo $_SERVER['HTTP_HOST']; ?>');
  ga('send', 'pageview');

</script>

<?php endif; ?>
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo $dcTemplatePath; ?>/images/favicon/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo $dcTemplatePath; ?>/images/favicon/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo $dcTemplatePath; ?>/images/favicon/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="<?php echo $dcTemplatePath; ?>/images/favicon/apple-touch-icon-57-precomposed.png">
<link rel="shortcut icon" href="<?php echo $dcTemplatePath; ?>/images/favicon/favicon.png">
<!--[if lt IE 9]>
<link href="<?php echo $dcTemplatePath; ?>/css/ie.css" type="text/css" rel="stylesheet">
<![endif]-->
<!--[if lt IE 9]><script src="<?php echo $dcTemplatePath; ?>/js/html5.js"></script><![endif]-->