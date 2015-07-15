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

class s3Options {
	
	private $sections;
	private $checkboxes;
	private $settings;
	
	/**
	 * Construct
	 *
	 * @since 1.0
	 */
	public function __construct() {
		
		// This will keep track of the checkbox options for the validate_settings function.
		$this->checkboxes = array();
		$this->settings = array();
		$this->get_settings();
		
		$this->sections['config'] = __( 'S3 Theme Configurations' );
		$this->sections['library'] = __( 'Libraries Settings' );
		$this->sections['layout'] = __( 'Layout Settings' );
		$this->sections['about'] = __( 'About S3 Framework' );
		$this->sections['reset'] = __( 'Reset to Defaults' );
		
		add_action( 'admin_menu', array( &$this, 'add_pages' ) );
		add_action( 'admin_init', array( &$this, 'register_settings' ) );
		
		if ( ! get_option( 's3_theme_options' ) )
			$this->initialize_settings();
		
	}
	
	/**
	 * Add options page
	 *
	 * @since 1.0
	 */
	public function add_pages() {
		
		$admin_page = add_menu_page( __( 'S3 Framework' ), __( 'S3 Framework' ), 'manage_options', 's3-theme-options', array( &$this, 'display_page' ) );
		
		add_action( 'admin_print_scripts-' . $admin_page, array( &$this, 'scripts' ) );
		add_action( 'admin_print_styles-' . $admin_page, array( &$this, 'styles' ) );
		
	}
	
	/**
	 * Create settings field
	 *
	 * @since 1.0
	 */
	public function create_setting( $args = array() ) {
		
		$defaults = array(
			'id'      => 'default_field',
			'title'   => __( 'Default Field' ),
			'desc'    => __( 'This is a default description.' ),
			'std'     => '',
			'type'    => 'text',
			'section' => 'general',
			'choices' => array(),
			'class'   => ''
		);
			
		extract( wp_parse_args( $args, $defaults ) );
		
		$field_args = array(
			'type'      => $type,
			'id'        => $id,
			'desc'      => $desc,
			'std'       => $std,
			'choices'   => $choices,
			'label_for' => $id,
			'class'     => $class
		);
		
		if ( $type == 'checkbox' )
			$this->checkboxes[] = $id;
		
		add_settings_field( $id, $title, array( $this, 'display_setting' ), 's3-theme-options', $section, $field_args );
	}
	
	/**
	 * Display options page
	 *
	 * @since 1.0
	 */
	public function display_page() {
		
	echo '<div class="wrap">
		<div class="icon32" id="icon-options-general"></div>
	<h2>' . __( 'S3 Framework - Theme Options' ) . '</h2>';
	
		if ( isset( $_GET['settings-updated'] ) && $_GET['settings-updated'] == true )
			echo '<div class="updated fade"><p>' . __( 'Theme options updated.' ) . '</p></div>';
		
		echo '<form action="options.php" method="post">';
	
		settings_fields( 's3_theme_options' );
		echo '<div class="ui-tabs">
			<ul class="ui-tabs-nav">';
		
		foreach ( $this->sections as $section_slug => $section )
			echo '<li><a href="#' . $section_slug . '">' . $section . '</a></li>';
		
		echo '</ul>';
		do_settings_sections( $_GET['page'] );
		
		echo '</div>
		<p class="submit"><input name="Submit" type="submit" class="button-primary" value="' . __( 'Save Changes' ) . '" /></p>
		
		</form>';
	
	echo '<script type="text/javascript">
		jQuery(document).ready(function($) {
			var sections = [];';
			
			foreach ( $this->sections as $section_slug => $section )
				echo "sections['$section'] = '$section_slug';";
			
			echo 'var wrapped = $(".wrap h3").wrap("<div class=\"ui-tabs-panel\">");
			wrapped.each(function() {
				$(this).parent().append($(this).parent().nextUntil("div.ui-tabs-panel"));
			});
			$(".ui-tabs-panel").each(function(index) {
				$(this).attr("id", sections[$(this).children("h3").text()]);
				if (index > 0)
					$(this).addClass("ui-tabs-hide");
			});
			$(".ui-tabs").tabs({
				fx: { opacity: "toggle", duration: "fast" }
			});
			
			$("input[type=text], textarea").each(function() {
				if ($(this).val() == $(this).attr("placeholder") || $(this).val() == "")
					$(this).css("color", "#999");
			});
			
			$("input[type=text], textarea").focus(function() {
				if ($(this).val() == $(this).attr("placeholder") || $(this).val() == "") {
					$(this).val("");
					$(this).css("color", "#000");
				}
			}).blur(function() {
				if ($(this).val() == "" || $(this).val() == $(this).attr("placeholder")) {
					$(this).val($(this).attr("placeholder"));
					$(this).css("color", "#999");
				}
			});
			
			$(".wrap h3, .wrap table").show();
			
			// This will make the "warning" checkbox class really stand out when checked.
			// I use it here for the Reset checkbox.
			$(".warning").change(function() {
				if ($(this).is(":checked"))
					$(this).parent().css("background", "#c00").css("color", "#fff").css("fontWeight", "bold");
				else
					$(this).parent().css("background", "none").css("color", "inherit").css("fontWeight", "normal");
			});
			
			// Browser compatibility
			if ($.browser.mozilla) 
			         $("form").attr("autocomplete", "off");
		});
	</script>
</div>';
		
	}
	
