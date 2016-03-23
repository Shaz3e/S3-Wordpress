<?php
	if( s3_option('copyright')  == 1 ) {
		if(is_active_sidebar('copyright')){
			dynamic_sidebar( 'copyright' );
		}elseif( s3_option('copyright_text') ){
			echo '<p>'.s3_option('copyright_text').'</p>';
		}else{ ?>
			<p>&copy; <?php echo date('Y'); ?> <a href="<?php echo bloginfo('url'); ?>" title="<?php echo( s3_option('sitename') == '' ? bloginfo('name') : s3_option('sitename') );?>"><?php echo( s3_option('sitename') == '' ? bloginfo('name') : s3_option('sitename') );?></a> | All Rights Reserved.</p>
		<?php }
	}
?>