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
<?php if(is_active_sidebar('top-left') || is_active_sidebar('top-right')): ?>
<section class="dc-left-right">
	<div id="dc-left-right">
    	<div class="modules">
        	<div id="modules">
            	<div class="dc-clear"></div>
					<?php if(is_active_sidebar('top-left')): ?>
                    <div class="dc-modules2">
                        <div class="dc-right">
                        	<?php dynamic_sidebar( 'top-left' ); ?>
                        </div>
                    </div>
                    <?php endif; ?>
					<?php if(is_active_sidebar('top-right')): ?>
                    <div class="dc-modules2">
                        <div class="dc-left">
                        	<?php dynamic_sidebar( 'top-right' ); ?>
                        </div>
                    </div>
                    <?php endif; ?>
            	<div class="dc-clear"></div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>