<?php

/**
 * @author Divi Space
 * @copyright 2022
 */

if ( ! defined('ABSPATH') ) {
	die();
}


include(get_stylesheet_directory() . '/custom-wm-shortcode-module.php');

add_action('wp_enqueue_scripts', 'ds_ct_enqueue_parent');

function ds_ct_enqueue_parent() {
	wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
}






?>