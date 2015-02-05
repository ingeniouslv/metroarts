<?php

if ( ! function_exists( 'mac_setup' ) ):


function mac_setup() {
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );
	add_theme_support( 'post-thumbnails' );
}
endif;
add_action( 'after_setup_theme', 'mac_setup' );

include_once( 'inc/acf/acf.php' );
	include_once('inc/acf-add-ons/acf-gallery/gallery.php');
	include_once('inc/acf-add-ons/acf-repeater/repeater.php');
