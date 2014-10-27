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
					// content bottom sidebar if enabled
                	include_once("blocks/contentBottom.php");
				?>
            </article>
        </div><?php // #dc-component ?>
        </section> <?php // section close .dc-componentLeftRight | dc-componentLeft | dc-componentRight | dc-componentFull ?>
        
        <?php
			// Call right sidebar if right-sidebar is enabled but template page is not active
			if(!is_page_template('layouts/full-width.php') && !is_page_template('layouts/2-columns-left-sidebar.php')){
				include_once("blocks/right.php");
			}
		?>
        
   	<div class="dc-clear"></div>
    </div> <?php //<div id="dc-container"> ?>
<div class="dc-clear"></div>
</section> <?php //<section class="dc-container"> ?>
<div class="dc-clear"></div>

<?php
	include_once("blocks/utility.php");
	include_once("blocks/scroller.php");
	include_once("blocks/extension.php");
	include_once("blocks/bottom.php");
	include_once("blocks/footer.php");
?>

<section class="DiligentCreators">
	<div id="DiligentCreators">
            <div class="dc-clear"></div>
            <div class="dc-credits">
                <div id="dc-credits">
                    <div class="dc-modules">
                        <div id="dc-modules">
                            <div class="dc-clear"></div>
                                <div class="dc-block">
                                    <p>Designed &amp; Developed by <a href="http://www.diligentcreators.com" title="DiligentCreators" target="_blank">DiligentCreators</a></p>
                                </div>
                            <div class="dc-clear"></div>
                        </div>
                    </div>      	
                </div>
            </div>
            <div class="dc-copyright">
                <div id="dc-copyright">
                    <div class="dc-modules">
                        <div id="dc-modules">
                            <div class="dc-clear"></div>
                                <div class="dc-block">
                                    <p>&copy; <?php echo date('Y'); ?> <a href="<?php echo bloginfo('url'); ?>" title="<?php echo bloginfo('name'); ?>"><?php echo bloginfo('name'); ?></a> | All Rights Reserved.</p>
                                </div>
                            <div class="dc-clear"></div>
                        </div>
                    </div> 
                </div>
            </div>
		<div class="dc-clear"></div>
			<a href="http://www.shaz3e.com" class="shaz3e" target="_blank" title="Shaz3e"></a>
		<div class="dc-clear"></div>
    </div>
</section>

<?php wp_footer(); ?>
</body>
</html>