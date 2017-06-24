<?php

add_action( 'init', 'parsel_theme_options' );

function parsel_theme_options() {
	if ( ! function_exists( 'ot_settings_id' ) || ! is_admin() )
		return false;

	$saved_settings = get_option( ot_settings_id(), array() );
	$custom_settings = array(
		'sections' => array(
			array(
				'id'    => 'homepage',
				'title' => 'Ana Sayfa'
			),
			array(
				'id'    => 'footer',
				'title' => 'Alt Bölüm'
			),
			array(
				'id'    => 'social_links',
				'title' => 'Sosyal Linkler'
			),
			array(
				'id'    => 'contact',
				'title' => 'İletişim'
			)
		),
		'settings' => array(
			// Ana Sayfa
			array(
				'id'      => 'home_about_title',
				'label'   => 'Hakkımızda Alanı Başlık',
				'type'    => 'text',
				'section' => 'homepage',
			),
			array(
				'id'      => 'home_about_text',
				'label'   => 'Hakkımızda Alanı Metin',
				'type'    => 'textarea-simple',
				'section' => 'homepage',
				'rows'    => '5',
			),
			array(
				'id'      => 'home_about_link_url',
				'label'   => 'Hakkımızda Alanı Devam Buton Linki',
				'type'    => 'text',
				'section' => 'homepage',
			),
			array(
				'id'      => 'home_about_link_title',
				'label'   => 'Hakkımızda Alanı Devam Buton Metni',
				'type'    => 'text',
				'section' => 'homepage',
			),
			array(
				'id'      => 'home_video_url',
				'label'   => 'Tanıtım Videosu Linki',
				'type'    => 'text',
				'section' => 'homepage',
			),
			// Alt Bolum
			array(
				'id'      => 'footer_about',
				'label'   => 'Hakkımızda',
				'type'    => 'textarea',
				'section' => 'footer',
				'rows'    => '15',
			),
			array(
				'id'      => 'footer_copyright',
				'label'   => 'Telif Hakkı',
				'desc'    => 'Telif hakkı yazısını buraya girebilirsiniz.',
				'type'    => 'text',
				'section' => 'footer',
			),
			// Sosyal Linkler
			array(
				'id'      => 'social_facebook',
				'label'   => 'Facebook Adresi',
				'desc'    => 'Facebook Profil/Sayfa Adresi',
				'type'    => 'text',
				'section' => 'social_links',
			),
			array(
				'id'      => 'social_twitter',
				'label'   => 'Twitter Adresi',
				'desc'    => 'Twitter Profil Adresi',
				'type'    => 'text',
				'section' => 'social_links',
			),
			array(
				'id'      => 'social_instagram',
				'label'   => 'Instagram Adresi',
				'desc'    => 'Instagram Profil Adresi',
				'type'    => 'text',
				'section' => 'social_links',
			),
			array(
				'id'      => 'social_youtube',
				'label'   => 'Youtube Adresi',
				'desc'    => 'Youtube Profil Adresi',
				'type'    => 'text',
				'section' => 'social_links',
			),
			// Iletisim Bilgileri
			array(
				'id'      => 'contact_address',
				'label'   => 'Adres',
				'desc'    => 'Adres bilgisini giriniz.',
				'type'    => 'textarea-simple',
				'section' => 'contact',
				'rows'    => '5',
			),
			array(
				'id'      => 'contact_phone',
				'label'   => 'Telefon Numarası',
				'desc'    => 'Telefon numaranızı giriniz.',
				'type'    => 'text',
				'section' => 'contact',
			),
			array(
				'id'      => 'contact_fax',
				'label'   => 'Faks Numarası',
				'desc'    => 'Faks numaranızı giriniz.',
				'type'    => 'text',
				'section' => 'contact',
			),
			array(
				'id'      => 'contact_email',
				'label'   => 'E-posta Adresi',
				'desc'    => 'E-posta adresinizi giriniz.',
				'type'    => 'text',
				'section' => 'contact',
			),
			array(
				'id'      => 'contact_maps',
				'label'   => 'Harita',
				'desc'    => 'Harita embed kodunu buraya giriniz.',
				'type'    => 'textarea-simple',
				'section' => 'contact',
				'rows'    => '5',
			),
		)
	);

	$custom_settings = apply_filters( ot_settings_id() . '_args', $custom_settings );

	if ( $saved_settings !== $custom_settings ) {
		update_option( ot_settings_id(), $custom_settings );
	}

	global $ot_has_parsel_theme_options;
	$ot_has_parsel_theme_options = true;
}