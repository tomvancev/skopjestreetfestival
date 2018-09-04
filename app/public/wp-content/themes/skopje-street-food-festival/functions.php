<?php 
function skopje_street_food_styles() {
	wp_enqueue_style( 'ssf_main_styles', get_stylesheet_uri(),NULL, microtime() );
	wp_enqueue_style( 'font_awesome','https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
	wp_enqueue_style( 'custom_google_fonts','https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i' );
	wp_enqueue_script('main_scripts', get_theme_file_uri( $file = '/js/scripts-bundled.js' ), array('jquery'), microtime(), true);
}
add_action('wp_enqueue_scripts','skopje_street_food_styles');



function skopje_street_food_features(){
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'frontPageSlide', 1500, 550, true );

}

add_action('after_setup_theme','skopje_street_food_features');


 
function register_primary_menu() {
    register_nav_menu( 'primary', __( 'Primary Menu', 'theme-text-domain' ) );
}
add_action( 'after_setup_theme', 'register_primary_menu' );