	/**
	 * Description for section
	 *
	 * @since 1.0
	 */
	public function display_section() {
		// code
	}
	
	/**
	 * Description for About section
	 *
	 * @since 1.0
	 */
	public function display_about_section() {
		
		// This displays on the "About" tab. Echo regular HTML here, like so:
		echo '
			<h2>S3 Responsive Template System</h2>
			<p>Get more help and find out more at <a href="http://www.Sha3e.com">http://www.Sha3e.com</a></p>
			
			<h2>Key Features</h2>
				<ul>
					<li>Responsive Design supporting Phone, Tablets and Desktops</li>
					<li>LESS CSS auto-compilation</li>
					<li>Flexible widgets for template customization</li>
					<li>Full extensible framework architecture</li>
				</ul>
    
			<h2>S3 Framework Base Theme</h2>
			<p>The S3 Framework base theme is a clean modern responsive design that is a great place to start when building your custom S3 powered theme.</p>

			<h2>What is the S3 Responsive Framework?</h2>
			<p>S3 is a sophisticated framework with the sole intention of being the best platform to build a solid theme with. S3 takes all the lessons learned during the development of many Joomla templates Themes and distills that knowledge into a single super-flexible framework that is easy to configure, simple to extend, and powerful enough to handle anything we want to throw at it.</p>
		';

		echo '
			<iframe id="iframe2" src="http://cdn.diligentcreators.com/joomla/news.php" frameborder="0" style="overflow: hidden; height: auto; width: auto; position: absolute;" height="auto" width="auto" scrolling="no" seamless="seamless"></iframe>
		';
		
	}
	
