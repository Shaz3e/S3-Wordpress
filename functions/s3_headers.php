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

/**
 * Navigations
 * @since S3 Framework 1.0
 * @var array
 */
function register_s3_menus() {
	register_nav_menus(
		array(
		  'main-menu' => __( 'Main Menu' ),
		)
	);
}
add_action( 'init', 'register_s3_menus' );

/**
 * Main Menu functions
 * @since S3 Framework 2.0
 */

function s3_main_menu(){
	echo '<div class="dcMenu">';
		echo '<div id="dcToggleNav" class="dcToggleNav">';
			echo '<a href="#"><span></span></a>';
		echo '</div>';
		
		echo '<nav>';
			wp_nav_menu( array( 'theme_location' => 'main-menu' ) );
		echo '</nav>';
	echo '</div>';
}

/**
 * Search Box in header
 * @since S3 Framework 2.0
 */
function search_box(){
	if( s3_option('search_box') == 1) { ?>
		<div class="s3-search-box">
			<?php if( s3_option('search_box_type') == 1): ?>
		        <a href="#" id="search-open"><i class="fa fa-search"></i> Search</a>
		        <div class="s3-popup" id="s3search">
		            <form id="searchform" method="get" action="<?php echo bloginfo('url'); ?>/">
		            <div class="form-group">
		                <input type="search" name="s" id="s" class="s3-search-input" placeholder="Search & Enter..." autocomplete="off">
		            </div>
		        </form>
		            <a class="s3-search-close" href="#" id="search-close"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/search-close.png"></a>
		        </div>
	    	<?php else: ?>
	            <div class="s3-search-normal">
	                <form id="searchform" method="get" action="<?php echo bloginfo('url'); ?>/">
	                    <div class="input-group add-on">
	                    	<input type="search" name="s" id="s" class="form-control s3-search-input-normal" placeholder="Search & Enter..." autocomplete="off">
	                        <div class="input-group-btn">
	                            <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
	                        </div>
	                    </div>
	                </form>
	            </div>
			<?php endif;?>
	    </div>
	<?php }
}

/**
 * Social Icons in header
 * @since S3 Framework 2.0
 */
function social_icons(){
	if( s3_option('social_icons') != '') {
    	echo '<div class="s3-social-box">';
			echo s3_option('social_icons');
		echo '</div>';
	}
}
/**
 * Support Phone Number in header
 * @since S3 Framework 2.0
 */
function phone_text(){
	if( s3_option('phone_text') != '') {
    	echo '<div class="s3-phone-box">';
			echo s3_option('phone_text');
		echo '</div>';
	}
}
/**
 * Support Email in header
 * @since S3 Framework 2.0
 */
function email_text(){
	if( s3_option('email_text') != '') {
    	echo '<div class="s3-email-box">';
			echo '<a href="mailto:'.s3_option('email_text').'">';
				echo '<i class="fa fa-envelope"></i> '.s3_option('email_text');
			echo '</a>';
		echo '</div>';
	}
}
/**
 * Call to Action in header
 * @since S3 Framework 2.0
 */
function calltoaction(){
	if( s3_option('calltoaction_text') != '') {
    	echo '<div class="s3-calltoaction-box">';
			echo s3_option('calltoaction_text');
		echo '</div>';
	}
}

/**
 * Common Function for All Sidebars for if statment
 * @since S3 Framework 2.0
 */
function is_s3_headers(){
	if(
		s3_option('phone_text') != '' || 
		s3_option('email_text') != '' || 
		s3_option('social_icons') != '' || 
		s3_option('search_box') == 1
	){
		return true;
	}
	
}