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
		is_active_sidebar('breadcrumb-top') || 
		is_active_sidebar('breadcrumb') || 
		is_active_sidebar('breadcrumb-grid') || 
		is_active_sidebar('breadcrumb-bottom')
	):
?>
<section class="dc-breadcrumb dc-clear" id="dc-breadcrumb">
	
    <?php
    	//Full width sidebar
    	dynamic_sidebar('breadcrumb-top'); ?>
    
	<?php
		// Columns & Grids Sidebars
    	if(
			is_active_sidebar('breadcrumb') || 
			is_active_sidebar('breadcrumb-grid')
		):
	?>
	<div class="<?php echo( s3_option('fluidContainer') == 1 ? 'container-fluid' : 'row' ); ?>">
		<?php
			// columns
            dynamic_sidebar('breadcrumb');
			
			// blocks
            dynamic_sidebar('breadcrumb-grid');
        ?>
    </div>
    <?php endif; ?>
    
    <?php 
		// Full width sidebar
		dynamic_sidebar('breadcrumb-bottom'); ?>
        
</section>
<?php endif; ?>