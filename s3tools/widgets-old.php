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

class S3Framework_Content_Type_Widget extends WP_Widget {
	
	/**
	 * The supported post formats.
	 *
	 * @access private
	 * @since S3 Framework 1.0
	 *
	 * @var array
	 */
	 
	 private $formats = array( 'aside', 'image', 'video', 'audio', 'quote', 'link', 'gallery' );
	 
	/**
	 * Constructor.
	 *
	 * @since S3 Framework 1.0
	 *
	 * @return S3Framework_Content_Type_Widget
	 */
	public function __construct() {
		parent::__construct( 'widget_twentyfourteen_ephemera', __( 'Twenty Fourteen Ephemera', 'twentyfourteen' ), array(
			'classname'   => 'widget_twentyfourteen_ephemera',
			'description' => __( 'Use this widget to list your recent Aside, Quote, Video, Audio, Image, Gallery, and Link posts.', 'twentyfourteen' ),
		) );
	}
	
}