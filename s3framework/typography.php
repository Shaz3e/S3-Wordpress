<?php
		/* Typography
		===========================================*/
		
		$this->settings['gfont_config'] = array(
			'title'   => __( 'Use Google Font?' ),
			'desc'    => __( 'Enable/Disable Google Web Fonts' ),
			'std'     => '0',
			'type'    => 'select',
			'choices' => array(
							0 => 'Disable',
							1 => 'Enable',
						 ),
			'section' => 'typography'
		);
		
		$this->settings['gfont_body'] = array(
			'title'   => __( 'Choose Body Font' ),
			'desc'    => __( 'You can choose your default font here. i.e. Open Sans Condensed' ),
			'std'     => '',
			'type'    => 'text',
			'section' => 'typography'
		);
		
		$this->settings['gfont_body_styles'] = array(
			'title'   => __( 'Body Font Weight' ),
			'desc'    => __( 'Choose the styles you want. i.e. 300,400,700' ),
			'std'     => '',
			'type'    => 'text',
			'section' => 'typography'
		);
		
		$this->settings['gfont_heading'] = array(
			'title'   => __( 'Choose Heading Font' ),
			'desc'    => __( 'You can choose your default headings font here for h1,h2,h3,h4,h5,h6 tags. i.e. Oswald' ),
			'std'     => '',
			'type'    => 'text',
			'section' => 'typography'
		);
		
		$this->settings['gfont_heading_styles'] = array(
			'title'   => __( 'Heading Font Weight' ),
			'desc'    => __( 'Choose the styles you want. i.e. 300,400,700' ),
			'std'     => '',
			'type'    => 'text',
			'section' => 'typography'
		);
?>