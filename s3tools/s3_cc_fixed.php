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

/* Fixed Copyright & Credit Area */
if( s3_option('s3cc_fixed') == 1 || s3_option('s3cc_text_color') || s3_option('s3cc_background_color') ){?>
<style type="text/css">
@media(min-width:980px){
	.s3cc-fixed{
	<?php
	echo ( s3_option('s3cc_fixed') == 0 ? '' : 'position:fixed;bottom:0;width:100%;z-index:9999999999;' );
	echo ( s3_option('s3cc_text_color') == '' ? '' : 'color:'.s3_option('s3cc_text_color').';' );
	echo ( s3_option('s3cc_background_color') == '' ? '' : 'background-color:'.s3_option('s3cc_background_color').';' );
	?>
    transition:All 0.2s ease-in-out;
    -webkit-transition:All 0.2s ease-in-out;
    -moz-transition:All 0.2 ease-in-out;
    -o-transition:All 0.2 ease-in-out;
	}
}
</style>
<script type="text/javascript">
	$(window).scroll(function(){
		if($(window).scrollTop() + $(window).height() > $(document).height() - <?php echo( s3_option('s3cc_fixed_trigger') == '' ? 100 : s3_option('s3cc_fixed_trigger') );?>) {
			$('.s3cc-fixed').css('position','static');
		}else{
			$('.s3cc-fixed').css('position','fixed');
		}
	});
</script>
<?php } ?>