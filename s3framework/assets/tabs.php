<div class="wrap">
	<div class="icon32" id="icon-options-general"></div>
    <h1><?php echo __( 'S3 Framework' );?> <span><?php echo __( 'Theme Options' );?></span></h1>
    <?php
		if ( isset( $_GET['settings-updated'] ) && $_GET['settings-updated'] == true ){
			echo '<div class="updated fade"><p>' . __( 'Theme options updated.' ) . '</p></div>';
		}
	?>
    <form action="options.php" method="post">
    	<?php settings_fields( 's3_theme_options' ); ?>
        <div class="ui-tabs">
        	<ul class="ui-tabs-nav">
            	<?php foreach ( $this->sections as $section_slug => $section ) { ?>
                <li>
                	<a href="#<?php echo $section_slug;?>"><?php echo $section;?></a>
                </li>
                <?php } ?>
			</ul>
            <div class="ui-tabs-content">
            	<?php do_settings_sections( $_GET['page'] ); ?>
            </div>
		</div>
        
        <div class="dc-submit">
        <hr />
            <p class="submit">
                <input name="Submit" type="submit" class="button-primary" value="Save Changes" /> 
            </p>
        </div>
        
        <div class="DiligentCreators">
			<p><?php echo __('S3 Framework');?> by <a href="http://shaz3e.com/" target="_blank">Shaz3e</a> | <a href="https://twitter.com/Shaz3e" target="_blank">Follow on Twitter</a>! | <a href="https://www.facebook.com/Shaz3e" target="_blank">Like on Facebook</a>!</p>
        </div>
	</form>
</div>