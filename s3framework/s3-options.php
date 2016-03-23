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
		
		$this->sections['about'] = __( 'About S3 Framework' );
		$this->sections['config'] = __( 'S3 Theme Configurations' );
		$this->sections['typography'] = __( 'Typegraphy' );
		$this->sections['headers'] = __( 'Header Settings' );
		$this->sections['s3cc'] = __( 'CC Settings' );
		$this->sections['layout'] = __( 'Layout Settings' );
		$this->sections['library'] = __( 'External Libraries' );
		$this->sections['reset'] = __( 'Reset to Defaults' );
		
		add_action( 'admin_menu', array( &$this, 'add_pages' ) );
		add_action( 'admin_init', array( &$this, 'register_settings' ) );
		add_action( 'admin_enqueue_scripts', array( &$this, 's3_enqueue_color_picker' ) );

		if ( ! get_option( 's3_theme_options' ) )
			$this->initialize_settings();
		
	}
	
	/**
	 * Add color picker enqueue
	 *
	 * @since 2.0
	 * Credits: dingo_d
	 * https://github.com/Shaz3e/S3-Wordpress/pull/1
	 * https://github.com/Shaz3e/S3-Wordpress/pull/2
	 */
	public function s3_enqueue_color_picker( $hook_suffix ) {
	    // first check that $hook_suffix is appropriate for your admin page
	    if ( $hook_suffix == 'toplevel_page_s3-theme-options' ) {
	        wp_enqueue_style( 'wp-color-picker' );
	        wp_enqueue_script( 'my-script-handle', get_template_directory_uri() . '/s3framework/assets/options.js', array('wp-color-picker'), false, true );
	    }
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
		include(TEMPLATEPATH  . "/s3framework/assets/tabs.php");
		include(TEMPLATEPATH  . "/s3framework/assets/js.php");
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
		include(TEMPLATEPATH  . "/s3framework/about.php");
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
				
			case 'number':
			default:
		 		echo '<input class="regular-text' . $field_class . '" type="number" id="' . $id . '" name="s3_theme_options[' . $id . ']" placeholder="' . $std . '" value="' . esc_attr( $options[$id] ) . '" />';
		 		
		 		if ( $desc != '' )
		 			echo '<p class="description">' . $desc . '</p>';
		 		
		 		break;
				
			case 'site_logo':
			default:
		 		echo '<input 
					class="regular-text' . $field_class . '" 
					type="text" 
					id="' . $id . '" 
					name="s3_theme_options[' . $id . ']" 
					placeholder="' . $std . '" 
					value="' . esc_attr( $options[$id] ) . '" />';
					
				echo '<input id="s3_site_logo_btn" class="button" type="button" value="Upload Image" />';
		 		
		 		if ( $desc != '' )
		 			echo '<p class="description">' . $desc . '</p>';
		 		
		 		break;
				
			case 'footer_logo':
			default:
		 		echo '<input 
					class="regular-text' . $field_class . '" 
					type="text" 
					id="' . $id . '" 
					name="s3_theme_options[' . $id . ']" 
					placeholder="' . $std . '" 
					value="' . esc_attr( $options[$id] ) . '" />';
					
				echo '<input id="s3Framework_custom_logo_btn" class="button" type="button" value="Upload Image" />';
		 		
		 		if ( $desc != '' )
		 			echo '<p class="description">' . $desc . '</p>';
		 		
		 		break;
				
			case 'header_text_color':
			default:
		 		echo '<input 
					class="regular-text' . $field_class . '" 
					type="text" 
					id="' . $id . '" 
					name="s3_theme_options[' . $id . ']" 
					placeholder="' . $std . '" 
					value="';
						echo ( esc_attr( $options[$id] ) );
					echo '" />';
		 		
		 		if ( $desc != '' )
		 			echo '<p class="description">' . $desc . '</p>';
		 		
		 		break;
				
			case 'header_background_color':
			default:
		 		echo '<input 
					class="regular-text' . $field_class . '" 
					type="text" 
					id="' . $id . '" 
					name="s3_theme_options[' . $id . ']" 
					placeholder="' . $std . '" 
					value="';
						echo ( esc_attr( $options[$id] ) );
					echo '" />';
		 		
		 		if ( $desc != '' )
		 			echo '<p class="description">' . $desc . '</p>';
		 		
		 		break;
				
			case 's3cc_text_color':
			default:
		 		echo '<input 
					class="regular-text' . $field_class . '" 
					type="text" 
					id="' . $id . '" 
					name="s3_theme_options[' . $id . ']" 
					placeholder="' . $std . '" 
					value="';
						echo ( esc_attr( $options[$id] ) );
					echo '" />';
		 		
		 		if ( $desc != '' )
		 			echo '<p class="description">' . $desc . '</p>';
		 		
		 		break;
				
			case 's3cc_background_color':
			default:
		 		echo '<input 
					class="regular-text' . $field_class . '" 
					type="text" 
					id="' . $id . '" 
					name="s3_theme_options[' . $id . ']" 
					placeholder="' . $std . '" 
					value="';
						echo ( esc_attr( $options[$id] ) );
					echo '" />';
		 		
		 		if ( $desc != '' )
		 			echo '<p class="description">' . $desc . '</p>';
		 		
		 		break;
				
			case 's3cc_link_color':
			default:
		 		echo '<input 
					class="regular-text' . $field_class . '" 
					type="text" 
					id="' . $id . '" 
					name="s3_theme_options[' . $id . ']" 
					placeholder="' . $std . '" 
					value="';
						echo ( esc_attr( $options[$id] ) );
					echo '" />';
		 		
		 		if ( $desc != '' )
		 			echo '<p class="description">' . $desc . '</p>';
		 		
		 		break;
				
			case 's3cc_link_hover_color':
			default:
		 		echo '<input 
					class="regular-text' . $field_class . '" 
					type="text" 
					id="' . $id . '" 
					name="s3_theme_options[' . $id . ']" 
					placeholder="' . $std . '" 
					value="';
						echo ( esc_attr( $options[$id] ) );
					echo '" />';
		 		
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
		include(TEMPLATEPATH  . "/s3framework/config.php");
		include(TEMPLATEPATH  . "/s3framework/typography.php");
		include(TEMPLATEPATH  . "/s3framework/headers.php");
		include(TEMPLATEPATH  . "/s3framework/s3cc.php");
		include(TEMPLATEPATH  . "/s3framework/layout.php");
		include(TEMPLATEPATH  . "/s3framework/library.php");
		
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
		wp_enqueue_media();
		wp_print_scripts( 'jquery-ui-tabs' );
	}
	
	/**
	* Styling for the theme options page
	*
	* @since 1.0
	*/
	public function styles() {
		
		wp_register_style( 'mytheme-admin', get_template_directory_uri() . '/s3framework/assets/default.css' );
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
