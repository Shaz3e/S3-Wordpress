<?php

		/* Copyright & Credit Settings
		===========================================*/

		$this->settings['s3cc_style'] = array(
			'title'   => __( 'Change Style' ),
			'desc'    => __( 'Select the Copyright & Credit styles to use through out the website.' ),
			'std'     => 0,
			'type'    => 'select',
			'choices' => array(
							0 => 'Default',
							1 => 'Style 1',
							2 => 'Style 2',
						 ),
			'section' => 's3cc'
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
			'section' => 's3cc'
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
			'section' => 's3cc'
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
			'section' => 's3cc'
		);
		
		$this->settings['s3Framework_custom_logo'] = array(
			'title'   => __( 'Custom Footer Logo' ),
			'desc'    => __( 'Enter a URL or upload an image' ),
			'std'     => '',
			'type'    => 'footer_logo',
			'section' => 's3cc'
		);
		
		$this->settings['s3Framework_custom_title'] = array(
			'title'   => __( 'Custom Title' ),
			'desc'    => __( 'Type custom title for footer logo' ),
			'std'     => 'Shaz3e - S3 Framework',
			'type'    => 'text',
			'section' => 's3cc'
		);
		
		$this->settings['s3Framework_custom_link'] = array(
			'title'   => __( 'Custom Link' ),
			'desc'    => __( 'Here you will put the link on Footer Logo i.e. http://www.shaz3e.com' ),
			'std'     => 'http://www.shaz3e.com',
			'type'    => 'text',
			'section' => 's3cc'
		);
		
		$this->settings['s3Framework_link_target'] = array(
			'title'   => __( 'Link Target' ),
			'desc'    => __( 'Select Link Target Type on Footer Logo i.e. _blank' ),
			'std'     => '_blank',
			'type'    => 'radio',
			'choices' => array(
							'_blank' => 'Other Window',
							'_self' => 'Same Window',
						 ),
			'section' => 's3cc'
		);
		
		$this->settings['s3cc_fixed'] = array(
			'title'   => __( 'Fixed CC Area?' ),
			'desc'    => __( 'Enable or Disable Sticky Copyright and Credit. This will only work on larget than 980px devices.' ),
			'std'     => '0',
			'type'    => 'radio',
			'choices' => array(
							0 => 'Disable',
							1 => 'Enable',
						 ),
			'section' => 's3cc'
		);
		
		$this->settings['s3cc_text_color'] = array(
			'title'   => __( 'Text Color' ),
			'desc'    => __( 'Enter color code i.e. #000000 or choose color' ),
			'std'     => '',
			'type'    => 's3cc_text_color',
			'section' => 's3cc'
		);
		
		$this->settings['s3cc_background_color'] = array(
			'title'   => __( 'Background Color' ),
			'desc'    => __( 'Enter color code i.e. #000000 or choose color' ),
			'std'     => '',
			'type'    => 's3cc_background_color',
			'section' => 's3cc'
		);
?>