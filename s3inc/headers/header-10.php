<?php
	/**
	 * Header Styles - Bottom 2
	 * File Name: header-10.php
	 * @since S3 Framework 4.0
	 */
?>
<div class="dc-fixed-header">
    <section class="dc-header dc-header-<?php echo s3_option('header_style'); ?> dc-clear" id="dc-header">
        <div class="<?php echo( s3_option('fluidContainer') == 1 ? 'container-fluid' : 'row' ); ?>">
            <div class="grid-<?php echo s3_option('logo_column'); ?>">
                <div class="block">
                    <div class="dc-logo">
                    	<?php echo s3_logo(); ?>
                    </div>
                </div>
            </div><?php // .grid-3 ?>
            
            <div class="grid<?php echo s3_option('logo_column') - 12; ?>">
            	<div class="block">
                    <?php calltoaction();?>
                    <div class="dc-menu">
                        <?php s3_main_menu(); ?>
                    </div>
				</div>
            </div>
        </div>
            
        <?php if( is_s3_headers() ): ?>
        <div class="s3-header-<?php echo s3_option('header_style'); ?>">
            <div class="<?php echo( s3_option('fluidContainer') == 1 ? 'container-fluid' : 'row' ); ?>">
            	<div class="grid-12">
                	<div class="block">
                        <div class="dc-header-boxes">
                        	<div class="grid-6">
    						<?php phone_text(); ?>
                            <?php email_text();?>
                            </div>
                            <div class="grid-6">
                            <?php search_box();?>
                            <?php social_icons();?>
                            </div>
                            <div class="dc-clear"></div>
                        </div>
    				</div>
    			</div>
            </div>
        </div>
        <?php endif; ?>
        
    </section>
</div>