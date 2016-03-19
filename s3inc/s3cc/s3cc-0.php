<?php
	/**
	 * S3CC Styles - Default Copyright & Credit Settings
	 * File Name: s3cc-0.php
	 * @since S3 Framework 2.0
	 */
?>
<?php if( s3_option('copyright')  == 1 || s3_option('credit') == 1 || s3_option('s3Framework_logo') == 1 ): ?>
<section class="DiligentCreators s3cc-<?php echo s3_option('s3cc_style'); ?><?php echo( s3_option('s3cc_fixed') == '' ? '' : ' s3cc-fixed' );?> dc-clear" id="DiligentCreators">
	<div class="<?php echo( s3_option('fluidContainer') == 1 ? 'container-fluid' : 'row' ); ?>">
    <?php if( s3_option('copyright')  == 1 && s3_option('credit') == 1): ?>
    	<div class="grid-6 dc-copyright" id="dc-copyright">
            <div class="block">
        	<?php include("copyright.php");?>
            </div>
        </div>
        
        <div class="grid-6 dc-credits" id="dc-credits">
        	<div class="block">
        	<?php include("credit.php");?>
            </div>
        </div>
    <?php else: ?>
    	<div class="grid-12 dc-copyright" id="dc-copyright">
            <?php if( s3_option('copyright') == 1) : ?>
            <div class="block">
    	        <?php include("copyright.php");?>
            </div>
            <?php endif; ?>

            <?php if( s3_option('credit')  == 1) : ?>
        	<div class="block">
    	        <?php include("credit.php");?>
            </div>
			<?php endif; ?>
        </div>
    <?php endif; ?>


		<?php if( s3_option('s3Framework_logo')  == 1): ?>
			<div class="dc-clear"></div>
            <?php include("s3logo.php"); ?>
        <?php endif; ?>

    </div>
</section>
<?php endif; ?>