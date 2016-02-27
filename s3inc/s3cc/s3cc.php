<?php
	if( s3_option('s3cc_style') == 1){
		include(TEMPLATEPATH  . "/s3inc/s3cc/s3cc-1.php");
		
	}elseif( s3_option('s3cc_style') == 2){
		include(TEMPLATEPATH  . "/s3inc/s3cc/s3cc-2.php");
		
	}else{
		include(TEMPLATEPATH  . "/s3inc/s3cc/default.php");
	}
?>