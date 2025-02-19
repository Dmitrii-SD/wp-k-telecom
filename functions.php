<?php
function k_telecom_assets(){
    wp_enqueue_style('swiper-style', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css');
    wp_enqueue_style('maincss', get_template_directory_uri() . '/assets/css/main.css');
    wp_enqueue_script('swiper-js', "https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js", array(), '11', true); 
    wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/main.js', array(), 'null', true);


}
add_action('wp_enqueue_scripts', 'k_telecom_assets');
show_admin_bar(false);
add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('custom-logo');
add_filter( 'upload_mimes', 'svg_upload_allow' );

# Добавляет SVG в список разрешенных для загрузки файлов.
function svg_upload_allow( $mimes ) {
	$mimes['svg']  = 'image/svg+xml';

	return $mimes;
}
add_filter( 'wp_check_filetype_and_ext', 'fix_svg_mime_type', 10, 5 );

# Исправление MIME типа для SVG файлов.
function fix_svg_mime_type( $data, $file, $filename, $mimes, $real_mime = '' ){

	// WP 5.1 +
	if( version_compare( $GLOBALS['wp_version'], '5.1.0', '>=' ) ){
		$dosvg = in_array( $real_mime, [ 'image/svg', 'image/svg+xml' ] );
	}
	else {
		$dosvg = ( '.svg' === strtolower( substr( $filename, -4 ) ) );
	}

	// mime тип был обнулен, поправим его
	// а также проверим право пользователя
	if( $dosvg ){

		// разрешим
		if( current_user_can('manage_options') ){

			$data['ext']  = 'svg';
			$data['type'] = 'image/svg+xml';
		}
		// запретим
		else {
			$data['ext']  = false;
			$data['type'] = false;
		}

	}

	return $data;
}
/* $logo_img = '';
$custom_logo_id = get_theme_mod( 'custom_logo' );

if( $custom_logo_id ){
	$logo_img = wp_get_attachment_image( $custom_logo_id, 'full', false, array(
		'class'    => 'custom-logo',
		'itemprop' => 'logo',
	) );
}

echo $logo_img; */