	/**
	 * HTML output for text field
	 *
	 * @since 1.0
	 */
	public function display_setting( $args = array() ) {
		
		extract( $args );
		
		$options = get_option( 's3_theme_options' );
		
		if ( ! isset( $options[$id] ) && $type != 'checkbox' )
			$options[$id] = $std;
		elseif ( ! isset( $options[$id] ) )
			$options[$id] = 0;
		
		$field_class = '';
		if ( $class != '' )
			$field_class = ' ' . $class;
		
		switch ( $type ) {
			
			case 'heading':
				echo '</td></tr><tr valign="top"><td colspan="2"><h4>' . $desc . '</h4>';
				break;
			
			case 'checkbox':
				
				echo '<input class="checkbox' . $field_class . '" type="checkbox" id="' . $id . '" name="s3_theme_options[' . $id . ']" value="1" ' . checked( $options[$id], 1, false ) . ' /> <label for="' . $id . '">' . $desc . '</label>';
				
				break;
			
			case 'select':
				echo '<select class="select' . $field_class . '" name="s3_theme_options[' . $id . ']">';
				
				foreach ( $choices as $value => $label )
					echo '<option value="' . esc_attr( $value ) . '"' . selected( $options[$id], $value, false ) . '>' . $label . '</option>';
				
				echo '</select>';
				
				if ( $desc != '' )
					echo '<p class="description">' . $desc . '</p>';
				
				break;
			
			case 'radio':
				$i = 0;
				foreach ( $choices as $value => $label ) {
					echo '<input class="radio' . $field_class . '" type="radio" name="s3_theme_options[' . $id . ']" id="' . $id . $i . '" value="' . esc_attr( $value ) . '" ' . checked( $options[$id], $value, false ) . '> <label for="' . $id . $i . '">' . $label . '</label>';
					if ( $i < count( $options ) - 1 )
						echo '<br />';
					$i++;
				}
				
				if ( $desc != '' )
					echo '<p class="description">' . $desc . '</p>';
				
				break;
			
			case 'textarea':
				echo '<textarea class="' . $field_class . '" id="' . $id . '" name="s3_theme_options[' . $id . ']" placeholder="' . $std . '" rows="5" cols="30">' . wp_htmledit_pre( $options[$id] ) . '</textarea>';
				
				if ( $desc != '' )
					echo '<p class="description">' . $desc . '</p>';
				
				break;
			
			case 'password':
				echo '<input class="regular-text' . $field_class . '" type="password" id="' . $id . '" name="s3_theme_options[' . $id . ']" value="' . esc_attr( $options[$id] ) . '" />';
				
				if ( $desc != '' )
					echo '<p class="description">' . $desc . '</p>';
				
				break;
			
			case 'text':
			default:
		 		echo '<input class="regular-text' . $field_class . '" type="text" id="' . $id . '" name="s3_theme_options[' . $id . ']" placeholder="' . $std . '" value="' . esc_attr( $options[$id] ) . '" />';
		 		
		 		if ( $desc != '' )
		 			echo '<p class="description">' . $desc . '</p>';
		 		
		 		break;
		 	
		}
		
	}
	
