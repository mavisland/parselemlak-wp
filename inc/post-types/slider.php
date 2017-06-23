<?php

add_action( 'init', 'parsel_slider_cpt', 0 );

function parsel_slider_cpt() {
	$labels = array(
		'name'               => 'Slider',
		'singular_name'      => 'Slider',
		'menu_name'          => 'Slider',
		'name_admin_bar'     => 'Slider',
		'all_items'          => 'Tüm Sliderlar',
		'add_new_item'       => 'Yeni Slider Ekle',
		'edit_item'          => 'Slider Düzenle',
		'view_item'          => 'Sliderı Görüntüle',
		'not_found'          => 'Hiç slider bulunamadı.',
		'not_found_in_trash' => 'Çöp kutusu içinde bulunan slider yok.',
	);
	$args = array(
		'label'               => 'Slider',
		'description'         => 'Slider',
		'labels'              => $labels,
		'supports'            => array( 'title', 'author' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 20,
		'menu_icon'           => 'dashicons-slides',
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'rewrite'             => false,
		'capability_type'     => 'post',
	);
	register_post_type( 'slider', $args );
}

function hide_meta_boxes_slider() {
	remove_meta_box('authordiv', 'slider', 'normal');
}
add_filter('add_meta_boxes', 'hide_meta_boxes_slider');
