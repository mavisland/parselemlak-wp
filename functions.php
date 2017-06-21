<?php

if ( ! function_exists( 'parsel_setup' ) ) :
function parsel_setup() {
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => 'Üst Menü',
	) );
}
endif;
add_action( 'after_setup_theme', 'parsel_setup' );

function parsel_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'parsel_content_width', 640 );
}
add_action( 'after_setup_theme', 'parsel_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function parsel_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'parsel' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'parsel' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'parsel_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function parsel_scripts() {
	wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.min.css' );
	wp_enqueue_script( 'scripts', get_template_directory_uri() . '/js/scripts.min.js', 'jquery', '1.0.0', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'parsel_scripts' );

/**
 * Replace default WordPress jQuery script with local file.
 */
function modify_jquery() {
	if ( !is_admin() ) {
		wp_deregister_script( 'jquery' );
		wp_register_script( 'jquery', get_template_directory_uri() . '/js/jquery.min.js', false, '3.2.1' );
		wp_enqueue_script( 'jquery' );
	}
}
add_action('init', 'modify_jquery');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Additional features to allow styling of the templates.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customization Codes
 */
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