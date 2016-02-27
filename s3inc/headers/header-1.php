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
            
            <div class="grid<?php echo s3_option('logo_column') - 12; ?>">
            	<div class="block">
                    <?php if( is_s3_headers() ): ?>
                    <div class="s3-header-<?php echo s3_option('header_style'); ?>">
                        <div class="dc-header-boxes">
    						<?php phone_text(); ?>
                            <?php email_text();?>
                            <?php social_icons();?>
                            <?php search_box();?>
                        </div>
                        <?php calltoaction();?>
                    </div>
                    <?php endif; ?>
                    <div class="dc-menu">
                        <?php s3_main_menu(); ?>
                    </div>
				</div>
            </div>
        </div><?php // .row ?>
    </section>
</div>