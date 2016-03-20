<?php
	/**
	 * S3CC Styles
	 * File Name: s3cc-0.php
	 * @since S3 Framework 2.0
	 */
?>
<?php if( s3_option('copyright')  == 1 || s3_option('credit') == 1 || s3_option('s3Framework_logo') == 1 ): ?>
<section class="DiligentCreators s3cc-<?php echo s3_option('s3cc_style'); ?> s3cc-fixed dc-clear" id="DiligentCreators">
	<div class="<?php echo( s3_option('fluidContainer') == 1 ? 'container-fluid' : 'row' ); ?>">
    <?php if( s3_option('copyright')  == 1 || s3_option('credit') == 1): ?>
    
        <?php if( s3_option('s3Framework_logo')  == 1): ?>
        <div class="grid-6 dc-copyright" id="dc-copyright">
        	<div class="block">
            	<div class="dc-clear"></div>
                <?php include("s3logo.php"); ?>
            </div>
        </div>
		<?php endif; ?>
    
    	<div class="grid-6 dc-credits" id="dc-credits">
            <div class="block">
            <?php
				include("copyright.php");
				include("credit.php");
			?>
            </div>
        </div>

	<?php else: ?>
    
        <?php if( s3_option('s3Framework_logo')  == 1): ?>
        <div class="grid-12" style="text-align:center;">
        	<div class="block">
            	<div class="dc-clear"></div>
                <?php include("s3logo.php"); ?>
            </div>
        </div>
		<?php endif; ?>
    <?php endif; ?>
    
    </div>
</section>
<?php endif; ?>