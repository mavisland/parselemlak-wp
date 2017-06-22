<?php

// OptionTree Theme version
define( 'OT_THEME_VERSION', '2.5.4' );

if ( ! function_exists( 'parsel_setup' ) ) :
function parsel_setup() {
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	register_nav_menus( array(
		'primary'   => 'Üst Menü',
		'secondary' => 'Yan Menü',
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

// White Label functions
require get_template_directory() . '/inc/wp-white-label.php';

// Register Custom Navigation Walker
require get_template_directory() . '/library/wp-bootstrap-navwalker/wp-bootstrap-navwalker.php';

/**
 * Filters the Theme Options ID
 */
function filter_demo_options_id() {
	return 'demo_option_tree';
}
add_filter( 'ot_options_id', 'filter_demo_options_id' );

/**
 * Filters the Settings ID
 */
function filter_demo_settings_id() {
	return 'demo_option_tree_settings';
}
add_filter( 'ot_settings_id', 'filter_demo_settings_id' );

/**
 * Filters the Layouts ID
 */
function filter_demo_layouts_id() {
	return 'demo_option_tree_layouts';
}
add_filter( 'ot_layouts_id', 'filter_demo_layouts_id' );

/**
 * Filters the Theme Option header list.
 */
function filter_demo_header_list() {
	 echo '<li id="theme-version"><span>OptionTree Theme ' . OT_THEME_VERSION . '</span></li>';
}
add_action( 'ot_header_list', 'filter_demo_header_list' );

// Theme Mode
add_filter( 'ot_theme_mode', '__return_true' );
// Child Theme Mode
add_filter( 'ot_child_theme_mode', '__return_false' );
// Show Settings Pages
add_filter( 'ot_show_pages', '__return_true' );
// Show Theme Options UI Builder
add_filter( 'ot_show_options_ui', '__return_true' );
// Show Settings Import
add_filter( 'ot_show_settings_import', '__return_true' );
// Show Settings Export
add_filter( 'ot_show_settings_export', '__return_true' );
// Show New Layout
add_filter( 'ot_show_new_layout', '__return_false' );
// Show Documentation
add_filter( 'ot_show_docs', '__return_false' );
// Custom Theme Option page
add_filter( 'ot_use_theme_options', '__return_true' );
// Meta Boxes
add_filter( 'ot_meta_boxes', '__return_true' );
// Allow Unfiltered HTML in textareas options
add_filter( 'ot_allow_unfiltered_html', '__return_false' );
// Loads the meta boxes for post formats
add_filter( 'ot_post_formats', '__return_true' );
// OptionTree in Theme Mode
require( trailingslashit( get_template_directory() ) . 'admin/ot-loader.php' );
// Theme Options
require( trailingslashit( get_template_directory() ) . 'inc/theme-options.php' );
// Meta Boxes
require( trailingslashit( get_template_directory() ) . 'inc/meta-boxes.php' );

function soru_shortcode( $atts, $content = null ) {
	extract( shortcode_atts( array( 'baslik' => '', ), $atts ) );
	$rand = rand();

	$output = '
	<div class="panel panel-default ">
		<div class="panel-heading accordion-toggle question-toggle collapsed" data-toggle="collapse" data-parent="#faqAccordion" data-target="#' . $rand . '">
			<h4 class="panel-title">
				<a role="button" data-toggle="collapse" data-parent="#faqAccordion" href="#' . $rand . '" aria-expanded="true" aria-controls="' . $rand . '">'. $baslik .'</a>
			</h4>
		</div>
		<div id="' . $rand . '" class="panel-collapse collapse" style="height: 0px;">
			<div class="panel-body">
				<p>' . do_shortcode($content) . '</p>
			</div>
		</div>
	</div>';

	return $output;
}
add_shortcode('soru', 'soru_shortcode');
