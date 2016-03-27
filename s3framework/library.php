<?php
		/* Libraries Settings
		===========================================*/
		
		$this->settings['LocalCDN'] = array(
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
		
		$this->settings['loadBootstrap'] = array(
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
		
		$this->settings['loadBootstrapTheme'] = array(
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
		
		$this->settings['loadFontAwesome'] = array(
			'title'   => __( 'Use Font Awesome' ),
			'desc'    => __( 'Enable or Disable Font Awesome for Icons' ),
			'std'     => 1,
			'type'    => 'select',
			'choices' => array(
							1 => 'Yes',
							0 => 'No',
						 ),
			'section' => 'library'
		);
		
		$this->settings['loadAnimateCSS'] = array(
			'title'   => __( 'Use animate.css' ),
			'desc'    => __( 'Enable this library to use animatation in your website' ),
			'std'     => 0,
			'type'    => 'select',
			'choices' => array(
							1 => 'Yes',
							0 => 'No',
						 ),
			'section' => 'library'
		);

		$this->settings['loadResponsiveVideo'] = array(
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
?>