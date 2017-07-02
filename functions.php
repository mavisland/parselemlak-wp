<?php

// OptionTree Theme version
define( 'OT_THEME_VERSION', '2.6.0' );

if ( ! function_exists( 'parsel_setup' ) ) :
function parsel_setup() {
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'featured', 9999, 270, array( 'center', 'center' ) );
	add_image_size( 'post-thumb', 350, 220);
	register_nav_menus( array(
		'topbar'    => 'Üst Bar Menü',
		'primary'   => 'Üst Menü',
		'secondary' => 'Yan Menü',
		'footer'    => 'Alt Menü',
	) );
}
endif;
add_action( 'after_setup_theme', 'parsel_setup' );

function parsel_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'parsel_content_width', 640 );
}
add_action( 'after_setup_theme', 'parsel_content_width', 0 );

// Enqueue scripts and styles.
function parsel_scripts() {
	// Replace default WordPress jQuery script with local file.
	if ( !is_admin() ) {
		wp_deregister_script( 'jquery' );
		wp_register_script( 'jquery', get_template_directory_uri() . '/js/jquery.min.js', false, '3.2.1' );
		wp_enqueue_script( 'jquery' );
	}
	wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.min.css' );
	wp_enqueue_script( 'scripts', get_template_directory_uri() . '/js/scripts.min.js', 'jquery', '1.0.0', true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'parsel_scripts' );

// Register Custom Navigation Walker
require get_template_directory() . '/library/wp-bootstrap-navwalker/wp-bootstrap-navwalker.php';

// Bootstrap Breadcrumbs
require get_template_directory() . '/library/wp-bootstrap-breadcrumb/wp-bootstrap-breadcrumb.php';

// Filters the Theme Option header list.
function filter_demo_header_list() {
	echo '';
}
add_action( 'ot_header_list', 'filter_demo_header_list' );
// Filters the Theme Option header logo link.
function filter_ot_header_logo_link() {
	echo '';
}
add_action( 'ot_header_logo_link', 'filter_ot_header_logo_link' );
// Filters the Theme Option header version text.
function filter_ot_header_version_text() {
	echo '<li id="option-tree-version"><span>Parsel Emlak / Tema Ayarları</span></li>';
}
add_action( 'ot_header_version_text', 'filter_ot_header_version_text' );

// Theme Mode
add_filter( 'ot_theme_mode', '__return_true' );
// Show Settings Pages
add_filter( 'ot_show_pages', '__return_false' );
// Show Theme Options UI Builder
add_filter( 'ot_show_options_ui', '__return_false' );
// Show Settings Import
add_filter( 'ot_show_settings_import', '__return_false' );
// Show Settings Export
add_filter( 'ot_show_settings_export', '__return_false' );
// Show New Layout
add_filter( 'ot_show_new_layout', '__return_false' );
// Show Documentation
add_filter( 'ot_show_docs', '__return_false' );
// Allow Unfiltered HTML in textareas options
add_filter( 'ot_allow_unfiltered_html', '__return_false' );
// Loads the meta boxes for post formats
add_filter( 'ot_post_formats', '__return_true' );
// OptionTree in Theme Mode
require( trailingslashit( get_template_directory() ) . 'admin/ot-loader.php' );
// Theme Options
require( trailingslashit( get_template_directory() ) . 'inc/theme-options.php' );

// Custom Post Types
require get_template_directory() . '/inc/post-types/slider.php';
// Custom Meta Boxes
require get_template_directory() . '/inc/metabox/slider.php';
// Custom theme functions
require get_template_directory() . '/inc/theme-functions.php';
