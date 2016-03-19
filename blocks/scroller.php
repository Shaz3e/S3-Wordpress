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
		is_active_sidebar('scroller-top') || 
		is_active_sidebar('scroller') || 
		is_active_sidebar('scroller-grid') || 
		is_active_sidebar('scroller-bottom')
	):
?>
<section class="dc-scroller dc-clear" id="dc-scroller">
	
    <?php
    	//Full width sidebar
    	dynamic_sidebar('scroller-top'); ?>
    
	<?php
		// Columns & Grids Sidebars
    	if(
			is_active_sidebar('scroller') || 
			is_active_sidebar('scroller-grid')
		):
	?>
	<div class="<?php echo( s3_option('fluidContainer') == 1 ? 'container-fluid' : 'row' ); ?>">
		<?php
			// columns
            dynamic_sidebar('scroller');
			
			// blocks
            dynamic_sidebar('scroller-grid');
        ?>
    </div>
    <?php endif; ?>
    
    <?php 
		// Full width sidebar
		dynamic_sidebar('scroller-bottom'); ?>
        
</section>
<?php endif; ?>