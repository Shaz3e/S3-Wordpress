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
<?php if(is_active_sidebar('right-sidebar')): ?>
<aside class="dc-right-sidebar">
	<div id="dc-right-sidebar">
    	<div class="dc-modules">
        	<div id="dc-modules">
            	<div class="dc-clear"></div>
                	<div class="dc-sidebar">
	                    <?php dynamic_sidebar('right-sidebar');?>
                    </div>
				<div class="dc-clear"></div>
			</div>
		</div>
	</div>
</aside>
<?php endif; ?>