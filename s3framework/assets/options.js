jQuery(document).ready(function($){
	/**
	 * Custom Site Logo
	 * @since S3 Framework 2.0
	 */
	var s3_site_logo;
	$('#s3_site_logo_btn').click(function(e) {
		e.preventDefault();
		
		//If the uploader object has already been created, reopen the dialog
        if (s3_site_logo) {
            s3_site_logo.open();
            return;
        }
		
		//Extend the wp.media object
        s3_site_logo = wp.media.frames.file_frame = wp.media({
			title: 'Choose Image',
            button: {
                text: 'Choose Image'
            },
            multiple: false
        });
		
		//When a file is selected, grab the URL and set it as the text field's value
        s3_site_logo.on('select', function() {
            attachment = s3_site_logo.state().get('selection').first().toJSON();
            $('#s3_site_logo').val(attachment.url);
        });
		
		//Open the uploader dialog
        s3_site_logo.open();
	});

	
	/**
	 * Footer Logo
	 * @since S3 Framework 2.0
	 */
	var s3Framework_custom_logo;
	$('#s3Framework_custom_logo_btn').click(function(e) {
		e.preventDefault();
		
		//If the uploader object has already been created, reopen the dialog
        if (s3Framework_custom_logo) {
            s3Framework_custom_logo.open();
            return;
        }
		
		//Extend the wp.media object
        s3Framework_custom_logo = wp.media.frames.file_frame = wp.media({
			title: 'Choose Image',
            button: {
                text: 'Choose Image'
            },
            multiple: false
        });
		
		//When a file is selected, grab the URL and set it as the text field's value
        s3Framework_custom_logo.on('select', function() {
            attachment = s3Framework_custom_logo.state().get('selection').first().toJSON();
            $('#s3Framework_custom_logo').val(attachment.url);
        });
		
		//Open the uploader dialog
        s3Framework_custom_logo.open();
	});

	/**
	 * Custom Fixed Header Text Color
	 * @since S3 Framework 2.0
	 */    
    $('#header_text_color').wpColorPicker();
	
	/**
	 * Custom Fixed Header Background Color
	 * @since S3 Framework 2.0
	 */
	$('#header_background_color').wpColorPicker();
});
