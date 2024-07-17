<?php
/*
 * Enqueue styles and scripts
 *  Setos 2.0
 */
 function enqueue_my_styles() {
	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/vendor/bootstrap/css/bootstrap.min.css', array(), '', 'all');
	wp_enqueue_style('bootstrap-icons', get_template_directory_uri() . '/assets/vendor/bootstrap-icons/bootstrap-icons.css', array(), '', 'all');
	wp_enqueue_style('boxicons', get_template_directory_uri() . '/assets/vendor/boxicons/css/boxicons.min.css', array(), '', 'all');
	wp_enqueue_style('remixicon', get_template_directory_uri() . '/assets/vendor/remixicon/remixicon.css', array(), '', 'all');
	wp_enqueue_style('slick-css', get_template_directory_uri() . '/assets/vendor/slick/slick.css', array(), '', 'all');
	wp_enqueue_style('slick-theme', get_template_directory_uri() . '/assets/vendor/slick/slick-theme.css', array(), '', 'all');
	wp_enqueue_style('css', get_template_directory_uri() . '/style.css', array(), '', 'all');
}
add_action('wp', 'enqueue_my_styles');