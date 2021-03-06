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

function remove_css_id_filter($var) {
	$classes = array(
		'current-menu-ancestor',
		'current-menu-item',
		'menu-parent-item',
	);
	return is_array($var) ? array_intersect($var, $classes) : '';
}
add_filter( 'page_css_class', 'remove_css_id_filter', 100, 1);
add_filter( 'nav_menu_item_id', 'remove_css_id_filter', 100, 1);
add_filter( 'nav_menu_css_class', 'remove_css_id_filter', 100, 1);

function clean_custom_menu( $theme_location ) {
	if ( ($theme_location) && ($locations = get_nav_menu_locations()) && isset($locations[$theme_location]) ) {
		$menu       = get_term( $locations[$theme_location], 'nav_menu' );
		$menu_items = wp_get_nav_menu_items($menu->term_id);
		$count      = 0;
		$submenu    = false;
		foreach( $menu_items as $menu_item ) {
			$link  = $menu_item->url;
			$title = $menu_item->title;
			if ( !$menu_item->menu_item_parent ) {
				$parent_id = $menu_item->ID;
			}
			if ( $parent_id == $menu_item->menu_item_parent ) {
				if ( !$submenu ) {
					$submenu = true;
					$menu_list .= '<div class="submenu-wrapper" id="menu-item-' . $parent_id . '">' ."\n";
					$menu_list .= '<div class="wrapper">' ."\n";
					$menu_list .= '<ul class="submenu">' ."\n";
				}
				$menu_list .= '<li><a href="'.$link.'">'.$title.'</a></li>' ."\n";
				if ( $menu_items[ $count + 1 ]->menu_item_parent != $parent_id && $submenu ){
					$menu_list .= '</ul>' ."\n";
					$menu_list .= '</div>' ."\n";
					$menu_list .= '</div>' ."\n";
					$submenu = false;
				}
			}
			$count++;
		}
	} else {
		$menu_list = '<!-- no menu defined in location "'.$theme_location.'" -->';
	}
	echo $menu_list;
}

//* Show the taxonomy ID
add_filter( "manage_edit-category_columns", 'my_add_col' );
add_filter( "manage_edit-category_sortable_columns", 'my_add_col' );
add_filter( "manage_category_custom_column", 'my_tax_id', 10, 3 );

function my_add_col( $new_columns ) {
	$new_columns = array(
		'cb' => '<input type="checkbox" />',
		'name'   => __('Name'),
		'tax_id' => 'ID',
		'slug'   => __('Slug'),
		'posts'  => __('Posts'),
	);
	return $new_columns;
}
function my_tax_id( $value, $name, $id ) {
	return 'tax_id' === $name ? $id : $value;
}