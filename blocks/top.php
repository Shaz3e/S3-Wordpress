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
		is_active_sidebar('top-top') || 
		is_active_sidebar('top') || 
		is_active_sidebar('top-grid') || 
		is_active_sidebar('top-bottom')
	):
?>
<section class="dc-top dc-clear" id="dc-top">
	
    <?php
    	//Full width sidebar
    	dynamic_sidebar('top-top'); ?>
    
	<?php
		// Columns & Grids Sidebars
    	if(
			is_active_sidebar('top') || 
			is_active_sidebar('top-grid')
		): 
	?>
	<div class="<?php echo( s3_option('fluidContainer') == 1 ? 'container-fluid' : 'row' ); ?>">
		<?php
			// columns
            dynamic_sidebar('top');
			
			// blocks
            dynamic_sidebar('top-grid');
        ?>
    </div>
    <?php endif; ?>
    
    <?php 
		// Full width sidebar
		dynamic_sidebar('top-bottom'); ?>
        
</section>
<?php endif; ?>