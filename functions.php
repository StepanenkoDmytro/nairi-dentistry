<?php
add_action( 'wp_enqueue_scripts', function() {
    wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css' );
    wp_enqueue_style( 'reset', get_template_directory_uri() . '/assets/css/reset.css' );
    wp_enqueue_style( 'slick', get_template_directory_uri() . '/assets/css/slick.css' );
    wp_enqueue_style( 'googleapis-font', 'https://fonts.googleapis.com' );
    wp_enqueue_style( 'gstatic-font', 'https://fonts.gstatic.com' );
    wp_enqueue_style( 'oswald-font', 'https://fonts.googleapis.com/css2?family=Oswald:wght@300;400&display=swap' );
    wp_enqueue_style( 'montserrat-font', 'https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap' );
    wp_enqueue_style( 'animate', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css' );
    wp_enqueue_style( 'bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css', array(), '5.0.2' );

    wp_deregister_script('jquery');
    wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js');
    wp_enqueue_script('jquery');
    
    wp_enqueue_script( 'wow', get_template_directory_uri() . '/assets/js/wow.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'slick', get_template_directory_uri() . '/assets/js/slick.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js', array('jquery'), '5.0.2', true );
    wp_enqueue_script( 'modal', get_template_directory_uri() . '/assets/js/modal.js', array(), '1.0.0', true );

    $arrow_image_url = get_template_directory_uri() . '/assets/images/arrow.png';
    wp_localize_script( 'main', 'themeData', array(
        'arrowImageUrl' => $arrow_image_url
    ));
});

add_theme_support( 'post-thumbnails' );
add_theme_support( 'title-tag' );
add_theme_support( 'custom-logo' );

add_filter( 'upload_mimes', 'svg_upload_allow' );

function svg_upload_allow( $mimes ) {
	$mimes['svg']  = 'image/svg+xml';

	return $mimes;
}

add_filter( 'wp_check_filetype_and_ext', 'fix_svg_mime_type', 10, 5 );

function fix_svg_mime_type( $data, $file, $filename, $mimes, $real_mime = '' ){

	if( version_compare( $GLOBALS['wp_version'], '5.1.0', '>=' ) ){
		$dosvg = in_array( $real_mime, [ 'image/svg', 'image/svg+xml' ] );
	}
	else {
		$dosvg = ( '.svg' === strtolower( substr( $filename, -4 ) ) );
	}

	if( $dosvg ){

		if( current_user_can('manage_options') ){

			$data['ext']  = 'svg';
			$data['type'] = 'image/svg+xml';
		}
		else {
			$data['ext']  = false;
			$data['type'] = false;
		}

	}

	return $data;
}

?>