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

		$this->settings['topSidebarCount'] = array(
			'title'   => __( 'Set Top Sidebar Count' ),
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

		$this->settings['breadcrumbSidebarCount'] = array(
			'title'   => __( 'Set Breadcrumb Sidebar Count' ),
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

		$this->settings['slideshowSidebarCount'] = array(
			'title'   => __( 'Set Slideshow Sidebar Count' ),
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

		$this->settings['showcaseSidebarCount'] = array(
			'title'   => __( 'Set Showcase Sidebar Count' ),
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

		$this->settings['featureSidebarCount'] = array(
			'title'   => __( 'Set Feature Sidebar Count' ),
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

		$this->settings['bottomFeatureSidebarCount'] = array(
			'title'   => __( 'Set Bottom Feature Sidebar Count' ),
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

		$this->settings['utilitySidebarCount'] = array(
			'title'   => __( 'Set Utility Sidebar Count' ),
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

		$this->settings['scrollerSidebarCount'] = array(
			'title'   => __( 'Set Scroller Sidebar Count' ),
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

		$this->settings['extensionSidebarCount'] = array(
			'title'   => __( 'Set Extension Sidebar Count' ),
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

		$this->settings['bottomSidebarCount'] = array(
			'title'   => __( 'Set Bottom Sidebar Count' ),
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

		$this->settings['footerSidebarCount'] = array(
			'title'   => __( 'Set Footer Sidebar Count' ),
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

		$this->settings['bottomFooterSidebarCount'] = array(
			'title'   => __( 'Set Bottom Footer Sidebar Count' ),
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
?>