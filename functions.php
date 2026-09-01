<?php
/**
 * Mis360-360 functions and definitions
 */

if ( ! defined( "MIS360_360_VERSION" ) ) {
	define( "MIS360_360_VERSION", "1.0.0" );
}

function mis360_360_setup() {
	add_theme_support( "automatic-feed-links" );
	add_theme_support( "title-tag" );
	add_theme_support( "post-thumbnails" );
	register_nav_menus( array(
		"menu-1" => esc_html__( "Primary", "mis360-360" ),
	) );
	add_theme_support( "custom-logo", array(
		"height"      => 250,
		"width"       => 250,
		"flex-width"  => true,
		"flex-height" => true,
	) );
}
add_action( "after_setup_theme", "mis360_360_setup" );

function mis360_360_scripts() {
	wp_enqueue_style( "fontawesome", "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css", array(), "6.5.1" );
	wp_enqueue_style( "mis360-360-main-css", get_template_directory_uri() . "/assets/css/main.css", array(), MIS360_360_VERSION );
	wp_enqueue_style( "mis360-360-dark-css", get_template_directory_uri() . "/assets/css/dark.css", array(), MIS360_360_VERSION );
	wp_enqueue_script( "mis360-360-main-js", get_template_directory_uri() . "/assets/js/main.js", array(), MIS360_360_VERSION, true );
}
add_action( "wp_enqueue_scripts", "mis360_360_scripts" );


/**
 * Tema aktif edildi�inde gerekli sayfalar� otomatik olu�tur.
 */
function mis360_360_create_default_pages() {
    $pages = array(
        "Hakk�m�zda" => "hakkimizda",
        "Banka Bilgileri" => "banka",
        "S�k Sorulan Sorular" => "sss",
        "Hizmetlerimiz" => "hizmetlerimiz",
        "Projeler" => "projeler",
        "�leti�im" => "iletisim",
        "Teklif" => "teklif"
    );

    foreach ( $pages as $title => $slug ) {
        $page_check = get_page_by_path( $slug );
        if ( ! isset( $page_check->ID ) ) {
            $new_page = array(
                "post_type"    => "page",
                "post_title"   => $title,
                "post_name"    => $slug,
                "post_status"  => "publish",
                "post_author"  => 1,
            );
            wp_insert_post( $new_page );
        }
    }
}

add_action( "init", function() {
    if ( ! get_option( "mis360_360_pages_created" ) ) {
        mis360_360_create_default_pages();
        update_option( "mis360_360_pages_created", true );
    }
} );

