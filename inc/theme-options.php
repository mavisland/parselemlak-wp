<?php
/**
 * Initialize the custom Theme Options.
 */
add_action( 'init', 'parsel_theme_options' );

/**
 * Build the custom settings & update OptionTree.
 *
 * @return    void
 * @since     2.3.0
 */
function parsel_theme_options() {
	/* OptionTree is not loaded yet, or this is not an admin request */
	if ( ! function_exists( 'ot_settings_id' ) || ! is_admin() )
		return false;

	/**
	 * Get a copy of the saved settings array.
	 */
	$saved_settings = get_option( ot_settings_id(), array() );

	/**
	 * Custom settings array that will eventually be
	 * passes to the OptionTree Settings API Class.
	 */
	$custom_settings = array(
		'contextual_help' => array(
			'content'       => array(
				array(
					'id'        => 'option_types_help',
					'title'     => __( 'Option Types', 'option-tree-theme' ),
					'content'   => '<p>' . __( 'Help content goes here!', 'option-tree-theme' ) . '</p>'
				)
			),
			'sidebar'       => '<p>' . __( 'Sidebar content goes here!', 'option-tree-theme' ) . '</p>'
		),
		'sections'        => array(
			array(
				'id'          => 'option_types',
				'title'       => __( 'Option Types', 'option-tree-theme' )
			),
			array(
				'id'    => 'section_social_links',
				'title' => 'Sosyal Linkler'
			),
			array(
				'id'    => 'section_contact',
				'title' => 'İletişim'
			)
		),
		'settings'        => array(
			array(
				'id'          => 'demo_background',
				'label'       => __( 'Background', 'option-tree-theme' ),
				'desc'        => sprintf( __( 'The Background option type is for adding background styles to your theme either dynamically via the CSS option type below or manually with %s. The Background option type has filters that allow you to remove fields or change the defaults. For example, you can filter %s to remove unwanted fields from all Background options or an individual one. You can also filter %s. These filters allow you to fine tune the select lists for your specific needs.', 'option-tree-theme' ), '<code>ot_get_option()</code>', '<code>ot_recognized_background_fields</code>', '<code>ot_recognized_background_repeat</code>, <code>ot_recognized_background_attachment</code>, <code>ot_recognized_background_position</code>, ' . __( 'and', 'option-tree-theme' ) . ' <code>ot_type_background_size_choices</code>' ),
				'std'         => '',
				'type'        => 'background',
				'section'     => 'option_types',
				'rows'        => '',
				'post_type'   => '',
				'taxonomy'    => '',
				'min_max_step'=> '',
				'class'       => '',
				'condition'   => '',
				'operator'    => 'and'
			),
			array(
				'id'          => 'demo_border',
				'label'       => __( 'Border', 'option-tree-theme' ),
				'desc'        => __( 'The Border option type is used to set width, unit, style, and color values.', 'option-tree-theme' ),
				'std'         => '',
				'type'        => 'border',
				'section'     => 'option_types',
				'rows'        => '',
				'post_type'   => '',
				'taxonomy'    => '',
				'min_max_step'=> '',
				'class'       => '',
				'condition'   => '',
				'operator'    => 'and'
			),
			array(
				'id'          => 'demo_box_shadow',
				'label'       => __( 'Box Shadow', 'option-tree-theme' ),
				'desc'        => sprintf( __( 'The Box Shadow option type is used to set %s, %s, %s, %s, %s, and %s values.', 'option-tree-theme' ), '<code>inset</code>', '<code>offset-x</code>', '<code>offset-y</code>', '<code>blur-radius</code>', '<code>spread-radius</code>', '<code>color</code>' ),
				'std'         => '',
				'type'        => 'box-shadow',
				'section'     => 'option_types',
				'rows'        => '',
				'post_type'   => '',
				'taxonomy'    => '',
				'min_max_step'=> '',
				'class'       => '',
				'condition'   => '',
				'operator'    => 'and'
			),
			array(
				'id'          => 'demo_category_checkbox',
				'label'       => __( 'Category Checkbox', 'option-tree-theme' ),
				'desc'        => __( 'The Category Checkbox option type displays a list of category IDs. It allows the user to check multiple category IDs and will return that value as an array for use in a custom function or loop.', 'option-tree-theme' ),
				'std'         => '',
				'type'        => 'category-checkbox',
				'section'     => 'option_types',
				'rows'        => '',
				'post_type'   => '',
				'taxonomy'    => '',
				'min_max_step'=> '',
				'class'       => '',
				'condition'   => '',
				'operator'    => 'and'
			),
			array(
				'id'          => 'demo_category_select',
				'label'       => __( 'Category Select', 'option-tree-theme' ),
				'desc'        => __( 'The Category Select option type displays a list of category IDs. It allows the user to select only one category ID and will return that value for use in a custom function or loop.', 'option-tree-theme' ),
				'std'         => '',
				'type'        => 'category-select',
				'section'     => 'option_types',
				'rows'        => '',
				'post_type'   => '',
				'taxonomy'    => '',
				'min_max_step'=> '',
				'class'       => '',
				'condition'   => '',
				'operator'    => 'and'
			),
			array(
				'id'          => 'demo_checkbox',
				'label'       => __( 'Checkbox', 'option-tree-theme' ),
				'desc'        => __( 'The Checkbox option type displays a group of choices. It allows the user to check multiple choices and will return that value as an array for use in a custom function or loop.', 'option-tree-theme' ),
				'std'         => '',
				'type'        => 'checkbox',
				'section'     => 'option_types',
				'rows'        => '',
				'post_type'   => '',
				'taxonomy'    => '',
				'min_max_step'=> '',
				'class'       => '',
				'condition'   => '',
				'operator'    => 'and',
				'choices'     => array(
					array(
						'value'       => 'no',
						'label'       => __( 'No', 'option-tree-theme' ),
						'src'         => ''
					),
					array(
						'value'       => 'Yes',
						'label'       => __( 'Yes', 'option-tree-theme' ),
						'src'         => ''
					)
				)
			),
			array(
				'id'          => 'demo_colorpicker',
				'label'       => __( 'Colorpicker', 'option-tree-theme' ),
				'desc'        => __( 'The Colorpicker option type saves a hexadecimal color code for use in CSS. Use it to modify the color of something in your theme.', 'option-tree-theme' ),
				'std'         => '',
				'type'        => 'colorpicker',
				'section'     => 'option_types',
				'rows'        => '',
				'post_type'   => '',
				'taxonomy'    => '',
				'min_max_step'=> '',
				'class'       => '',
				'condition'   => '',
				'operator'    => 'and'
			),
			array(
				'id'          => 'demo_colorpicker_opacity',
				'label'       => __( 'Colorpicker Opacity', 'option-tree-theme' ),
				'desc'        => sprintf( __( 'The Colorpicker Opacity option type saves an rgba color value for use in CSS. To add opacity to other colorpickers add the %s class to the %s array.', 'option-tree-theme' ), '<code>ot-colorpicker-opacity</code>', '<code>$args</code>' ),
				'std'         => '',
				'type'        => 'colorpicker-opacity',
				'section'     => 'option_types',
				'rows'        => '',
				'post_type'   => '',
				'taxonomy'    => '',
				'min_max_step'=> '',
				'class'       => '',
				'condition'   => '',
				'operator'    => 'and'
			),
			array(
				'id'          => 'demo_css',
				'label'       => __( 'CSS', 'option-tree-theme' ),
				'desc'        => '<p>' . sprintf( __( 'The CSS option type is a textarea that when used properly can add dynamic CSS to your theme from within OptionTree. Unfortunately, due server limitations you will need to create a file named %s at the root level of your theme and change permissions using %s so the server can write to the file. I have had the most success setting this single file to %s but feel free to play around with permissions until everything is working. A good starting point is %s. When the server can save to the file, CSS will automatically be updated when you save your Theme Options.', 'option-tree-theme' ), '<code>dynamic.css</code>', '<code>chmod</code>', '<code>0777</code>', '<code>0666</code>' ) . '</p><p>' . sprintf( __( 'This example assumes you have an option with the ID of %1$s. Which means this option will automatically insert the value of %1$s into the %2$s when the Theme Options are saved.', 'option-tree-theme' ), '<code>demo_background</code>', '<code>dynamic.css</code>' ) . '</p>',
				'std'         => '/* Background */
body {
	{{demo_background}}
}
/* Border */
.border {
	border: {{demo_border}};
}
/* Box Shadow */
.box-shadow {
	box-shadow: {{demo_box_shadow}};
}
/* Colorpicker */
.colorpicker {
	background-color: {{demo_colorpicker}};
}
/* Colorpicker Opacity */
.colorpicker-opacity {
	background-color: {{demo_colorpicker_opacity}};
}
/* Link Color */
body a:link {
	color: {{demo_link_color|link}};
}
body a:hover {
	color: {{demo_link_color|hover}};
}
body a:active {
	color: {{demo_link_color|active}};
}
body a:visited {
	color: {{demo_link_color|visited}};
}
body a:focus {
	color: {{demo_link_color|focus}};
}',
				'type'        => 'css',
				'section'     => 'option_types',
				'rows'        => '20',
				'post_type'   => '',
				'taxonomy'    => '',
				'min_max_step'=> '',
				'class'       => '',
				'condition'   => '',
				'operator'    => 'and'
			),
			array(
				'id'          => 'demo_custom_post_type_checkbox',
				'label'       => __( 'Custom Post Type Checkbox', 'option-tree-theme' ),
				'desc'        => sprintf( __( 'The Custom Post Type Select option type displays a list of IDs from any available WordPress post type or custom post type. It allows the user to check multiple post IDs for use in a custom function or loop. Requires at least one valid %1$s in the %1$s field.', 'option-tree-theme' ), '<code>post_type</code>' ),
				'std'         => '',
				'type'        => 'custom-post-type-checkbox',
				'section'     => 'option_types',
				'rows'        => '',
				'post_type'   => 'post',
				'taxonomy'    => '',
				'min_max_step'=> '',
				'class'       => '',
				'condition'   => '',
				'operator'    => 'and'
			),
			array(
				'id'          => 'demo_custom_post_type_select',
				'label'       => __( 'Custom Post Type Select', 'option-tree-theme' ),
				'desc'        => sprintf( __( 'The Custom Post Type Select option type displays a list of IDs from any available WordPress post type or custom post type. It will return a single post ID for use in a custom function or loop. Requires at least one valid %1$s in the %1$s field.', 'option-tree-theme' ), '<code>post_type</code>' ),
				'std'         => '',
				'type'        => 'custom-post-type-select',
				'section'     => 'option_types',
				'rows'        => '',
				'post_type'   => 'post',
				'taxonomy'    => '',
				'min_max_step'=> '',
				'class'       => '',
				'condition'   => '',
				'operator'    => 'and'
			),
			array(
				'id'          => 'demo_date_picker',
				'label'       => __( 'Date Picker', 'option-tree-theme' ),
				'desc'        => __( 'The Date Picker option type is tied to a standard form input field which displays a calendar pop-up that allow the user to pick any date when focus is given to the input field. The returned value is a date formatted string.', 'option-tree-theme' ),
				'std'         => '',
				'type'        => 'date-picker',
				'section'     => 'option_types',
				'rows'        => '',
				'post_type'   => '',
				'taxonomy'    => '',
				'min_max_step'=> '',
				'class'       => '',
				'condition'   => '',
				'operator'    => 'and'
			),
			array(
				'id'          => 'demo_date_time_picker',
				'label'       => __( 'Date Time Picker', 'option-tree-theme' ),
				'desc'        => __( 'The Date Time Picker option type is tied to a standard form input field which displays a calendar pop-up that allow the user to pick any date and time when focus is given to the input field. The returned value is a date and time formatted string.', 'option-tree-theme' ),
				'std'         => '',
				'type'        => 'date-time-picker',
				'section'     => 'option_types',
				'rows'        => '',
				'post_type'   => '',
				'taxonomy'    => '',
				'min_max_step'=> '',
				'class'       => '',
				'condition'   => '',
				'operator'    => 'and'
			),
			array(
				'id'          => 'demo_dimension',
				'label'       => __( 'Dimension', 'option-tree-theme' ),
				'desc'        => __( 'The Dimension option type is used to set width and height values.', 'option-tree-theme' ),
				'std'         => '',
				'type'        => 'dimension',
				'section'     => 'option_types',
				'rows'        => '',
				'post_type'   => '',
				'taxonomy'    => '',
				'min_max_step'=> '',
				'class'       => '',
				'condition'   => '',
				'operator'    => 'and'
			),
			array(
				'id'          => 'demo_gallery',
				'label'       => __( 'Gallery', 'option-tree-theme' ),
				'desc'        => __( 'The Gallery option type saves a comma separated list of image attachment IDs. You will need to create a front-end function to display the images in your theme.', 'option-tree-theme' ),
				'std'         => '',
				'type'        => 'gallery',
				'section'     => 'option_types',
				'rows'        => '',
				'post_type'   => '',
				'taxonomy'    => '',
				'min_max_step'=> '',
				'class'       => '',
				'condition'   => '',
				'operator'    => 'and'
			),
			array(
				'id'          => 'demo_gallery_shortcode',
				'label'       => __( 'Gallery Shortcode', 'option-tree-theme' ),
				'desc'        => sprintf( __( 'The Gallery option type can also be saved as a shortcode by adding %s to the class attribute. Using the Gallery option type in this manner will result in a better user experience as you\'re able to save the link, column, and order settings.', 'option-tree-theme' ), '<code>ot-gallery-shortcode</code>' ),
				'std'         => '',
				'type'        => 'gallery',
				'section'     => 'option_types',
				'rows'        => '',
				'post_type'   => '',
				'taxonomy'    => '',
				'min_max_step'=> '',
				'class'       => 'ot-gallery-shortcode',
				'condition'   => '',
				'operator'    => 'and'
			),
			array(
				'id'          => 'demo_google_fonts',
				'label'       => __( 'Google Fonts', 'option-tree-theme' ),
				'desc'        => sprintf( __( 'The Google Fonts option type will dynamically enqueue any number of Google Web Fonts into the document %1$s. As well, once the option has been saved each font family will automatically be inserted into the %2$s array for the Typography option type. You can further modify the font stack by using the %3$s filter, which is passed the %4$s, %5$s, and %6$s parameters. The %6$s parameter is being passed from %7$s, so it will be the ID of a Typography option type. This will allow you to add additional web safe fonts to individual font families on an as-need basis.', 'option-tree-theme' ), '<code>HEAD</code>', '<code>font-family</code>', '<code>ot_google_font_stack</code>', '<code>$font_stack</code>', '<code>$family</code>', '<code>$field_id</code>', '<code>ot_recognized_font_families</code>' ),
				'std'         => array(
					array(
						'family'    => 'opensans',
						'variants'  => array( '300', '300italic', 'regular', 'italic', '600', '600italic' ),
						'subsets'   => array( 'latin' )
					)
				),
				'type'        => 'google-fonts',
				'section'     => 'option_types',
				'rows'        => '',
				'post_type'   => '',
				'taxonomy'    => '',
				'min_max_step'=> '',
				'class'       => '',
				'condition'   => '',
				'operator'    => 'and'
			),
			array(
				'id'          => 'demo_javascript',
				'label'       => __( 'JavaScript', 'option-tree-theme' ),
				'desc'        => '<p>' . sprintf( __( 'The JavaScript option type is a textarea that uses the %s code editor to highlight your JavaScript and display errors as you type.', 'option-tree-theme' ), '<code>ace.js</code>' ) . '</p>',
				'std'         => '',
				'type'        => 'javascript',
				'section'     => 'option_types',
				'rows'        => '20',
				'post_type'   => '',
				'taxonomy'    => '',
				'min_max_step'=> '',
				'class'       => '',
				'condition'   => '',
				'operator'    => 'and'
			),
			array(
				'id'          => 'demo_link_color',
				'label'       => __( 'Link Color', 'option-tree-theme' ),
				'desc'        => __( 'The Link Color option type is used to set all link color states.', 'option-tree-theme' ),
				'std'         => '',
				'type'        => 'link-color',
				'section'     => 'option_types',
				'rows'        => '',
				'post_type'   => '',
				'taxonomy'    => '',
				'min_max_step'=> '',
				'class'       => '',
				'condition'   => '',
				'operator'    => 'and'
			),
			array(
				'id'          => 'demo_list_item',
				'label'       => __( 'List Item', 'option-tree-theme' ),
				'desc'        => __( 'The List Item option type allows for a great deal of customization. You can add settings to the List Item and those settings will be displayed to the user when they add a new List Item. Typical use is for creating sliding content or blocks of code for custom layouts.', 'option-tree-theme' ),
				'std'         => '',
				'type'        => 'list-item',
				'section'     => 'option_types',
				'rows'        => '',
				'post_type'   => '',
				'taxonomy'    => '',
				'min_max_step'=> '',
				'class'       => '',
				'condition'   => '',
				'operator'    => 'and',
				'settings'    => array(
					array(
						'id'          => 'demo_list_item_content',
						'label'       => __( 'Content', 'option-tree-theme' ),
						'desc'        => '',
						'std'         => '',
						'type'        => 'textarea-simple',
						'rows'        => '10',
						'post_type'   => '',
						'taxonomy'    => '',
						'min_max_step'=> '',
						'class'       => '',
						'condition'   => '',
						'operator'    => 'and'
					)
				)
			),
			array(
				'id'          => 'demo_measurement',
				'label'       => __( 'Measurement', 'option-tree-theme' ),
				'desc'        => sprintf( __( 'The Measurement option type is a mix of input and select fields. The text input excepts a value and the select lets you choose the unit of measurement to add to that value. Currently the default units are %s, %s, %s, and %s. However, you can change them with the %s filter.', 'option-tree-theme' ), '<code>px</code>', '<code>%</code>', '<code>em</code>', '<code>pt</code>', '<code>ot_measurement_unit_types</code>' ),
				'std'         => '',
				'type'        => 'measurement',
				'section'     => 'option_types',
				'rows'        => '',
				'post_type'   => '',
				'taxonomy'    => '',
				'min_max_step'=> '',
				'class'       => '',
				'condition'   => '',
				'operator'    => 'and'
			),
			array(
				'id'          => 'demo_numeric_slider',
				'label'       => __( 'Numeric Slider', 'option-tree-theme' ),
				'desc'        => __( 'The Numeric Slider option type displays a jQuery UI slider. It will return a single numerical value for use in a custom function or loop.', 'option-tree-theme' ),
				'std'         => '',
				'type'        => 'numeric-slider',
				'section'     => 'option_types',
				'rows'        => '',
				'post_type'   => '',
				'taxonomy'    => '',
				'min_max_step'=> '-500,5000,100',
				'class'       => '',
				'condition'   => '',
				'operator'    => 'and'
			),
			array(
				'id'          => 'demo_on_off',
				'label'       => __( 'On/Off', 'option-tree-theme' ),
				'desc'        => sprintf( __( 'The On/Off option type displays a simple switch that can be used to turn things on or off. The saved return value is either %s or %s.', 'option-tree-theme' ), '<code>on</code>', '<code>off</code>' ),
				'std'         => '',
				'type'        => 'on-off',
				'section'     => 'option_types',
				'rows'        => '',
				'post_type'   => '',
				'taxonomy'    => '',
				'min_max_step'=> '',
				'class'       => '',
				'condition'   => '',
				'operator'    => 'and'
			),
			array(
				'id'          => 'demo_page_checkbox',
				'label'       => __( 'Page Checkbox', 'option-tree-theme' ),
				'desc'        => __( 'The Page Checkbox option type displays a list of page IDs. It allows the user to check multiple page IDs for use in a custom function or loop.', 'option-tree-theme' ),
				'std'         => '',
				'type'        => 'page-checkbox',
				'section'     => 'option_types',
				'rows'        => '',
				'post_type'   => '',
				'taxonomy'    => '',
				'min_max_step'=> '',
				'class'       => '',
				'condition'   => '',
				'operator'    => 'and'
			),
			array(
				'id'          => 'demo_page_select',
				'label'       => __( 'Page Select', 'option-tree-theme' ),
				'desc'        => __( 'The Page Select option type displays a list of page IDs. It will return a single page ID for use in a custom function or loop.', 'option-tree-theme' ),
				'std'         => '',
				'type'        => 'page-select',
				'section'     => 'option_types',
				'rows'        => '',
				'post_type'   => '',
				'taxonomy'    => '',
				'min_max_step'=> '',
				'class'       => '',
				'condition'   => '',
				'operator'    => 'and'
			),
			array(
				'id'          => 'demo_post_checkbox',
				'label'       => __( 'Post Checkbox', 'option-tree-theme' ),
				'desc'        => __( 'The Post Checkbox option type displays a list of post IDs. It allows the user to check multiple post IDs for use in a custom function or loop.', 'option-tree-theme' ),
				'std'         => '',
				'type'        => 'post-checkbox',
				'section'     => 'option_types',
				'rows'        => '',
				'post_type'   => '',
				'taxonomy'    => '',
				'min_max_step'=> '',
				'class'       => '',
				'condition'   => '',
				'operator'    => 'and'
			),
			array(
				'id'          => 'demo_post_select',
				'label'       => __( 'Post Select', 'option-tree-theme' ),
				'desc'        => __( 'The Post Select option type displays a list of post IDs. It will return a single post ID for use in a custom function or loop.', 'option-tree-theme' ),
				'std'         => '',
				'type'        => 'post-select',
				'section'     => 'option_types',
				'rows'        => '',
				'post_type'   => '',
				'taxonomy'    => '',
				'min_max_step'=> '',
				'class'       => '',
				'condition'   => '',
				'operator'    => 'and'
			),
			array(
				'id'          => 'demo_radio',
				'label'       => __( 'Radio', 'option-tree-theme' ),
				'desc'        => __( 'The Radio option type displays a group of choices. It allows the user to choose one and will return that value as a string for use in a custom function or loop.', 'option-tree-theme' ),
				'std'         => '',
				'type'        => 'radio',
				'section'     => 'option_types',
				'rows'        => '',
				'post_type'   => '',
				'taxonomy'    => '',
				'min_max_step'=> '',
				'class'       => '',
				'condition'   => '',
				'operator'    => 'and',
				'choices'     => array(
					array(
						'value'       => 'yes',
						'label'       => __( 'Yes', 'option-tree-theme' ),
						'src'         => ''
					),
					array(
						'value'       => 'no',
						'label'       => __( 'No', 'option-tree-theme' ),
						'src'         => ''
					),
					array(
						'value'       => 'maybe',
						'label'       => __( 'Maybe', 'option-tree-theme' ),
						'src'         => ''
					)
				)
			),
			array(
				'id'          => 'demo_radio_image',
				'label'       => __( 'Radio Image', 'option-tree-theme' ),
				'desc'        => sprintf( __( 'the Radio Images option type is primarily used for layouts. However, you can filter the image list using %s. As well, you can add your own custom images using the choices array.', 'option-tree-theme' ), '<code>ot_radio_images</code>' ),
				'std'         => 'right-sidebar',
				'type'        => 'radio-image',
				'section'     => 'option_types',
				'rows'        => '',
				'post_type'   => '',
				'taxonomy'    => '',
				'min_max_step'=> '',
				'class'       => '',
				'condition'   => '',
				'operator'    => 'and'
			),
			array(
				'id'          => 'demo_select',
				'label'       => __( 'Select', 'option-tree-theme' ),
				'desc'        => __( 'The Select option type is used to list anything you want that would be chosen from a select list.', 'option-tree-theme' ),
				'std'         => '',
				'type'        => 'select',
				'section'     => 'option_types',
				'rows'        => '',
				'post_type'   => '',
				'taxonomy'    => '',
				'min_max_step'=> '',
				'class'       => '',
				'condition'   => '',
				'operator'    => 'and',
				'choices'     => array(
					array(
						'value'       => '',
						'label'       => __( '-- Choose One --', 'option-tree-theme' ),
						'src'         => ''
					),
					array(
						'value'       => 'yes',
						'label'       => __( 'Yes', 'option-tree-theme' ),
						'src'         => ''
					),
					array(
						'value'       => 'no',
						'label'       => __( 'No', 'option-tree-theme' ),
						'src'         => ''
					),
					array(
						'value'       => 'maybe',
						'label'       => __( 'Maybe', 'option-tree-theme' ),
						'src'         => ''
					)
				)
			),
			array(
				'id'          => 'demo_sidebar_select',
				'label'       => __( 'Sidebar Select', 'option-tree-theme' ),
				'desc'        => '<p>' . sprintf(  __( 'This option type makes it possible for users to select a WordPress registered sidebar to use on a specific area. By using the two provided filters, %s, and %s we can be selective about which sidebars are available on a specific content area.', 'option-tree-theme' ), '<code>ot_recognized_sidebars</code>', '<code>ot_recognized_sidebars_{$field_id}</code>' ) . '</p><p>' . sprintf( __( 'For example, if we create a WordPress theme that provides the ability to change the Blog Sidebar and we don\'t want to have the footer sidebars available on this area, we can unset those sidebars either manually or by using a regular expression if we have a common name like %s.', 'option-tree-theme' ), '<code>footer-sidebar-$i</code>' ) . '</p>',
				'std'         => '',
				'type'        => 'sidebar-select',
				'section'     => 'option_types',
				'rows'        => '',
				'post_type'   => '',
				'taxonomy'    => '',
				'min_max_step'=> '',
				'class'       => '',
				'condition'   => '',
				'operator'    => 'and'
			),
			array(
				'id'          => 'demo_spacing',
				'label'       => __( 'Spacing', 'option-tree-theme' ),
				'desc'        => __( 'The Spacing option type is used to set spacing values such as padding or margin in the form of top, right, bottom, and left.', 'option-tree-theme' ),
				'std'         => '',
				'type'        => 'spacing',
				'section'     => 'option_types',
				'rows'        => '',
				'post_type'   => '',
				'taxonomy'    => '',
				'min_max_step'=> '',
				'class'       => '',
				'condition'   => '',
				'operator'    => 'and'
			),
			array(
				'id'          => 'demo_tag_checkbox',
				'label'       => __( 'Tag Checkbox', 'option-tree-theme' ),
				'desc'        => __( 'The Tag Checkbox option type displays a list of tag IDs. It allows the user to check multiple tag IDs and will return that value as an array for use in a custom function or loop.', 'option-tree-theme' ),
				'std'         => '',
				'type'        => 'tag-checkbox',
				'section'     => 'option_types',
				'rows'        => '',
				'post_type'   => '',
				'taxonomy'    => '',
				'min_max_step'=> '',
				'class'       => '',
				'condition'   => '',
				'operator'    => 'and'
			),
			array(
				'id'          => 'demo_tag_select',
				'label'       => __( 'Tag Select', 'option-tree-theme' ),
				'desc'        => __( 'The Tag Select option type displays a list of tag IDs. It allows the user to select only one tag ID and will return that value for use in a custom function or loop.', 'option-tree-theme' ),
				'std'         => '',
				'type'        => 'tag-select',
				'section'     => 'option_types',
				'rows'        => '',
				'post_type'   => '',
				'taxonomy'    => '',
				'min_max_step'=> '',
				'class'       => '',
				'condition'   => '',
				'operator'    => 'and'
			),
			array(
				'id'          => 'demo_taxonomy_checkbox',
				'label'       => __( 'Taxonomy Checkbox', 'option-tree-theme' ),
				'desc'        => __( 'The Taxonomy Checkbox option type displays a list of taxonomy IDs. It allows the user to check multiple taxonomy IDs and will return that value as an array for use in a custom function or loop.', 'option-tree-theme' ),
				'std'         => '',
				'type'        => 'taxonomy-checkbox',
				'section'     => 'option_types',
				'rows'        => '',
				'post_type'   => '',
				'taxonomy'    => 'category,post_tag',
				'min_max_step'=> '',
				'class'       => '',
				'condition'   => '',
				'operator'    => 'and'
			),
			array(
				'id'          => 'demo_taxonomy_select',
				'label'       => __( 'Taxonomy Select', 'option-tree-theme' ),
				'desc'        => __( 'The Taxonomy Select option type displays a list of taxonomy IDs. It allows the user to select only one taxonomy ID and will return that value for use in a custom function or loop.', 'option-tree-theme' ),
				'std'         => '',
				'type'        => 'taxonomy-select',
				'section'     => 'option_types',
				'rows'        => '',
				'post_type'   => '',
				'taxonomy'    => 'category,post_tag',
				'min_max_step'=> '',
				'class'       => '',
				'condition'   => '',
				'operator'    => 'and'
			),
			array(
				'id'          => 'demo_text',
				'label'       => __( 'Text', 'option-tree-theme' ),
				'desc'        => __( 'The Text option type is used to save string values. For example, any optional or required text that is of reasonably short character length.', 'option-tree-theme' ),
				'std'         => '',
				'type'        => 'text',
				'section'     => 'option_types',
				'rows'        => '',
				'post_type'   => '',
				'taxonomy'    => '',
				'min_max_step'=> '',
				'class'       => '',
				'condition'   => '',
				'operator'    => 'and'
			),
			array(
				'id'          => 'demo_textarea',
				'label'       => __( 'Textarea', 'option-tree-theme' ),
				'desc'        => sprintf( __( 'The Textarea option type is a large string value used for custom code or text in the theme and has a WYSIWYG editor that can be filtered to change the how it is displayed. For example, you can filter %s, %s, %s, and %s.', 'option-tree-theme' ), '<code>wpautop</code>', '<code>media_buttons</code>', '<code>tinymce</code>', '<code>quicktags</code>' ),
				'std'         => '',
				'type'        => 'textarea',
				'section'     => 'option_types',
				'rows'        => '15',
				'post_type'   => '',
				'taxonomy'    => '',
				'min_max_step'=> '',
				'class'       => '',
				'condition'   => '',
				'operator'    => 'and'
			),
			array(
				'id'          => 'demo_textarea_simple',
				'label'       => __( 'Textarea Simple', 'option-tree-theme' ),
				'desc'        => __( 'The Textarea Simple option type is a large string value used for custom code or text in the theme. The Textarea Simple does not have a WYSIWYG editor.', 'option-tree-theme' ),
				'std'         => '',
				'type'        => 'textarea-simple',
				'section'     => 'option_types',
				'rows'        => '10',
				'post_type'   => '',
				'taxonomy'    => '',
				'min_max_step'=> '',
				'class'       => '',
				'condition'   => '',
				'operator'    => 'and'
			),
			array(
				'id'          => 'demo_textblock',
				'label'       => __( 'Textblock', 'option-tree-theme' ),
				'desc'        => __( 'The Textblock option type is used only on the Theme Option page. It will allow you to create & display HTML, but has no title above the text block. You can then use the Textblock to add a more detailed set of instruction on how the options are used in your theme. You would never use this in your themes template files as it does not save a value.', 'option-tree-theme' ),
				'std'         => '',
				'type'        => 'textblock',
				'section'     => 'option_types',
				'rows'        => '',
				'post_type'   => '',
				'taxonomy'    => '',
				'min_max_step'=> '',
				'class'       => '',
				'condition'   => '',
				'operator'    => 'and'
			),
			array(
				'id'          => 'demo_textblock_titled',
				'label'       => __( 'Textblock Titled', 'option-tree-theme' ),
				'desc'        => __( 'The Textblock Titled option type is used only on the Theme Option page. It will allow you to create & display HTML, and has a title above the text block. You can then use the Textblock Titled to add a more detailed set of instruction on how the options are used in your theme. You would never use this in your themes template files as it does not save a value.', 'option-tree-theme' ),
				'std'         => '',
				'type'        => 'textblock-titled',
				'section'     => 'option_types',
				'rows'        => '',
				'post_type'   => '',
				'taxonomy'    => '',
				'min_max_step'=> '',
				'class'       => '',
				'condition'   => '',
				'operator'    => 'and'
			),
			array(
				'id'          => 'demo_typography',
				'label'       => __( 'Typography', 'option-tree-theme' ),
				'desc'        => sprintf( __( 'The Typography option type is for adding typography styles to your theme either dynamically via the CSS option type above or manually with %s. The Typography option type has filters that allow you to remove fields or change the defaults. For example, you can filter %s to remove unwanted fields from all Background options or an individual one. You can also filter %s. These filters allow you to fine tune the select lists for your specific needs.', 'option-tree-theme' ), '<code>ot_get_option()</code>', '<code>ot_recognized_typography_fields</code>', '<code>ot_recognized_font_families</code>, <code>ot_recognized_font_sizes</code>, <code>ot_recognized_font_styles</code>, <code>ot_recognized_font_variants</code>, <code>ot_recognized_font_weights</code>, <code>ot_recognized_letter_spacing</code>, <code>ot_recognized_line_heights</code>, <code>ot_recognized_text_decorations</code> ' . __( 'and', 'option-tree-theme' ) . ' <code>ot_recognized_text_transformations</code>' ),
				'std'         => '',
				'type'        => 'typography',
				'section'     => 'option_types',
				'rows'        => '',
				'post_type'   => '',
				'taxonomy'    => '',
				'min_max_step'=> '',
				'class'       => '',
				'condition'   => '',
				'operator'    => 'and'
			),
			array(
				'id'          => 'demo_upload',
				'label'       => __( 'Upload', 'option-tree-theme' ),
				'desc'        => sprintf( __( 'The Upload option type is used to upload any WordPress supported media. After uploading, users are required to press the "%s" button in order to populate the input with the URI of that media. There is one caveat of this feature. If you import the theme options and have uploaded media on one site the old URI will not reflect the URI of your new site. You will have to re-upload or %s any media to your new server and change the URIs if necessary.', 'option-tree-theme' ), apply_filters( 'ot_upload_text', __( 'Send to OptionTree', 'option-tree-theme' ) ), 'FTP' ),
				'std'         => '',
				'type'        => 'upload',
				'section'     => 'option_types',
				'rows'        => '',
				'post_type'   => '',
				'taxonomy'    => '',
				'min_max_step'=> '',
				'class'       => '',
				'condition'   => '',
				'operator'    => 'and'
			),
			array(
				'id'          => 'demo_upload_attachment_id',
				'label'       => __( 'Upload Attachment ID', 'option-tree-theme' ),
				'desc'        => sprintf( __( 'The Upload option type can also be saved as an attachment ID by adding %s to the class attribute.', 'option-tree-theme' ), '<code>ot-upload-attachment-id</code>' ),
				'std'         => '',
				'type'        => 'upload',
				'section'     => 'option_types',
				'rows'        => '',
				'post_type'   => '',
				'taxonomy'    => '',
				'min_max_step'=> '',
				'class'       => 'ot-upload-attachment-id',
				'condition'   => '',
				'operator'    => 'and'
			),

			// Sosyal Linkler
			array(
				'id'      => 'social_facebook',
				'label'   => 'Facebook Adresi',
				'desc'    => 'Facebook Profil/Sayfa Adresi',
				'type'    => 'text',
				'section' => 'section_social_links',
			),
			array(
				'id'      => 'social_twitter',
				'label'   => 'Twitter Adresi',
				'desc'    => 'Twitter Profil Adresi',
				'type'    => 'text',
				'section' => 'section_social_links',
			),
			array(
				'id'      => 'social_instagram',
				'label'   => 'Instagram Adresi',
				'desc'    => 'Instagram Profil Adresi',
				'type'    => 'text',
				'section' => 'section_social_links',
			),
			array(
				'id'      => 'social_youtube',
				'label'   => 'Youtube Adresi',
				'desc'    => 'Youtube Profil Adresi',
				'type'    => 'text',
				'section' => 'section_social_links',
			),

			// Iletisim Bilgileri
			array(
				'id'      => 'contact_address',
				'label'   => 'Adres',
				'desc'    => 'Adres bilgisini giriniz.',
				'type'    => 'textarea-simple',
				'section' => 'section_contact',
				'rows'    => '5',
			),
			array(
				'id'      => 'contact_phone',
				'label'   => 'Telefon Numarası',
				'desc'    => 'Telefon numaranızı giriniz.',
				'type'    => 'text',
				'section' => 'section_contact',
			),
			array(
				'id'      => 'contact_email',
				'label'   => 'E-posta Adresi',
				'desc'    => 'E-posta adresinizi giriniz.',
				'type'    => 'text',
				'section' => 'section_contact',
			),
		)
	);

	/* allow settings to be filtered before saving */
	$custom_settings = apply_filters( ot_settings_id() . '_args', $custom_settings );

	/* settings are not the same update the DB */
	if ( $saved_settings !== $custom_settings ) {
		update_option( ot_settings_id(), $custom_settings );
	}

	/* Lets OptionTree know the UI Builder is being overridden */
	global $ot_has_parsel_theme_options;
	$ot_has_parsel_theme_options = true;
}