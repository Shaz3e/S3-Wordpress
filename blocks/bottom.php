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
	if(
		is_active_sidebar('bottom') || 
		is_active_sidebar('bottom-grid') || 
		is_active_sidebar('bottom-top') || 
		is_active_sidebar('bottom-bottom')
	):
?>
<section class="dc-bottom dc-clear" id="dc-bottom">
	
    <?php
    	//Full width sidebar
    	dynamic_sidebar('bottom-top'); ?>
    
	<?php if(is_active_sidebar('bottom') || is_active_sidebar('bottom-grid') ): ?>
	<div class="row">
		<?php
			// columns
            dynamic_sidebar('bottom');
			
			// blocks
            dynamic_sidebar('bottom-grid');
        ?>
    </div>
    <?php endif; ?>
    
    <?php 
		// Full width sidebar
		dynamic_sidebar('bottom-bottom'); ?>
        
</section>
<?php endif; ?>