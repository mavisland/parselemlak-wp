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

// Remove WP Version from styles and scripts
add_filter( 'style_loader_src', 'sdt_remove_ver_css_js', 9999 );
add_filter( 'script_loader_src', 'sdt_remove_ver_css_js', 9999 );

function sdt_remove_ver_css_js( $src ) {
	if ( strpos( $src, 'ver=' ) )
		$src = remove_query_arg( 'ver', $src );
	return $src;
}

function get_image_url_by_id($image_id, $image_size = "thumbnail") {
	$image_src = wp_get_attachment_image_src( $image_id, $image_size );
	$image_url = $image_src[0];
	return $image_url;
}
