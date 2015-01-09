<?php
/**
 * Success Message
 *
 * @package S3Framework
 * @since   1.0
 */
 
// If the form has been sumitted this will show the save message.
if( $_GET['settings-updated'] == 'true') :
	echo '<div class="updated settings-error"><p><strong>Setting Saved</strong></p></div>';
endif;

// Style Page as Tab
if( $_GET['page'] == 'style' ){
	echo '<a href="?page=style" class="button button-disabled">Style</a> ';
}else{
	echo '<a href="?page=style" class="button button-primary">Style</a> ';
}

// Library Page as Tab
if($_GET['page'] == 'libraries'){
	echo '<a href="?page=libraries" class="button button-disabled">Library</a> ';
}else{
	echo '<a href="?page=libraries" class="button button-primary">Library</a> ';
}

// Layout Settings Page as Tab
if($_GET['page'] == 'layout_settings'){
	echo '<a href="?page=layout_settings" class="button button-disabled">Layout Settings</a> ';
}else{
	echo '<a href="?page=layout_settings" class="button button-primary">Layout Settings</a> ';
}

// Theme Configurations Page as Tab
if($_GET['page'] == 'configuration'){
	echo '<a href="?page=configuration" class="button button-disabled">Theme Configurations</a> ';
}else{
	echo '<a href="?page=configuration" class="button button-primary">Theme Configurations</a> ';
}

// About S3 Framework Page as Tab
if($_GET['page'] == 's3framework' ){
	echo '<a href="?page=s3framework" class="button button-disabled">About S3 Framework</a> ';
}else{
	echo '<a href="?page=s3framework" class="button button-primary">About S3 Framework</a> ';
}
