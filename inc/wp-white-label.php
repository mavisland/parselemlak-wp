<?php

// Remove the Admin Toolbar with Code
add_filter('show_admin_bar', '__return_false');

// Disable Admin Bar for All Users Except for Administrators
function remove_admin_bar() {
	if (!current_user_can('administrator') && !is_admin()) {
		show_admin_bar(false);
	}
}
// add_action('after_setup_theme', 'remove_admin_bar');

// Remove Wordpress Emoji
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );