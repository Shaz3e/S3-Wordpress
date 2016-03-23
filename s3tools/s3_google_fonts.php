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




/**
 * Google Font Configuration in Typography tab
 */
if( s3_option('gfont_config') == 1 ):
?>
<script>
	WebFontConfig = {
		google: {
			families: [
				'<?php echo str_replace(' ', '+', s3_option('gfont_body'));?>:<?php echo s3_option('gfont_body_styles'); ?>:latin,latin-ext',
				'<?php echo str_replace(' ', '+', s3_option('gfont_heading')); ?>:<?php echo s3_option('gfont_heading_styles'); ?>:latin,latin-ext'
			]
		}
	};
	
	(function() {
		var wf = document.createElement('script');
		wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
		wf.type = 'text/javascript';
		wf.async = 'true';
		var s = document.getElementsByTagName('script')[0];
		s.parentNode.insertBefore(wf, s);
	})();
</script>
<style type="text/css">
body{font-family: '<?php echo s3_option('gfont_body'); ?>', sans-serif;}
h1,h2,h3,h4,h5,h6{font-family: '<?php echo s3_option('gfont_heading'); ?>', sans-serif;}
.wf-loading h1,.wf-loading h2,.wf-loading h3,.wf-loading h4,.wf-loading h5,.wf-loading h6
{ visibility: hidden;}
.wf-active h1,.wf-active h2,.wf-active h3,.wf-active h4,.wf-active h5,.wf-active h6,
.wf-inactive h1,.wf-inactive h2,.wf-inactive h3,.wf-inactive h4,.wf-inactive h5,.wf-inactive h6
{visibility: visible; font-family: '<?php echo s3_option('gfont_heading'); ?>';}
</style>
<?php endif; // google_font ?>