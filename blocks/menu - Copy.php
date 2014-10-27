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
<style type="text/css">
	.dc-menu{background:red;}
</style>
<?php
	if(
		is_active_sidebar('menu-1') ||
		is_active_sidebar('menu-2') ||
		is_active_sidebar('menu-3') ||
		is_active_sidebar('menu-4') ||
		is_active_sidebar('menu-5') ||
		is_active_sidebar('menu-6')
	):
?>
<section class="dc-menu">
	<div id="dc-menu">
    	<div class="dc-modules">
        	<div id="dc-modules">
                <div class="dc-clear"></div>
					<?php
						if(is_active_sidebar('menu-1')){
							$menus["menu1"] = "dynamic_sidebar('menu-1')";
						}
						if(is_active_sidebar('menu-2')){
							$menus["menu2"] = "dynamic_sidebar('menu-2')";
						}
						if(is_active_sidebar('menu-3')){
							$menus["menu3"] = "dynamic_sidebar('menu-3')";
						}
						if(is_active_sidebar('menu-4')){
							$menus["menu4"] = "dynamic_sidebar('menu-4')";
						}
						if(is_active_sidebar('menu-5')){
							$menus["menu5"] = "dynamic_sidebar('menu-5')";
						}
						if(is_active_sidebar('menu-6')){
							$menus["menu6"] = "dynamic_sidebar('menu-6')";
						}
					if(isset($menus)){
						$result = count($menus);
						foreach($menus as $menu){
							if($result == 6){
								echo '<div class="dc-modules6">';
									dynamic_sidebar('menu-1');
									dynamic_sidebar('menu-2');
									dynamic_sidebar('menu-3');
									dynamic_sidebar('menu-4');
									dynamic_sidebar('menu-5');
									dynamic_sidebar('menu-6');

								echo '</div>';
							}
							if($result == 5){
								echo '<div class="dc-modules5">';
									dynamic_sidebar('menu-1');
									dynamic_sidebar('menu-2');
									dynamic_sidebar('menu-3');
									dynamic_sidebar('menu-4');
									dynamic_sidebar('menu-5');
									dynamic_sidebar('menu-6');

								echo '</div>';
							}
							if($result == 4){
								echo '<div class="dc-modules4">';
									dynamic_sidebar('menu-1');
									dynamic_sidebar('menu-2');
									dynamic_sidebar('menu-3');
									dynamic_sidebar('menu-4');
									dynamic_sidebar('menu-5');
									dynamic_sidebar('menu-6');

								echo '</div>';
							}
							if($result == 3){
								echo '<div class="dc-modules3">';
									dynamic_sidebar('menu-1');
									dynamic_sidebar('menu-2');
									dynamic_sidebar('menu-3');
									dynamic_sidebar('menu-4');
									dynamic_sidebar('menu-5');
									dynamic_sidebar('menu-6');

								echo '</div>';
							}
							if($result == 2){
								echo '<div class="dc-modules2">';
									dynamic_sidebar('menu-1');
									dynamic_sidebar('menu-2');
									dynamic_sidebar('menu-3');
									dynamic_sidebar('menu-4');
									dynamic_sidebar('menu-5');
									dynamic_sidebar('menu-6');
								echo '</div>';
							}
							if($result == 1){
								echo '<div class="dc-modules1">';
									dynamic_sidebar('menu-1');
									dynamic_sidebar('menu-2');
									dynamic_sidebar('menu-3');
									dynamic_sidebar('menu-4');
									dynamic_sidebar('menu-5');
									dynamic_sidebar('menu-6');
								echo '</div>';
							}
						}
					}					
						/***************************
						dynamic_sidebar('menu-1');
                    	dynamic_sidebar('menu-2');
                    	dynamic_sidebar('menu-3');
                    	dynamic_sidebar('menu-4');
                    	dynamic_sidebar('menu-5');
                    	dynamic_sidebar('menu-6');
						/***************************/					
					?>
                <div class="dc-clear"></div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>