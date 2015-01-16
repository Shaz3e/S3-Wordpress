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
		is_active_sidebar('footer-top') || 
		is_active_sidebar('footer') || 
		is_active_sidebar('footer-grid') || 
		is_active_sidebar('bottom-footer') || 
		is_active_sidebar('bottom-footer-grid') ||
		is_active_sidebar('footer-bottom')
	):
?>
<section class="dc-footer dc-clear" id="dc-footer">
	
    <?php
    	//Full width sidebar
    	dynamic_sidebar('footer-top'); ?>
    
	<?php 
		// Columns & Grids Sidebars
		if(
			is_active_sidebar('footer') || 
			is_active_sidebar('footer-grid') || 
			is_active_sidebar('bottom-footer') || 
			is_active_sidebar('bottom-footer-grid') 
		):
	?>
	<div class="row">
		<?php
			// columns
            dynamic_sidebar('footer');
			
			// blocks
            dynamic_sidebar('footer-grid');
			
			// columns
			dynamic_sidebar('bottom-footer');
			
			// blocks
			dynamic_sidebar('bottom-footer-grid');
        ?>
    </div>
    <?php endif; ?>
    
    <?php 
		// Full width sidebar
		dynamic_sidebar('footer-bottom'); ?>
        
</section>
<?php endif; ?>