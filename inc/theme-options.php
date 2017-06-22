<?php

add_action( 'init', 'parsel_theme_options' );

function parsel_theme_options() {
	if ( ! function_exists( 'ot_settings_id' ) || ! is_admin() )
		return false;

	$saved_settings = get_option( ot_settings_id(), array() );
	$custom_settings = array(
		'sections' => array(
			array(
				'id'    => 'option_types',
				'title' => __( 'Option Types', 'option-tree-theme' )
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
		'settings' => array(
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