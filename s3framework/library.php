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

		$this->settings['loadJquery'] = array(
			'title'   => __( 'Use jQuery' ),
			'desc'    => __( 'Enable or Disable jQuery. Note: for better performance disable it and use WP default jquery library.' ),
			'std'     => 1,
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

		$this->settings['loadResponsiveText'] = array(
			'title'   => __( 'Use jQuery FitText' ),
			'desc'    => __( 'FitText makes font-sizes flexible. Use this plugin on your responsive design for ratio-based resizing of your headlines.<br> Example: <code>jQuery("#responsive_headline").fitText();</code><br>More information at www.fittextjs.com<br><strong>Note: use jquery in theme_folder/js/scripts.js</strong>' ),
			'std'     => 0,
			'type'    => 'select',
			'choices' => array(
							1 => 'Yes',
							0 => 'No',
						 ),
			'section' => 'library'
		);

		$this->settings['loadLettering'] = array(
			'title'   => __( 'Use jQuery Lettering' ),
			'desc'    => __( 'a jQuery plugin for radical Web Typography.<br> HTML Markup: <code>&lt;h1 class="fancy_title">Some Title&lt;/h1&gt;</code><br>jQuery:<br>$(document).ready(function() {<br>&nbsp;&nbsp;&nbsp;&nbsp;$(".fancy_title").lettering();<br>});<br>More information at www.letteringjs.com<br><strong>Note: use jquery in theme_folder/js/scripts.js</strong>' ),
			'std'     => 0,
			'type'    => 'select',
			'choices' => array(
							1 => 'Yes',
							0 => 'No',
						 ),
			'section' => 'library'
		);
?>