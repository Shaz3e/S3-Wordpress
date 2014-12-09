<?php
/**
 * The Template for displaying search form
 *
 * @package WordPress
 * @subpackage S3Wordpress
 * @since S3 Framework 1.0
 */


?>

<form id="searchform" method="get" action="" role="form" class="form-inline">
	<div class="form-group">
    	<label id="s" for="s">Search for:</label>
        <input type="text" name="s" id="s" class="form-control" placeholder="" />
    </div>
    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i> Search</button>
</form>