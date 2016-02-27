<?php if( s3_option('copyright')  == 1 || s3_option('credit') == 1 || s3_option('s3Framework_logo') == 1 ): ?>
<section class="DiligentCreators s3cc-<?php echo s3_option('s3cc_style'); ?> dc-clear" id="DiligentCreators">
	<div class="row">
    <?php if( s3_option('copyright')  == 1 && s3_option('credit') == 1): ?>
    	<div class="grid-6 dc-copyright" id="dc-copyright">
            <div class="block">
        	<?php
				if( s3_option('copyright')  == 1 ) {
					if(is_active_sidebar('copyright')){
						dynamic_sidebar( 'copyright' );
					}else{
						include("copyright.php");
					}
				}
			?>
            </div>
        </div>
        
        <div class="grid-6 dc-credits" id="dc-credits">
        	<div class="block">
        	<?php
				if( s3_option('credit')  == 1 ){
					if(is_active_sidebar('credit')){
						dynamic_sidebar( 'credit' );
					}else{
						include("credit.php");
					}
				}
				?>
            </div>
        </div>
    <?php else: ?>
    	<div class="grid-12 dc-copyright" id="dc-copyright">
            <?php if( s3_option('copyright') == 1) : ?>
            <div class="block">
    	        <?php
                	if(is_active_sidebar('copyright')){
						dynamic_sidebar( 'copyright' );
					}else{
						include("copyright.php"); 
					}
				?>
            </div>
            <?php endif; ?>

            <?php if( s3_option('credit')  == 1) : ?>
        	<div class="block">
    	        <?php
                	if(is_active_sidebar('credit')){
						dynamic_sidebar( 'credit' );
					}else{
						include("credit.php");
					}
				?>
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