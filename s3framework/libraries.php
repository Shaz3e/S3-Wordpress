<?php
/**
 * Libraries Option Page
 *
 * @package S3Framework
 * @since   1.0
 */
 
// All Available Options
$s3_options = array(
	'sitename' => '',
);

// Register Settings for libraries Page
function s3_libraries_register_settings(){
	register_setting(
		's3_theme_options_libraries',
		's3_options',
		's3_validation_libraries'
	);
}
add_action( 'admin_init', 's3_libraries_register_settings' );

// Theme Options Pages
function s3_theme_options_libraries(){
	global $s3_options;
	
	echo '<div class="wrap">';
	// Current Theme Name and Page Name
	echo "<h2> S3 Framework - Libraries Page</h2>";
	
	include("message.php");
	?>
	
	<form method="post" action="options.php">
    	<?php $settings = get_option( 's3_options', $s3_options ); ?>
        
		<?php settings_fields( 's3_theme_options_libraries' ); ?>
        
        <table class="form-table">
        	<tr valign="top">
            	<th scope="row"><label for="use_jquery">Use jQuery wp_enqueue</label></th>
                <td>
                	<p class="description">If you want to load jQuery as wp_enqueue select yes otherwise select no to load jquery before everything. Caution: If you are using wp_enqueue fixed header on scroll up/down won't work.</p>
                </td>
            </tr>
        	<tr valign="top">
            	<th scope="row"><label for="bootstrap">Use Bootstrap</label></th>
                <td>
                	<p class="description">Enable or Disable Bootstrap Library</p>
                </td>
            </tr>
        	<tr valign="top">
            	<th scope="row"><label for="bootstrap_theme">Use Bootstrap Theme</label></th>
                <td>
                	<p class="description">Enable or Disable Bootstrap Theme</p>
                </td>
            </tr>
        	<tr valign="top">
            	<th scope="row"><label for="font_awesome">Use Font Awesome</label></th>
                <td>
                	<p class="description">Enable or Disable Font Awesome for Icons</p>
                </td>
            </tr>
        	<tr valign="top">
            	<th scope="row"><label for="responsive_video">Responsive Video</label></th>
                <td>
                	<p class="description">Enable this library to use responsive. Example: <code>&lt;div class="s3-video"&gt;your-video-code&lt;/div&gt;</code></p>
                </td>
            </tr>
        </table>
        
        <p><?php submit_button(); ?></p>
    </form>
	
	<?php
	echo '</div>'; // .wrap
} // s3_theme_options_pages

// validation
function s3_validation_libraries($input){
	global $s3_options;
	$settings = get_option('s3_options' , $s3_options);
	$input['sitename'] = wp_filter_nohtml_kses( $input['sitename'] );
	
	return $input;
} // s3_validation_page