<?php
	register_sidebar( array(
		'name' => __( 'Top Left', 'shaz3e' ),
		'id' => 'top-left',
		'description' => __( 'Description', 'shaz3e' ),
		'before_widget' => '<div id="%1$s" class="dc-block %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	) );
	
	register_sidebar( array(
		'name' => __( 'Top Right', 'shaz3e' ),
		'id' => 'top-right',
		'description' => __( 'Description', 'shaz3e' ),
		'before_widget' => '<div id="%1$s" class="dc-block %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	) );
?>