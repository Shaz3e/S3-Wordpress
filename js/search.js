$(document).ready(function(){
	/**
	 * Full Screen Search
	 * @since S3 Framework 4.0
	 */
    $("#search-open").click(function(){
        $("#s3search").show("slow");
		$("body").addClass('s3-search-body-hide');
    });
    $("#search-close").click(function(){
        $("#s3search").hide("fast");
		$("body").removeClass('s3-search-body-hide');
    });
});