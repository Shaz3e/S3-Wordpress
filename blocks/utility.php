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
		is_active_sidebar('utility-top') || 
		is_active_sidebar('utility') || 
		is_active_sidebar('utility-grid') || 
		is_active_sidebar('utility-bottom')
	):
?>
<section class="dc-utility dc-clear" id="dc-utility">
	
    <?php
    	//Full width sidebar
    	dynamic_sidebar('utility-top'); ?>
    
	<?php 
		// Columns & Grids Sidebars
		if(
			is_active_sidebar('utility') || 
			is_active_sidebar('utility-grid')
		): 
	?>
	<div class="row">
		<?php
			// columns
            dynamic_sidebar('utility');
			
			// blocks
            dynamic_sidebar('utility-grid');
        ?>
    </div>
    <?php endif; ?>
    
    <?php 
		// Full width sidebar
		dynamic_sidebar('utility-bottom'); ?>
        
</section>
<?php endif; ?>