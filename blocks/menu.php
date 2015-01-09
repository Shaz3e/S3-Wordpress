
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

<?php if( has_nav_menu ('main-menu') || is_active_sidebar('menu') ): ?>
<section class="dc-menu dc-clear" id="dc-menu">
	<div class="row">
    	<?php
			if( has_nav_menu('main-menu')){ ?>
                <div class="dcMenu">
                    <div id="dcToggleNav" class="dcToggleNav">
                        <a href="#"><span>|||</span></a>
                    </div>
                    <nav>
                        <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
                    </nav>
                </div>				
		<?php
        	}else{
				dynamic_sidebar('menu');
			}
		?>
    </div>
</section>
<?php endif; ?>