	/**
	 * Settings and defaults
	 * 
	 * @since 1.0
	 */
	public function get_settings() {
		
		/* S3 Theme Configurations
		===========================================*/
		
		$this->settings['sitename'] = array(
			'title'   => __( 'Site Name' ),
			'desc'    => __( 'Type your sitename here, if its blank the default will be use. This title will also be used in footer copyright.' ),
			'std'     => '',
			'type'    => 'text',
			'section' => 'config'
		);

		$this->settings['styles'] = array(
			'title'   => __( 'Choose Your Style' ),
			'desc'    => __( 'You can choose your default style here' ),
			'std'     => 1,
			'type'    => 'select',
			'choices' => array(
							1 => 'Style 1',
							2 => 'Style 2',
							3 => 'Style 3',
						 ),
			'section' => 'config'
		);
		
		$this->settings['google_analytics'] = array(
			'title'   => __( 'Google Analytics' ),
			'desc'    => __( 'Type your Google Analytic code (UA-XXXXXXXX-X) here.' ),
			'std'     => '',
			'type'    => 'text',
			'section' => 'config'
		);
		
		$this->settings['development_mode'] = array(
			'title'   => __( 'Development Mode' ),
			'desc'    => __( 'Enable or Disable development mode for this website. When this feature is on style.less as preprocessor will be used instead of style.css' ),
			'std'     => 1,
			'type'    => 'select',
			'choices' => array(
							1 => 'Yes',
							0 => 'No',
						 ),
			'section' => 'config'
		);
		
		$this->settings['meta_generator'] = array(
			'title'   => __( 'Meta Generator' ),
			'desc'    => __( 'Type your custom meta generator text here.' ),
			'std'     => '',
			'type'    => 'text',
			'section' => 'config'
		);

		$this->settings['hide_admin_bar'] = array(
			'title'   => __( 'Hide Admin Toolbar' ),
			'desc'    => __( 'Hide admin tool bar for logged-in user at front-end.' ),
			'std'     => 0,
			'type'    => 'select',
			'choices' => array(
							1 => 'Yes',
							0 => 'No',
						 ),
			'section' => 'config'
		);
		
		$this->settings['column_grid_count'] = array(
			'title'   => __( 'Set Columns in one row' ),
			'desc'    => __( 'How many columns should be in one row. i.e. if you select 3 Columns and you have enabled 4 sidebars in one row the 4th sidebar will be in next row' ),
			'std'     => 12,
			'type'    => 'select',
			'choices' => array(
							1 => 'Column 1',
							2 => 'Column 2',
							3 => 'Column 3',
							4 => 'Column 4',
							5 => 'Column 5',
							6 => 'Column 6',
							7 => 'Column 7',
							8 => 'Column 8',
							9 => 'Column 9',
							10 => 'Column 10',
							11 => 'Column 11',
							12 => 'Column 12',
						 ),
			'section' => 'config'
		);

		$this->settings['thumbnails_width'] = array(
			'title'   => __( 'Thumbnails Width' ),
			'desc'    => __( 'Set post/page thumbnail width, e.g. 100 for 100px.' ),
			'std'     => 'auto',
			'type'    => 'text',
			'section' => 'config'
		);
		
		$this->settings['thumbnails_height'] = array(
			'title'   => __( 'Thumbnails Height' ),
			'desc'    => __( 'Set post/page thumbnail height, e.g. 100 for 100px.' ),
			'std'     => 'auto',
			'type'    => 'text',
			'section' => 'config'
		);
		
		$this->settings['thumbnails_crop'] = array(
			'title'   => __( 'Thumbnail Crop' ),
			'desc'    => __( 'Crop thumbnail?.' ),
			'std'     => 'false',
			'type'    => 'select',
			'choices' => array(
							'true' => 'Yes',
							'false' => 'No',
						 ),
			'section' => 'config'
		);

		$this->settings['excerpt_length'] = array(
			'title'   => __( 'Excerpt Length' ),
			'desc'    => __( 'Change 20 with the word count i.e. 20' ),
			'std'     => 'auto',
			'type'    => 'text',
			'section' => 'config'
		);
		
		$this->settings['excerpt_more'] = array(
			'title'   => __( 'Change Read More' ),
			'desc'    => __( 'Change excerpt read more text' ),
			'std'     => 'auto',
			'type'    => 'text',
			'section' => 'config'
		);
						
		/* Libraries Settings
		===========================================*/
		
		$this->settings['hosted_cdn'] = array(
			'title'   => __( 'Hosted on CDN' ),
			'desc'    => __( 'By disabling this feature template will use all files locally.' ),
			'std'     => 0,
			'type'    => 'select',
			'choices' => array(
							1 => 'Yes',
							0 => 'No',
						 ),
			'section' => 'library'
		);
		
		$this->settings['bootstrap'] = array(
			'title'   => __( 'Use Bootstrap' ),
			'desc'    => __( 'Enable or Disable Bootstrap Library' ),
			'std'     => 1,
			'type'    => 'select',
			'choices' => array(
							1 => 'Yes',
							0 => 'No',
						 ),
			'section' => 'library'
		);
		
		$this->settings['bootstrap_theme'] = array(
			'title'   => __( 'Use Bootstrap Theme' ),
			'desc'    => __( 'Enable or Disable Bootstrap Theme' ),
			'std'     => 0,
			'type'    => 'select',
			'choices' => array(
							1 => 'Yes',
							0 => 'No',
						 ),
			'section' => 'library'
		);
		
		$this->settings['font_awesome'] = array(
			'title'   => __( 'Use Font Awesome' ),
			'desc'    => __( 'Enable or Disable Font Awesome for Icons' ),
			'std'     => 0,
			'type'    => 'select',
			'choices' => array(
							1 => 'Yes',
							0 => 'No',
						 ),
			'section' => 'library'
		);
		
		$this->settings['responsive_video'] = array(
			'title'   => __( 'Use Responsive Video' ),
			'desc'    => __( 'Enable this library to use responsive video. Example: <code>&lt;div class="s3-video"&gt;your-video-code&lt;/div&gt;</code>' ),
			'std'     => 0,
			'type'    => 'select',
			'choices' => array(
							1 => 'Yes',
							0 => 'No',
						 ),
			'section' => 'library'
		);
		
		/* Layout Settings
		===========================================*/
		
		$this->settings['logo_column'] = array(
			'title'   => __( 'Set Logo Column' ),
			'desc'    => __( 'Select the number of columns for logo i.e. if 3 is selected for logo columns header modules next to logo will be automatically adjusted to 9' ),
			'std'     => 3,
			'type'    => 'select',
			'choices' => array(
							1 => 'Column 1',
							2 => 'Column 2',
							3 => 'Column 3',
							4 => 'Column 4',
							5 => 'Column 5',
							6 => 'Column 6',
							7 => 'Column 7',
							8 => 'Column 8',
							9 => 'Column 9',
							10 => 'Column 10',
							11 => 'Column 11',
							12 => 'Column 12',
						 ),
			'section' => 'layout'
		);
		
		$this->settings['sidebar_column'] = array(
			'title'   => __( 'Set Sidebar Column' ),
			'desc'    => __( 'Select the number of columns for left/right sidebars component area will be automatically adjusted with 2 columns or 3 columns layouts' ),
			'std'     => 3,
			'type'    => 'select',
			'choices' => array(
							1 => 'Column 1',
							2 => 'Column 2',
							3 => 'Column 3',
							4 => 'Column 4',
							5 => 'Column 5',
							6 => 'Column 6',
							7 => 'Column 7',
							8 => 'Column 8',
							9 => 'Column 9',
							10 => 'Column 10',
							11 => 'Column 11',
							12 => 'Column 12',
						 ),
			'section' => 'layout'
		);
		
		$this->settings['copyright'] = array(
			'title'   => __( 'Show Copyright' ),
			'desc'    => __( 'You can Show or Hide copyright information here.' ),
			'std'     => 1,
			'type'    => 'select',
			'choices' => array(
							1 => 'Yes',
							0 => 'No',
						 ),
			'section' => 'layout'
		);
		
		$this->settings['credit'] = array(
			'title'   => __( 'Show Credit' ),
			'desc'    => __( 'You can Show or Hide credit information here.' ),
			'std'     => 1,
			'type'    => 'select',
			'choices' => array(
							1 => 'Yes',
							0 => 'No',
						 ),
			'section' => 'layout'
		);
		
		$this->settings['s3Framework_logo'] = array(
			'title'   => __( 'Show Framework Logo' ),
			'desc'    => __( 'You can Show or Hide Framework Logo here.' ),
			'std'     => 1,
			'type'    => 'select',
			'choices' => array(
							1 => 'Yes',
							0 => 'No',
						 ),
			'section' => 'layout'
		);
		
		$this->settings['fixed_header'] = array(
			'title'   => __( 'Fixed Header and Menu' ),
			'desc'    => __( 'If you want to hide/show header and Menu on scroll up/down' ),
			'std'     => 0,
			'type'    => 'select',
			'choices' => array(
							1 => 'Yes',
							0 => 'No',
						 ),
			'section' => 'layout'
		);
		
		$this->settings['header_text_color'] = array(
			'title'   => __( 'Text Color' ),
			'desc'    => __( 'Header text color i.e. #000000' ),
			'std'     => '',
			'type'    => 'text',
			'section' => 'layout'
		);
		
		$this->settings['header_background_color'] = array(
			'title'   => __( 'Background Color' ),
			'desc'    => __( 'Header background color i.e. #ffffff' ),
			'std'     => '',
			'type'    => 'text',
			'section' => 'layout'
		);
		
		$this->settings['header_height'] = array(
			'title'   => __( 'Header Height' ),
			'desc'    => __( 'Change body top padding when using fixed header i.e. 150px' ),
			'std'     => '',
			'type'    => 'text',
			'section' => 'layout'
		);
		
		$this->settings['ease_speed'] = array(
			'title'   => __( 'Ease Speed' ),
			'desc'    => __( 'Define header ease slideUp/slideDown speed in millisecond i.e 200.' ),
			'std'     => '',
			'type'    => 'text',
			'section' => 'layout'
		);
		
		$this->settings['break_point'] = array(
			'title'   => __( 'Break Point' ),
			'desc'    => __( 'Type your break point (only number) i.e. (768 for tablet) fixed header will show on larger than break point defined here.' ),
			'std'     => '',
			'type'    => 'number',
			'section' => 'layout'
		);
		
		/* Reset
		===========================================*/
		
		$this->settings['reset_theme'] = array(
			'section' => 'reset',
			'title'   => __( 'Reset theme' ),
			'type'    => 'checkbox',
			'std'     => 0,
			'class'   => 'warning', // Custom class for CSS
			'desc'    => __( 'Check this box and click "Save Changes" below to reset theme options to their defaults.' )
		);

	}
	
