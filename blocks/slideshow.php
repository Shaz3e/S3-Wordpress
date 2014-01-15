<?php

/*======================================================================*\
|| #################################################################### ||
|| # Package - Wordpress Template based on Shaz3e S3 Framework          ||
|| # Copyright (C) 2010  shaz3e.com. All Rights Reserved.               ||
|| # Authors - Shahrukh A. Khan (Shaz3e) and DiligentCreators           ||
|| # license - PHP files are licensed under  GNU/GPL V2                 ||
|| # license - CSS  - JS - IMAGE files  are Copyrighted material        ||
|| # bound by Proprietary License of shaz3e.com                         ||
|| # for more information visit http://www.shaz3e.com/                  ||
|| # Redistribution and  modification of this software                  ||
|| # is bounded by its licenses websites - http://www.shaz3e.com        ||
|| # A project of DiligentCreators - Construcing Ideas...               ||
|| #################################################################### ||
\*======================================================================*/

if (is_active_sidebar('slideshow-1') 
&& !is_active_sidebar('slideshow-2') 
&& !is_active_sidebar('slideshow-3') 
&& !is_active_sidebar('slideshow-4') 
&& !is_active_sidebar('slideshow-5') 
&& !is_active_sidebar('slideshow-6')):
?>

	<div class="dc-modules1">
    	<?php dynamic_sidebar('slideshow-1'); ?>
    </div>

<?php endif; ?>
<?php
if (is_active_sidebar('slideshow-1') 
&& is_active_sidebar('slideshow-2') 
&& !is_active_sidebar('slideshow-3') 
&& !is_active_sidebar('slideshow-4') 
&& !is_active_sidebar('slideshow-5') 
&& !is_active_sidebar('slideshow-6')):
?>

	<div class="dc-modules2">
    	<?php dynamic_sidebar('slideshow-1'); ?>
    </div>
	<div class="dc-modules2">
    	<?php dynamic_sidebar('slideshow-2'); ?>
    </div>

<?php endif; ?>
<?php
if (is_active_sidebar('slideshow-1') 
&& is_active_sidebar('slideshow-2') 
&& is_active_sidebar('slideshow-3') 
&& !is_active_sidebar('slideshow-4') 
&& !is_active_sidebar('slideshow-5') 
&& !is_active_sidebar('slideshow-6')):
?>

	<div class="dc-modules3">
    	<?php dynamic_sidebar('slideshow-1'); ?>
    </div>
	<div class="dc-modules3">
    	<?php dynamic_sidebar('slideshow-2'); ?>
    </div>
	<div class="dc-modules3">
    	<?php dynamic_sidebar('slideshow-3'); ?>
    </div>

<?php endif; ?>
<?php
if (is_active_sidebar('slideshow-1') 
&& is_active_sidebar('slideshow-2') 
&& is_active_sidebar('slideshow-3') 
&& is_active_sidebar('slideshow-4') 
&& !is_active_sidebar('slideshow-5') 
&& !is_active_sidebar('slideshow-6')):
?>

	<div class="dc-modules4">
    	<?php dynamic_sidebar('slideshow-1'); ?>
    </div>
	<div class="dc-modules4">
    	<?php dynamic_sidebar('slideshow-2'); ?>
    </div>
	<div class="dc-modules4">
    	<?php dynamic_sidebar('slideshow-3'); ?>
    </div>
	<div class="dc-modules4">
    	<?php dynamic_sidebar('slideshow-4'); ?>
    </div>

<?php endif; ?>
<?php
if (is_active_sidebar('slideshow-1') 
&& is_active_sidebar('slideshow-2') 
&& is_active_sidebar('slideshow-3') 
&& is_active_sidebar('slideshow-4') 
&& is_active_sidebar('slideshow-5') 
&& !is_active_sidebar('slideshow-6')):
?>

	<div class="dc-modules5">
    	<?php dynamic_sidebar('slideshow-1'); ?>
    </div>
	<div class="dc-modules5">
    	<?php dynamic_sidebar('slideshow-2'); ?>
    </div>
	<div class="dc-modules5">
    	<?php dynamic_sidebar('slideshow-3'); ?>
    </div>
	<div class="dc-modules5">
    	<?php dynamic_sidebar('slideshow-4'); ?>
    </div>
	<div class="dc-modules5">
    	<?php dynamic_sidebar('slideshow-5'); ?>
    </div>

<?php endif; ?>
<?php
if (is_active_sidebar('slideshow-1') 
&& is_active_sidebar('slideshow-2') 
&& is_active_sidebar('slideshow-3') 
&& is_active_sidebar('slideshow-4') 
&& is_active_sidebar('slideshow-5') 
&& !is_active_sidebar('slideshow-6')):
?>

	<div class="dc-modules6">
    	<?php dynamic_sidebar('slideshow-1'); ?>
    </div>
	<div class="dc-modules6">
    	<?php dynamic_sidebar('slideshow-2'); ?>
    </div>
	<div class="dc-modules6">
    	<?php dynamic_sidebar('slideshow-3'); ?>
    </div>
	<div class="dc-modules6">
    	<?php dynamic_sidebar('slideshow-4'); ?>
    </div>
	<div class="dc-modules6">
    	<?php dynamic_sidebar('slideshow-5'); ?>
    </div>
	<div class="dc-modules6">
    	<?php dynamic_sidebar('slideshow-6'); ?>
    </div>

<?php endif; ?>