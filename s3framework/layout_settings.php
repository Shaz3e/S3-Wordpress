<?php
/**
 * Layout Settings Option Page
 *
 * @package S3Framework
 * @since   1.0
 */
 
// All Available Options
$s3_options = array(
	'sitename' => '',
);

// Register Settings for layout_settings Page
function s3_layout_settings_register_settings(){
	register_setting(
		's3_theme_options_layout_settings',
		's3_options',
		's3_validation_layout_settings'
	);
}
add_action( 'admin_init', 's3_layout_settings_register_settings' );

// Theme Options Pages
function s3_theme_options_layout_settings(){
	global $s3_options;
		
	echo '<div class="wrap">';
	// Current Theme Name and Page Name
	echo "<h2> S3 Framework - Layout Settings Page</h2>";
	
	include("message.php");
	?>
	
	<form method="post" action="options.php">
    	<?php $settings = get_option( 's3_options', $s3_options ); ?>
        
		<?php settings_fields( 's3_theme_options_layout_settings' ); ?>
        
        <table class="form-table">
        	<tr valign="top">
            	<th scope="row"><label for="logo_column">Set Logo Column</label></th>
                <td>
                	<p class="description">Select the number of columns for logo i.e. if 3 is selected for logo columns header modules next to logo will be automatically adjusted to 9</p>
                </td>
            </tr>
        	<tr valign="top">
            	<th scope="row"><label for="sidebar_column">Set Sidebar Column</label></th>
                <td>
                	<p class="description">Select the number of columns for left/right sidebars component area will be automatically adjusted with 2 columns or 3 columns layouts</p>
                </td>
            </tr>
        	<tr valign="top">
            	<th scope="row"><label for="copyright">Show Copyright</label></th>
                <td>
                	<p class="description">You can Show or Hide copyright information here.</p>
                </td>
            </tr>
        	<tr valign="top">
            	<th scope="row"><label for="credit">Show Credit</label></th>
                <td>
                	<p class="description">You can Show or Hide credit information here.</p>
                </td>
            </tr>
        	<tr valign="top">
            	<th scope="row"><label for="s3Framework_logo">Show Framework Logo</label></th>
                <td>
                	<p class="description">You can Show or Hide Framework Logo here.</p>
                </td>
            </tr>
        	<tr valign="top">
            	<th scope="row"><label for="fixed_header">Fixed Header and Menu</label></th>
                <td>
                	<p class="description">If you want to hide/show header and Menu on scroll up/down</p>
                </td>
            </tr>
        	<tr valign="top">
            	<th scope="row"><label for="break_point">Break Point</label></th>
                <td>
                	<p class="description">Type your break point (only number) i.e. (768 for tablet) fixed header will show on larger than break point defined here.</p>
                </td>
            </tr>
        	<tr valign="top">
            	<th scope="row"><label for="enable_height">Enable Height</label></th>
                <td>
                	<p class="description">Enable Height i.e. 100 (Fixed header will be hide after scrolling down 100px).</p>
                </td>
            </tr>
        	<tr valign="top">
            	<th scope="row"><label for="ease_speed">Ease Speed</label></th>
                <td>
                	<p class="description">Define header ease slideUp/slideDown speed in millisecond default 400 ms.</p>
                </td>
            </tr>
        </table>
        
        <p><?php submit_button(); ?></p>
    </form>
	
	<?php
	echo '</div>'; // .wrap
} // s3_theme_options_pages

// validation
function s3_validation_layout_settings($input){
	global $s3_options;
	$settings = get_option('s3_options' , $s3_options);
	$input['sitename'] = wp_filter_nohtml_kses( $input['sitename'] );
	
	return $input;
} // s3_validation_page