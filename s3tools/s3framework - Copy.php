<?php

/**
 * Theme Option Page
 *
 * @package S3Framework
 * @since   1.0
 */
 
// All Available Options
$s3_options = array(
	'sitename' => '',
);


if( is_admin() ):
function s3_register_settings(){
	register_setting(
		's3_theme_options',
		's3_options',
		's3_validation_page'
	);
}
add_action( 'admin_init', 's3_register_settings' );


function s3_theme_options(){
	add_theme_page( 'Theme Options', 'Theme Options', 'edit_theme_options', 's3framework', 's3_theme_options_pages' );
}
add_action( 'admin_menu', 's3_theme_options' );

// Theme Options Pages
function s3_theme_options_pages(){
	global $s3_options;
	
	if( ! isset( $_REQUEST['updated'] ) )
	$_REQUEST['updated'] = false; // check if form has been submitted
	
	echo '<div class="wrap">';
	// Current Theme Name and Page Name
	echo "<h2>" . get_current_theme() . __( 'Theme Options' ) . "</h2>";
	
	// If the form has been sumitted this will show the save message.
	if( false !== $_REQUEST['updated'] ):
		echo '<div><p><strong>'. __e( 'Setting Saved' ) .'</strong></p></div>';
	endif;?>
	
	<form method="post" action="options.php">
    	<?php $settings = get_option( 's3_options', $s3_options ); ?>
        
		<?php settings_fields( 's3_theme_options' );
        /* This function outputs some hidden fields required by the form,
        including a nonce, a unique number used to ensure the form has been submitted from the admin page
        and not somewhere else, very important for security */ ?>
        
        <label for="sitename">Site Name</label>
        <input id="sitename" name="s3_options[sitename]" type="text" value="<?php esc_attr_e($settings['sitename']); ?>" />
        <p><input type="submit" value="Save Options" /></p>
    </form>
	
	<?php
	echo '</div>'; // .wrap
} // s3_theme_options_pages

// validation
function s3_validation_page($input){
	global $s3_options;
	$settings = get_option('s3_options' , $s3_options);
	$input['sitename'] = wp_filter_nohtml_kses( $input['sitename'] );
	
	return $input;
} // s3_validation_page




endif; // is_admin()