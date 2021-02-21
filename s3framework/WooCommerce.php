<?php
		/* WooCommerce Settings
		===========================================*/
		
		// Enable WooCommerce Support
		$this->settings['EnableWooCommerceSupport'] = array(
			'title'   => __( 'Enable WooCommerce Support' ),
			'desc'    => __( 'Enable/Disable WooCommerce Support.' ),
			'std'     => 0,
			'type'    => 'select',
			'choices' => array(
							1 => 'Yes',
							0 => 'No',
						 ),
			'section' => 'WooCommerce'
		);
		
		// Disable WooCommerce Styles
		$this->settings['DisableWooCommerceStyles'] = array(
			'title'   => __( 'Disable WooCommerce Style' ),
			'desc'    => __( 'Enable/Disable WooCommerce Default Style.' ),
			'std'     => 0,
			'type'    => 'select',
			'choices' => array(
							1 => 'Yes',
							0 => 'No',
						 ),
			'section' => 'WooCommerce'
		);
		
		// Disable WooCommerce Breadcrumb
		$this->settings['s3_remove_breadcrumbs'] = array(
			'title'   => __( 'Disable WooCommerce Breadcrumb' ),
			'desc'    => __( 'Enable/Disable WooCommerce Breadcrumb.' ),
			'std'     => 1,
			'type'    => 'select',
			'choices' => array(
							1 => 'Yes',
							0 => 'No',
						 ),
			'section' => 'WooCommerce'
		);

		// Product Grid: Max Columns
		$this->settings['wc_breadcrum_delimiter'] = array(
			'title'   => __( 'Change Delimiter in Breadcrumb' ),
			'desc'    => __( 'Set the unicode inside the breadcrumb e.g. <code>&amprsaquo&semi;</code> or use fontawesome icons e.g. <code>&lt;i class=&quot;fas fa-arrow-circle-right&quot;&gt;&lt;/i&gt;</code>' ),
			'std'     => '&raquo;',
			'type'    => 'text',
			'section' => 'WooCommerce'
		);
		
		// Add WooCommerce Zoom Gallery
		$this->settings['wc_zoom'] = array(
			'title'   => __( 'Support Zoom Gallery' ),
			'desc'    => __( 'Enable/Disable WooCommerce Zoom Gallery.' ),
			'std'     => 1,
			'type'    => 'select',
			'choices' => array(
							1 => 'Yes',
							0 => 'No',
						 ),
			'section' => 'WooCommerce'
		);
		
		// Add WooCommerce Lightbox Gallery
		$this->settings['wc_lightbox'] = array(
			'title'   => __( 'Support Lightbox Gallery' ),
			'desc'    => __( 'Enable/Disable WooCommerce Lightbox Gallery.' ),
			'std'     => 1,
			'type'    => 'select',
			'choices' => array(
							1 => 'Yes',
							0 => 'No',
						 ),
			'section' => 'WooCommerce'
		);
		
		// Add WooCommerce Slider Gallery
		$this->settings['wc_slider'] = array(
			'title'   => __( 'Support Slider Gallery' ),
			'desc'    => __( 'Enable/Disable WooCommerce Slider Gallery.' ),
			'std'     => 1,
			'type'    => 'select',
			'choices' => array(
							1 => 'Yes',
							0 => 'No',
						 ),
			'section' => 'WooCommerce'
		);

		// Set Thumbnail Image Width
		$this->settings['thumbnail_image_width'] = array(
			'title'   => __( 'Thumnail Image Width.' ),
			'desc'    => __( 'Thumnail image width in pixel default is 150. e.g. 150' ),
			'std'     => '150',
			'type'    => 'text',
			'section' => 'WooCommerce'
		);

		// Set Single Image Width
		$this->settings['single_image_width'] = array(
			'title'   => __( 'Single Image Width' ),
			'desc'    => __( 'Single image width in pixel default is 300. e.g. 300' ),
			'std'     => '300',
			'type'    => 'text',
			'section' => 'WooCommerce'
		);

		// Product Grid: Default Rows
		$this->settings['product_grid_default_rows'] = array(
			'title'   => __( 'Default Rows' ),
			'desc'    => __( 'Product Grid: Set Default Rows' ),
			'std'     => '3',
			'type'    => 'text',
			'section' => 'WooCommerce'
		);

		// Product Grid: Min Rows
		$this->settings['product_grid_min_rows'] = array(
			'title'   => __( 'Minimum Rows' ),
			'desc'    => __( 'Product Grid: Set Minimum Rows' ),
			'std'     => '2',
			'type'    => 'text',
			'section' => 'WooCommerce'
		);

		// Product Grid: Max Rows
		$this->settings['product_grid_max_rows'] = array(
			'title'   => __( 'Maximum Rows' ),
			'desc'    => __( 'Product Grid: Set Maximum Rows' ),
			'std'     => '8',
			'type'    => 'text',
			'section' => 'WooCommerce'
		);

		// Product Grid: Default Columns
		$this->settings['product_grid_default_columns'] = array(
			'title'   => __( 'Default Columns' ),
			'desc'    => __( 'Product Grid: Set Default Columns' ),
			'std'     => '4',
			'type'    => 'text',
			'section' => 'WooCommerce'
		);

		// Product Grid: Min Columns
		$this->settings['product_grid_min_columns'] = array(
			'title'   => __( 'Minimum Columns' ),
			'desc'    => __( 'Product Grid: Set Minimum Columns' ),
			'std'     => '2',
			'type'    => 'text',
			'section' => 'WooCommerce'
		);

		// Product Grid: Max Columns
		$this->settings['product_grid_max_columns'] = array(
			'title'   => __( 'Maximum Columns' ),
			'desc'    => __( 'Product Grid: Set Maximum Columns' ),
			'std'     => '5',
			'type'    => 'text',
			'section' => 'WooCommerce'
		);
?>