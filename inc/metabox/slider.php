<?php

add_action( 'admin_init', 'parsel_slider_cmb' );

function parsel_slider_cmb() {
	$cmb = array(
		'id'       => 'slider_meta',
		'title'    => "Slider Detayları",
		'desc'     => '',
		'pages'    => array( 'slider' ),
		'context'  => 'normal',
		'priority' => 'high',
		'fields'   => array(
			array(
				'id'    => 'image',
				'label' => 'Görsel',
				'desc'  => 'Kullanacağınız görsel <strong>1920x403 px</strong> ölçülerinde olmalıdır.',
				'type'  => 'upload',
			),
			array(
				'id'    => 'title_first',
				'label' => 'Başlık (İlk Satır)',
				'type'  => 'text',
				'desc'  => 'Başlığın ilk satırını giriniz.'
			),
			array(
				'id'    => 'title_second',
				'label' => 'Başlık (İkinci Satır)',
				'type'  => 'text',
				'desc'  => 'Başlığın ikinci satırını giriniz.'
			),
			array(
				'id'    => 'btn_link',
				'label' => 'Buton Linki',
				'type'  => 'text',
				'desc'  => 'Buton linkini giriniz. <br>Boş bırakırsanız, buton görüntülenmeyecektir.'
			),
			array(
				'id'    => 'btn_text',
				'label' => 'Buton Metni',
				'type'  => 'text',
				'desc'  => 'Buton metnini giriniz. <br>Boş bırakırsanız, <strong><i>"Detaylı Bilgi"</i></strong> metni görüntülenecektir.'
			)
		)
	);

	if ( function_exists( 'ot_register_meta_box' ) )
		ot_register_meta_box( $cmb );
}
