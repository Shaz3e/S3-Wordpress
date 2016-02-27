<?php
	/**
	 * Logo Function File
	 */
	include("logo.php");
	
	if( s3_option('header_style') == 1){
		include(TEMPLATEPATH  . "/s3inc/headers/header-1.php");
		
	}elseif( s3_option('header_style') == 2){
		include(TEMPLATEPATH  . "/s3inc/headers/header-2.php");
		
	}elseif( s3_option('header_style') == 3){
		include(TEMPLATEPATH  . "/s3inc/headers/header-3.php");
		
	}elseif( s3_option('header_style') == 4){
		include(TEMPLATEPATH  . "/s3inc/headers/header-4.php");
		
	}elseif( s3_option('header_style') == 5){
		include(TEMPLATEPATH  . "/s3inc/headers/header-5.php");
		
	}elseif( s3_option('header_style') == 6){
		include(TEMPLATEPATH  . "/s3inc/headers/header-6.php");
		
	}elseif( s3_option('header_style') == 7){
		include(TEMPLATEPATH  . "/s3inc/headers/header-7.php");
		
	}elseif( s3_option('header_style') == 8){
		include(TEMPLATEPATH  . "/s3inc/headers/header-8.php");
		
	}elseif( s3_option('header_style') == 9){
		include(TEMPLATEPATH  . "/s3inc/headers/header-9.php");
		
	}elseif( s3_option('header_style') == 10){
		include(TEMPLATEPATH  . "/s3inc/headers/header-10.php");

	// Header Center Styles
	}elseif( s3_option('header_style') == 11){
		include(TEMPLATEPATH  . "/s3inc/headers/center-1.php");

	}elseif( s3_option('header_style') == 12){
		include(TEMPLATEPATH  . "/s3inc/headers/center-2.php");

	}elseif( s3_option('header_style') == 13){
		include(TEMPLATEPATH  . "/s3inc/headers/center-3.php");
		
	}else{
		include(TEMPLATEPATH  . "/s3inc/headers/default.php");
	}
?>