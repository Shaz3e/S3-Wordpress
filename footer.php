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
                                    <p>&copy; <?php echo date('Y'); ?> <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"> <?php bloginfo( 'name' ); ?></a> | All Rights Reserved.</p>
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