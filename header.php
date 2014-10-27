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
<?php require_once("s3tools/s3_tools.php"); ?>
<body <?php body_class('dc-wrapper' ); ?>>

<?php if(is_active_sidebar('top-left-panel')) :?>
    <div class="top-left-panel">
        <div id="top-left-panel">
	    	<?php dynamic_sidebar('top-left-panel'); ?>
        </div>
    </div>
<?php endif; ?>

<?php if(is_active_sidebar('top-right-panel')) :?>
    <div class="top-right-panel">
        <div id="top-right-panel">
            <?php dynamic_sidebar('top-right-panel'); ?>
        </div>
    </div>
<?php endif; ?>

<?php if(is_active_sidebar('left-panel')) :?>
	<div class="left-panel">
    	<div id="left-panel">
            <?php dynamic_sidebar('left-panel'); ?>
		</div>
	</div>
<?php endif; ?>

<?php if(is_active_sidebar('right-panel')) :?>
    <div class="right-panel">
        <div id="right-panel">
            <?php dynamic_sidebar('right-panel'); ?>
        </div>
    </div>
<?php endif; ?>

<?php if(is_active_sidebar('bottom-left-panel')) :?>
	<div class="bottom-left-panel">
    	<div id="bottom-left-panel">
            <?php dynamic_sidebar('bottom-left-panel'); ?>
		</div>
	</div>
<?php endif; ?>

<?php if(is_active_sidebar('bottom-right-panel')) :?>
    <div class="bottom-right-panel">
        <div id="bottom-right-panel">
            <?php dynamic_sidebar('bottom-right-panel'); ?>
        </div>
    </div>
<?php endif; ?>


<?php
	include_once("blocks/topleftright.php");
	include_once("blocks/top.php");
?>

<section class="dc-header">
	<div id="dc-header">
    	<div class="dc-modules">
        	<div id="dc-modules">
                <div class="dc-clear"></div>
                	<div class="dc-logo">
                    	<a href="<?php echo bloginfo('url'); ?>" title="<?php echo bloginfo('name'); ?>">
                        	<img src="<?php echo $dcTemplate; ?>/themes/style1/images/logo.png" alt="<?php echo bloginfo('name'); ?>">
                        </a>
                    </div>
                    <?php include_once("blocks/header.php"); ?>
                    <?php // include_once(""); ?>
                <div class="dc-clear"></div>
            </div>
        </div>
    </div>
</section>

<?php
	include_once("blocks/menu.php");
	include_once("blocks/breadcrumb.php");
	include_once("blocks/slideshow.php");
	include_once("blocks/showcase.php");
	include_once("blocks/feature.php");
?>

<section class="dc-container">
<div class="dc-clear"></div>
	<div id="dc-container">
    <div class="dc-clear"></div>


		<?php
			// call left sidebar if left-sidebar is enabled but template page is not active
			if(!is_page_template('layouts/full-width.php') && !is_page_template('layouts/2-columns-right-sidebar.php')){
				include_once("blocks/left.php");
			}
		?>
        
	<?php
		// If page template is called do the trick
		if(is_page_template('layouts/3-columns.php')):
			echo '<section class="dc-componentLeftRight">';
			
			elseif(is_page_template('layouts/2-columns-left-sidebar.php')):
				echo '<section class="dc-componentLeft">';
				
				elseif(is_page_template('layouts/2-columns-right-sidebar.php')):
					echo '<section class="dc-componentLeft">';
					
					elseif(is_page_template('layouts/full-width.php')):
						echo '<section class="dc-componentFull">';
						
						else:
	?>
        
		<?php
			if(is_active_sidebar('left-sidebar') && is_active_sidebar('right-sidebar') && 
				!is_page_template('layouts/full-width.php')){
				
				echo '<section class="dc-componentLeftRight">';
				
			}elseif(is_active_sidebar('left-sidebar') && !is_active_sidebar('right-sidebar')){
				
				echo '<section class="dc-componentLeft">';
				
			}elseif(!is_active_sidebar('left-sidebar') && is_active_sidebar('right-sidebar')){
					
				echo '<section class="dc-componentRight">';
				
			}else{
				echo '<section class="dc-componentFull">';
			}
		?>
	<?php endif; // if(is_page_template()) ?>
        
        <div id="dc-component">
            <article>
				<?php
					// content top sidebar if enabled
                	include_once("blocks/contentTop.php");
				?>
