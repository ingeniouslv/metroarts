<?php

if ( ! function_exists( 'mac_setup' ) ):


function mac_setup() {
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );
	add_theme_support( 'post-thumbnails' ); 
}
endif;
add_action( 'after_setup_theme', 'mac_setup' );