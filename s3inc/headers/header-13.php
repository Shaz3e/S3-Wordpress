<?php
	/**
	 * Header Styles - Center 3
	 * File Name: header-13.php
	 * @since S3 Framework 4.0
	 */
?>
<div class="dc-fixed-header">
    <section class="dc-header dc-header-<?php echo s3_option('header_style'); ?> dc-clear" id="dc-header">
        <?php if( is_s3_headers() ): ?>
        <div class="s3-header-<?php echo s3_option('header_style'); ?>">
            <div class="<?php echo( s3_option('fluidContainer') == 1 ? 'container-fluid' : 'row' ); ?>">
            	<div class="s3-grid-12">
                	<div class="block">
                        <div class="dc-header-boxes">
    						<?php phone_text(); ?>
                            <?php email_text();?>
                            <?php social_icons();?>
                            <?php search_box();?>
                        </div>
    				</div>
    			</div>
            </div>
        </div>
        <?php endif; ?>
        
        <div class="<?php echo( s3_option('fluidContainer') == 1 ? 'container-fluid' : 'row' ); ?>">
            <div class="s3-grid-12">
                <div class="block">
                    <div class="dc-logo">
                    	<?php echo s3_logo(); ?>
                    </div>
                    <?php calltoaction();?>
                </div>
            </div><?php // .s3-grid-3 ?>
            
            <div class="s3-grid-12">
            	<div class="block">
                    <div class="dc-menu">
                        <?php s3_main_menu(); ?>
                        <div class="dc-clear"></div>
                    </div>
				</div>
            </div>
        </div><?php // .row ?>
    </section>
</div>