	/**
	 * Initialize settings to their default values
	 * 
	 * @since 1.0
	 */
	public function initialize_settings() {
		
		$default_settings = array();
		foreach ( $this->settings as $id => $setting ) {
			if ( $setting['type'] != 'heading' )
				$default_settings[$id] = $setting['std'];
		}
		
		update_option( 's3_theme_options', $default_settings );
		
	}
	
	/**
	* Register settings
	*
	* @since 1.0
	*/
	public function register_settings() {
		
		register_setting( 's3_theme_options', 's3_theme_options', array ( &$this, 'validate_settings' ) );
		
		foreach ( $this->sections as $slug => $title ) {
			if ( $slug == 'about' )
				add_settings_section( $slug, $title, array( &$this, 'display_about_section' ), 's3-theme-options' );
			else
				add_settings_section( $slug, $title, array( &$this, 'display_section' ), 's3-theme-options' );
		}
		
		$this->get_settings();
		
		foreach ( $this->settings as $id => $setting ) {
			$setting['id'] = $id;
			$this->create_setting( $setting );
		}
		
	}
	
	/**
	* jQuery Tabs
	*
	* @since 1.0
	*/
	public function scripts() {
		
		wp_print_scripts( 'jquery-ui-tabs' );
		
	}
	
	/**
	* Styling for the theme options page
	*
	* @since 1.0
	*/
	public function styles() {
		
		wp_register_style( 'mytheme-admin', get_bloginfo( 'stylesheet_directory' ) . '/s3tools/s3-options.css' );
		wp_enqueue_style( 'mytheme-admin' );
		
	}
	
	/**
	* Validate settings
	*
	* @since 1.0
	*/
	public function validate_settings( $input ) {
		
		if ( ! isset( $input['reset_theme'] ) ) {
			$options = get_option( 's3_theme_options' );
			
			foreach ( $this->checkboxes as $id ) {
				if ( isset( $options[$id] ) && ! isset( $input[$id] ) )
					unset( $options[$id] );
			}
			
			return $input;
		}
		return false;
		
	}
	
}

$theme_options = new s3Options();

function s3_option( $option ) {
	$options = get_option( 's3_theme_options' );
	if ( isset( $options[$option] ) )
		return $options[$option];
	else
		return false;
}
?>