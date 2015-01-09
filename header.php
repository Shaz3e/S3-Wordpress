<?php
/**
 * The Header for our theme
 *
 * Displays all the necessary sections and sidebars before page/post container
 *
 * @package WordPress
 * @subpackage S3Wordpress
 * @since S3 Framework 1.0
 */
 

/**
 * DOCTYPE and s3_head.php for header
 * @since S3 Wordperss 1.0
 */
require_once("s3tools/s3_tools.php");

// Global Settings for Option Pages
global $s3_options;
$s3_settings = get_option( 's3_options', $s3_options );
?>

<body <?php body_class('dc-wrapper' ); ?>>

<?php if(is_active_sidebar('top-left-panel')) :?>
    <div class="top-left-panel">
        <div id="top-left-panel">
	    	<?php dynamic_sidebar('top-left-panel'); ?>
        </div>
    </div>
<?php endif; ?>

<?php if(is_active_sidebar('top-right-panel')) :?>
    <div class="top-right-panel">
        <div id="top-right-panel">
            <?php dynamic_sidebar('top-right-panel'); ?>
        </div>
    </div>
<?php endif; ?>

<?php if(is_active_sidebar('left-panel')) :?>
	<div class="left-panel">
    	<div id="left-panel">
            <?php dynamic_sidebar('left-panel'); ?>
		</div>
	</div>
<?php endif; ?>

<?php if(is_active_sidebar('right-panel')) :?>
    <div class="right-panel">
        <div id="right-panel">
            <?php dynamic_sidebar('right-panel'); ?>
        </div>
    </div>
<?php endif; ?>

<?php if(is_active_sidebar('bottom-left-panel')) :?>
	<div class="bottom-left-panel">
    	<div id="bottom-left-panel">
            <?php dynamic_sidebar('bottom-left-panel'); ?>
		</div>
	</div>
<?php endif; ?>

<?php if(is_active_sidebar('bottom-right-panel')) :?>
    <div class="bottom-right-panel">
        <div id="bottom-right-panel">
            <?php dynamic_sidebar('bottom-right-panel'); ?>
        </div>
    </div>
<?php endif; ?>


<?php
	include_once("blocks/top.php");
?>

<div class="dc-fixed-header">
<section class="dc-header dc-clear" id="dc-header">
	<div class="row">
    	<div class="grid-3">
        	<div class="block">
                <div class="dc-logo">
                    <a href="<?php echo bloginfo('url'); ?>" title="<?php echo bloginfo('name'); ?>">
                    	<img src="<?php echo $s3_settings['logo_image'];?>">
                        <img src="<?php echo $dcTemplate; ?>/themes/style1/images/logo.png" alt="<?php echo bloginfo('name'); ?>">
                    </a>
                </div>
            </div>
        </div>
        <?php
			if( has_nav_menu('header-menu') || is_active_sidebar('header-1') || is_active_sidebar('header-2') || is_active_sidebar('header-3') || is_active_sidebar('header-4')){
				echo '<div class="grid-9">';
					echo '<div class="block">';
						include_once("blocks/header.php");
					echo '</div>';
				echo '</div>';
			}
		?>
    </div>
</section>
	<?php
		/**
		 * Main Menu Location
		 * @since S3 Framework 1.0
		 */
		include_once("blocks/menu.php");
	?>

</div>

<?php
	/**
	 * all sidebars before post/page container
	 * @since S3 Framework 1.0
	 */
	include_once("blocks/breadcrumb.php");
	include_once("blocks/slideshow.php");
	include_once("blocks/showcase.php");
	include_once("blocks/feature.php");
?>

<?php
	/**
	 * Hide main body by selecting Layout: Without Body in page template
	 * No sidebar left/right are enabled in this layout
	 * no content-top/bottom are enabled in this layout
	 */
	if(is_page_template('layouts/no-body.php')):
		// this will not show main body
	else:
?>
<section class="dc-container dc-clear" id="container">
	<div class="row">
	<?php
	/**
	 * call left sidebar if left-sidebar is enabled but template page is not active
	 * @since S3 Wordperss 1.0
	 */
    if(!is_page_template('layouts/full-width.php') && !is_page_template('layouts/2-columns-right-sidebar.php')){

		/**
		 * left sidebar
		 * @since S3 Wordperss 1.0
		 */
		include_once("blocks/left.php");
	}
    
    
        /**
		 * If page template is called do the trick
		 * @since S3 Framework 1.0
		 */
        if(is_page_template('layouts/3-columns.php')):
            echo '<div class="grid-6">';
		
		elseif(is_page_template('layouts/2-columns-left-sidebar.php')):
			echo '<div class="grid-9">';
		
		elseif(is_page_template('layouts/2-columns-right-sidebar.php')):
			echo '<div class="grid-9">';
		
		elseif(is_page_template('layouts/full-width.php')):
			echo '<div class="grid-12">';
			
		else:
                        
        /**
		 * if sidebar is enabled
		 * @since S3 Framework 1.0
		 */
        if(is_active_sidebar('left-sidebar') && is_active_sidebar('right-sidebar') && !is_page_template('layouts/full-width.php')){
			/**
			 * 3 column page
			 * @since S3 Framework 1.0
			 */
            echo '<div class="grid-6">';
        }elseif(is_active_sidebar('left-sidebar') && !is_active_sidebar('right-sidebar')){
			/**
			 * 2 column with left sidebar
			 * @since S3 Framework 1.0
			 */
            echo '<div class="grid-9">';
        }elseif(!is_active_sidebar('left-sidebar') && is_active_sidebar('right-sidebar')){
			/**
			 * 2 column with right sidebar
			 * @since S3 Framework 1.0
			 */
            echo '<div class="grid-9">';
        }else{
            echo '<div class="grid-12">';
        }
        
    endif; // if(is_page_template()) 
	
	/**
	 * content top sidebar if enabled
	 * @since S3 Framework 1.0
	 */
	include_once("blocks/contentTop.php");
	
	/**
	 * page template no-post to hide post/page area
	 */
	if(is_page_template('layouts/no-post.php')):	
		// this will not post/page area but sidebars will be enabled
	else: 
	
	/**
	 * if no-post selected default will be display
	 */
	echo '<div id="page-content" class="block dc-page-content">';
		echo '<article>';
		
	endif;

/**
 * Hide main body by selecting Layout: Without Body in page template
 * if(is_page_template('layouts/no-body.php')):
 */
endif;