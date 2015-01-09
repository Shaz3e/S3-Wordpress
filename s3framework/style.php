<?php
/**
 * Style Option Page
 *
 * @package S3Framework
 * @since   1.0
 */
// Register Settings for Style Page
function s3_style_register_settings(){
	register_setting(
		's3_theme_options_style',
		's3_options',
		's3_validation_style'
	);
}

// All Available Options
$s3_options = array(
	'sitename' => '',
	'logo_image' => '',
	'choose_style' => '1',
	'show_frontpage_articles' => '1',
	'show_main_body' => '1',
	//'hide_post_area' => '0',
);

// Choose Style
$styles[0] = array(
	'value' => '',
	'label' => ''
);
$choose_style = array(
	'style1' => array(
		'value' => '1',
		'label' => 'Style 1',
	),
	'style2' => array(
		'value' => '2',
		'label' => 'Style 2',
	),
	'style3' => array(
		'value' => '3',
		'label' => 'Style 3',
	),
);

// Show Frontpage Articles
$show_frontpage_articles = array(
	'hide' => array(
		'value' => '0',
		'label' => 'No',
	),
	'show' => array(
		'value' => '1',
		'label' => 'Yes',
	),
);

// Show Frontpage Articles
$show_main_body = array(
	'hide' => array(
		'value' => '0',
		'label' => 'No',
	),
	'show' => array(
		'value' => '1',
		'label' => 'Yes',
	),
);

add_action( 'admin_init', 's3_style_register_settings' );

// Theme Options Pages
function s3_theme_options_style(){
	global $s3_options, $choose_style, $show_frontpage_articles, $show_main_body;
	
	echo '<div class="wrap">';
	// Current Theme Name and Page Name
	echo "<h2> S3 Framework - Style Page</h2>";
	
	include("message.php");
	
	?>
	
	<form method="post" action="options.php">
    	<?php $settings = get_option( 's3_options', $s3_options ); ?>
        
		<?php settings_fields( 's3_theme_options_style' ); ?>
        
        <table class="form-table">
        	<tr valign="top">
            	<th scope="row"><label for="sitename">Site Name</label></th>
                <td>
                	<input id="sitename" name="s3_options[sitename]" type="text" value="<?php esc_attr_e($settings['sitename']); ?>" />
                    <p class="description">Type your sitename here, if its blank the default will be use. This title will also be used in footer copyright.</p>
                </td>
            </tr>
        	<tr valign="top">
            	<th scope="row"><label for="logo_image">Logo Image</label></th>
                <td>
                	<input id="logo_image" name="s3_options['logo_image']" type="file" value="<?php esc_attr_e($settings['logo_image']); ?>" />
                    <?php echo $settings['logo_image']; ?>
                    <p class="description">You can use any image format as your logo</p>
                </td>
            </tr>
        	<tr valign="top">
            	<th scope="row"><label for="choose_style">Choose Style</label></th>
                <td>
                    <p class="description"><?php echo $s3_settings['choose_style']; ?> You can choose your default style here</p>
                </td>
            </tr>
        	<tr valign="top">
            	<th scope="row"><label for="show_frontpage_articles">Show Frontpage Articles</label></th>
                <td>
                	<p class="description">Show or Hide Front Page Article on Main Page if Yes Selected please enable Show main Body</p>
                </td>
            </tr>
        	<tr valign="top">
            	<th scope="row"><label for="show_main_body">Show Main Body</label></th>
                <td>
                	<p class="description">Show or Hide main body container on main page</p>
                </td>
            </tr>
            <!--
        	<tr valign="top">
            	<th scope="row"><label for="hide_post_area">Hide Page/Post Area</label></th>
                <td>
                	<p class="description">Hide Component (Body Container) on certain pages which are selected</p>
                </td>
            </tr>
            -->
        </table>
        
        
        
        <p><?php submit_button(); ?></p>
    </form>
	
	<?php
	echo '</div>'; // .wrap
} // s3_theme_options_pages

// validation
function s3_validation_style($input){
	global $s3_options, $choose_style;
	$settings = get_option('s3_options' , $s3_options);
	
	// Sitename
	$input['sitename'] = wp_filter_nohtml_kses( $input['sitename'] );
	
	// Choose Style
	$prev = $settings['choose_style'];
	// We verify if the given value exists in the categories array
	if ( !array_key_exists( $input['choose_style'], $choose_style ) )
		$input['choose_style'] = $prev;
	
	
	
	return $input;
} // s3_validation_page