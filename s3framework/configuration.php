<?php
/**
 * Configuration Option Page
 *
 * @package S3Framework
 * @since   1.0
 */
 
// All Available Options
$s3_options = array(
	'google_analytics' => '',
);

// Register Settings for configuration Page
function s3_configuration_register_settings(){
	register_setting(
		's3_theme_options_configuration',
		's3_options',
		's3_validation_configuration'
	);
}
add_action( 'admin_init', 's3_configuration_register_settings' );

// Theme Options Pages
function s3_theme_options_configuration(){
	global $s3_options;
	
	echo '<div class="wrap">';
	// Current Theme Name and Page Name
	echo "<h2> S3 Framework - Configuration Page</h2>";
	
	include("message.php");
	?>
	
	<form method="post" action="options.php">
    	<?php $settings = get_option( 's3_options', $s3_options ); ?>
        
		<?php settings_fields( 's3_theme_options_configuration' ); ?>
        
        <table class="form-table">
        	<tr valign="top">
            	<th scope="row"><label for="google_analytics">Google Analytics</label></th>
                <td>
                	<input id="sitename" name="s3_options[google_analytics]" type="text" value="<?php esc_attr_e($settings['google_analytics']); ?>" />
                    <p class="description">Type your Google Analytic code (UA-XXXXXXXX-X) here.</p>
                </td>
            </tr>
        	<tr valign="top">
            	<th scope="row"><label for="development_mode">Development Mode</label></th>
                <td>
                	<p class="description">Enable or Disable development mode for this website. When this feature is on style.less as preprocessor will be used instead of style.css</p>
                </td>
            </tr>
        	<tr valign="top">
            	<th scope="row"><label for="hosted_cdn">Hosted on CDN</label></th>
                <td>
                	<p class="description">By disabling this feature template will use all libraries files locally.</p>
                </td>
            </tr>
        	<tr valign="top">
            	<th scope="row"><label for="meta_generator">Meta Generator</label></th>
                <td>
                	<p class="description">Type your custom meta generator text here.</p>
                </td>
            </tr>
        </table>
        
        <p><?php submit_button(); ?></p>
    </form>
	
	<?php
	echo '</div>'; // .wrap
} // s3_theme_options_pages

// validation
function s3_validation_configuration($input){
	global $s3_options;
	$settings = get_option('s3_options' , $s3_options);
	$input['sitename'] = wp_filter_nohtml_kses( $input['sitename'] );
	
	return $input;
} // s3_validation_page