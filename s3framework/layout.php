<?php
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
			'desc'    => __( 'Enter color code i.e. #ffffff or choose color' ),
			'std'     => '',
			'type'    => 'header_text_color',
			'section' => 'layout'
		);
		
		$this->settings['header_background_color'] = array(
			'title'   => __( 'Background Color' ),
			'desc'    => __( 'Enter color code i.e. #000000 or choose color' ),
			'std'     => '',
			'type'    => 'header_background_color',
			'section' => 'layout'
		);
		
		$this->settings['header_height'] = array(
			'title'   => __( 'Header Height' ),
			'desc'    => __( 'Change body top padding when using fixed header i.e. 200' ),
			'std'     => '100',
			'type'    => 'text',
			'section' => 'layout'
		);
		
		$this->settings['ease_speed'] = array(
			'title'   => __( 'Ease Speed' ),
			'desc'    => __( 'Define header ease slideUp/slideDown speed in millisecond i.e 200.' ),
			'std'     => '0',
			'type'    => 'text',
			'section' => 'layout'
		);
		
		$this->settings['break_point'] = array(
			'title'   => __( 'Break Point' ),
			'desc'    => __( 'Type your break point (only number) i.e. (768 for tablet) fixed header will show on larger than break point defined here.' ),
			'std'     => '979',
			'type'    => 'number',
			'section' => 'layout'
		);
?>