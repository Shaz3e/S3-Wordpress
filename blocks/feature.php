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
		is_active_sidebar('feature-top') || 
		is_active_sidebar('feature') || 
		is_active_sidebar('feature-grid') || 
		is_active_sidebar('bottom-feature') || 
		is_active_sidebar('bottom-feature-grid') ||
		is_active_sidebar('feature-bottom')
	):
?>
<section class="dc-feature dc-clear" id="dc-feature">
	
    <?php
    	//Full width sidebar
    	dynamic_sidebar('feature-top'); ?>
    
	<?php
		// Columns & Grids Sidebars
	    if(
			is_active_sidebar('feature') || 
			is_active_sidebar('feature-grid') || 
			is_active_sidebar('bottom-feature') || 
			is_active_sidebar('bottom-feature-grid') 
		): 
	?>
	<div class="row">
		<?php
			// columns
            dynamic_sidebar('feature');
			
			// blocks
            dynamic_sidebar('feature-grid');
			
			// columns
			dynamic_sidebar('bottom-feature');
			
			// blocks
			dynamic_sidebar('bottom-feature-grid');
        ?>
    </div>
    <?php endif; ?>
    
    <?php 
		// Full width sidebar
		dynamic_sidebar('feature-bottom'); ?>
        
</section>
<?php endif; ?>