<?php

		/* Header Settings
		===========================================*/
		
		$this->settings['s3_site_logo'] = array(
			'title'   => __( 'Custom Site Logo' ),
			'desc'    => __( 'Enter a URL or upload an image' ),
			'std'     => '',
			'type'    => 'site_logo',
			'section' => 'headers'
		);
		
		$this->settings['header_style'] = array(
			'title'   => __( 'Change Header Style' ),
			'desc'    => __( 'Select the header you would like to use through out the website.' ),
			'std'     => 0,
			'type'    => 'select',
			'choices' => array(
							0 => 'Default',
							1 => 'Header 1',
							2 => 'Header 2',
							3 => 'Header 3',
							4 => 'Header 4',
							5 => 'Header 5',
							// Top Headers
							6 => 'Top 1',
							7 => 'Top 2',
							8 => 'Top 3',
							// Bottom Headers
							9 => 'Bottom 1',
							10 => 'Bottom 2',
							// Center Headers
							11 => 'Center 1',
							12 => 'Center 2',
							13 => 'Center 3',
						 ),
			'section' => 'headers'
		);
		
		$this->settings['search_box'] = array(
			'title'   => __( 'Enable Search Box' ),
			'desc'    => __( 'Please enable or disable search box in header by default its enable' ),
			'std'     => 1,
			'type'    => 'select',
			'choices' => array(
							0 => 'Disable',
							1 => 'Enable',
						 ),
			'section' => 'headers'
		);
		
		$this->settings['social_icons'] = array(
			'title'   => __( 'Enable Social Icons' ),
			'desc'    => __( 'Please enable or disable social icons in header by default its disabled, Remember to use Font Awesome library. Example: <code>&lt;a href=&quot;&quot;&gt;&lt;i class=&quot;fa fa-facebook&quot;&gt;&lt;/i&gt;&lt;/a&gt;</code>' ),
			'std'     => '',
			'type'    => 'text',
			'section' => 'headers'
		);
				
		$this->settings['phone_text'] = array(
			'title'   => __( 'Type your Phone No.' ),
			'desc'    => __( 'Please type phone number here' ),
			'std'     => '',
			'type'    => 'text',
			'section' => 'headers'
		);
		
		$this->settings['email_text'] = array(
			'title'   => __( 'Type your email' ),
			'desc'    => __( 'Please type your email address here' ),
			'std'     => '',
			'type'    => 'text',
			'section' => 'headers'
		);
				
		$this->settings['calltoaction_text'] = array(
			'title'   => __( 'Text for Call to Action' ),
			'desc'    => __( 'Please write for call to action option' ),
			'std'     => '',
			'type'    => 'text',
			'section' => 'headers'
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
			'section' => 'headers'
		);
		
		$this->settings['header_text_color'] = array(
			'title'   => __( 'Text Color' ),
			'desc'    => __( 'Enter color code i.e. #ffffff or choose color' ),
			'std'     => '',
			'type'    => 'header_text_color',
			'section' => 'headers'
		);
		
		$this->settings['header_background_color'] = array(
			'title'   => __( 'Background Color' ),
			'desc'    => __( 'Enter color code i.e. #000000 or choose color' ),
			'std'     => '',
			'type'    => 'header_background_color',
			'section' => 'headers'
		);
		
		$this->settings['header_height'] = array(
			'title'   => __( 'Header Height' ),
			'desc'    => __( 'Change body top padding when using fixed header i.e. 200' ),
			'std'     => '100',
			'type'    => 'text',
			'section' => 'headers'
		);
		
		$this->settings['ease_speed'] = array(
			'title'   => __( 'Ease Speed' ),
			'desc'    => __( 'Define header ease slideUp/slideDown speed in millisecond i.e 200.' ),
			'std'     => '0',
			'type'    => 'text',
			'section' => 'headers'
		);
		
		$this->settings['break_point'] = array(
			'title'   => __( 'Break Point' ),
			'desc'    => __( 'Type your break point (only number) i.e. (768 for tablet) fixed header will show on larger than break point defined here.' ),
			'std'     => '979',
			'type'    => 'number',
			'section' => 'headers'
		);
?>