<?php
	if( s3_option('credit')  == 1 ){
		if(is_active_sidebar('credit')){
			dynamic_sidebar( 'credit' );
		}elseif( s3_option('credit_text') ){
			echo '<p>'.s3_option('credit_text').'</p>';
		}else{ ?>
        	<p>Designed &amp; Developed by <a href="http://www.diligentcreators.com" title="DiligentCreators" target="_blank">DiligentCreators</a></p>
		<?php }
	}
?>