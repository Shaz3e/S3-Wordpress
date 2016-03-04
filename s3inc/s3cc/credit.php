<?php
	if( s3_option('credit')  == 1 ){
		if(is_active_sidebar('credit')){
			dynamic_sidebar( 'credit' );
		}else{ ?>
        	<p>Designed &amp; Developed by <a href="http://www.diligentcreators.com" title="DiligentCreators" target="_blank">DiligentCreators</a></p>
		<?php }
	}
?>