<?php
	/**
	 * Header Styles - Small Header RTLA Menu LTLA
	 * File Name: header-19.php
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
            
            <?php if( is_s3_headers() ): ?>
            <div class="grid<?php echo s3_option('logo_column') - 12; ?>">
            	<div class="block">
                    <div class="dc-header-boxes">
						<?php phone_text(); ?>
                        <?php email_text();?>
                        <?php social_icons();?>
                        <?php search_box();?>
                        <?php calltoaction();?>
                        <div class="dc-clear"></div>
                        <div class="dc-menu">
							<?php s3_main_menu(); ?>
                        </div>
                    </div>
				</div>
            </div>
            <?php endif; ?>
        </div><?php // .row ?>
    </section>
</div>