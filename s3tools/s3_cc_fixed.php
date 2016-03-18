<?php
/* Fixed Copyright & Credit Area */
if( s3_option('s3cc_fixed') == 1 || s3_option('s3cc_text_color') || s3_option('s3cc_background_color') ){?>
<style type="text/css">
@media(min-width:980px){
	.s3cc-fixed{
	<?php
	echo ( s3_option('s3cc_fixed') == 0 ? '' : 'position:fixed;bottom:0;width:100%;z-index:100;' );
	echo ( s3_option('s3cc_text_color') == '' ? '' : 'color:'.s3_option('s3cc_text_color').';' );
	echo ( s3_option('s3cc_background_color') == '' ? '' : 'background-color:'.s3_option('s3cc_background_color').';' );
	?>
	}
}
</style>
<?php } ?>