<?php
function s3_logo(){
	echo '<a href="';
		bloginfo('url');
	echo '" title="';
		echo( s3_option('sitename') == '' ? bloginfo('name') : s3_option('sitename') );
	echo '">';	
		echo '<img src="';
			echo( 
				s3_option('s3_site_logo') == '' ? 
					get_template_directory_uri().'/themes/images/logo.png' : 
					s3_option('s3_site_logo') 
				);
		echo '"alt="';
			echo( s3_option('sitename') == '' ? bloginfo('name') : s3_option('sitename') );
		echo '">';
	echo '</a>';
}
