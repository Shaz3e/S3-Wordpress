<?php
	/**
	 * Logo Function File
	 */
	include("logo.php");
	
	if( s3_option('header_style') == s3_option('header_style') ){
		include(TEMPLATEPATH  . "/s3inc/headers/header-".s3_option('header_style').".php");
		
	}
?>