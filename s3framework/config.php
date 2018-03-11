<?php
		/* S3 Theme Configurations
		===========================================*/
		
		$this->settings['sitename'] = array(
			'title'   => __( 'Site Name' ),
			'desc'    => __( 'Type your sitename here, if its blank the default will be use. This title will also be used in footer copyright.' ),
			'std'     => '',
			'type'    => 'text',
			'section' => 'config'
		);
		
		$this->settings['s3_themes'] = array(
			'title'   => __( 'Choose Color Theme' ),
			'desc'    => __( 'You can choose your default color theme here' ),
			'std'     => 1,
			'type'    => 'select',
			'choices' => array(
							1 => 'Color 1',
							2 => 'Color 2',
							3 => 'Color 3',
							4 => 'Color 4',
							5 => 'Color 5',
							6 => 'Color 6',
							7 => 'Color 7',
							8 => 'Color 8',
							0 => 'Custom',
						 ),
			'section' => 'config'
		);

		$this->settings['s3_styles'] = array(
			'title'   => __( 'Choose Style' ),
			'desc'    => __( 'You can choose your default style here' ),
			'std'     => 1,
			'type'    => 'select',
			'choices' => array(
							1 => 'Style 1',
							2 => 'Style 2',
							3 => 'Style 3',
							4 => 'Style 4',
							5 => 'Style 5',
							6 => 'Style 6',
							7 => 'Style 7',
							8 => 'Style 8',
							9 => 'Style 9',
							10 => 'Style 10',
							0 => 'Custom',
						 ),
			'section' => 'config'
		);
		
		$this->settings['analytics_code'] = array(
			'title'   => __( 'Analytics Code' ),
			'desc'    => __( 'Copy and Paste your analytics script heres.' ),
			'std'     => '',
			'type'    => 'textarea',
			'section' => 'config'
		);
		
		$this->settings['development_mode'] = array(
			'title'   => __( 'Development Mode' ),
			'desc'    => __( 'Enable or Disable development mode for this website. When this feature is on style.less as preprocessor will be used instead of style.css' ),
			'std'     => 0,
			'type'    => 'select',
			'choices' => array(
							1 => 'Yes',
							0 => 'No',
						 ),
			'section' => 'config'
		);
		
		$this->settings['fluidContainer'] = array(
			'title'   => __( 'Fluid Layout' ),
			'desc'    => __( 'Use Fluid or Static layout (both are responsive)' ),
			'std'     => 0,
			'type'    => 'select',
			'choices' => array(
							0 => 'No',
							1 => 'Yes',
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
			'std'     => 1,
			'type'    => 'select',
			'choices' => array(
							1 => 'Yes',
							0 => 'No',
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
?>