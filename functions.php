<?php

if ( ! function_exists( 'mac_setup' ) ):


function mac_setup() {
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );
	add_theme_support( 'post-thumbnails' );
}
endif;
add_action( 'after_setup_theme', 'mac_setup' );

define( 'ACF_LITE', true );
include_once( 'inc/acf/acf.php' );
include_once('inc/acf-add-ons/acf-gallery/gallery.php');
include_once('inc/acf-add-ons/acf-repeater/repeater.php');


/* updated acf fields */
if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_frontpage-slider-2',
		'title' => 'Frontpage Slider',
		'fields' => array (
			array (
				'key' => 'field_54d300597b217',
				'label' => 'Frontpage Slider',
				'name' => 'frontpage_slider',
				'type' => 'repeater',
				'instructions' => 'Input Slider images, in order, with titles, urls and captions for front page slides.',
				'sub_fields' => array (
					array (
						'key' => 'field_54d3018e0c924',
						'label' => 'Slider Image',
						'name' => 'slider_image',
						'type' => 'image',
						'instructions' => 'Enter an image for the slide',
						'column_width' => '',
						'save_format' => 'url',
						'preview_size' => 'thumbnail',
						'library' => 'all',
					),
					array (
						'key' => 'field_54d301d40c925',
						'label' => 'Slide Title',
						'name' => 'slide_title',
						'type' => 'text',
						'instructions' => 'Enter the title for the slide',
						'column_width' => '',
						'default_value' => '',
						'placeholder' => 'Title Goes Here',
						'prepend' => '',
						'append' => '',
						'formatting' => 'none',
						'maxlength' => '',
					),
					array (
						'key' => 'field_54d302030c926',
						'label' => 'Slide Text',
						'name' => 'slide_text',
						'type' => 'textarea',
						'instructions' => 'Enter the actual copy text that will be displayed under the title',
						'column_width' => '',
						'default_value' => '',
						'placeholder' => '',
						'maxlength' => '',
						'rows' => '',
						'formatting' => 'br',
					),
					array (
						'key' => 'field_54d302310c927',
						'label' => 'Slide URL',
						'name' => 'slide_url',
						'type' => 'page_link',
						'instructions' => 'Select the page this slide will link to',
						'column_width' => '',
						'post_type' => array (
							0 => 'page',
						),
						'allow_null' => 0,
						'multiple' => 0,
					),
					array (
						'key' => 'field_54d30bf73f043',
						'label' => 'Slide Position',
						'name' => 'slide_position',
						'type' => 'select',
						'column_width' => '',
						'choices' => array (
							'left' => 'Left',
							'right' => 'Right',
						),
						'default_value' => 'left',
						'allow_null' => 0,
						'multiple' => 0,
					),
				),
				'row_min' => 0,
				'row_limit' => '',
				'layout' => 'table',
				'button_label' => 'Add Row',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'front-page.php',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'acf_after_title',
			'layout' => 'default',
			'hide_on_screen' => array (
				0 => 'the_content',
				1 => 'excerpt',
				2 => 'custom_fields',
			),
		),
		'menu_order' => 0,
	));
}
