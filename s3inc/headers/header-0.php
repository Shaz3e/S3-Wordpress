<?php
	/**
	 * Header Styles - Default Header
	 * File Name: header-0.php
	 * @since S3 Framework 4.0
	 */
?>
<div class="dc-fixed-header">
    <section class="dc-header dc-header-<?php echo s3_option('header_style'); ?> dc-clear" id="dc-header">
        <div class="row">
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
                    </div>
                    <?php calltoaction();?>
				</div>
            </div>
            <?php endif; ?>
        </div><?php // .row ?>
        
        <div class="row">
        	<div class="col-1">
                <div class="block">
                    <?php s3_main_menu(); ?>
                </div>
            </div>
        </div>
    </section>
</div>