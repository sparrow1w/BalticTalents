<?php
if ( ! function_exists( 'naujaTema_setup' ) ) :
function naujaTema_setup() {
// Make theme available for translation
load_theme_textdomain( 'balta',
get_template_directory().'/languages' );

 register_nav_menus( array(
 'primary' => 'Pagrindinis Meniu'
 ) );
}
add_action( 'after_setup_theme', 'naujaTema_setup' );
add_theme_support( 'title-tag' );
wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/bootstrap.min.css' );
wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/font-awesome.min.css', ['bootstrap'] );
wp_enqueue_style( 'font-awesome', 'https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic');
wp_enqueue_style( 'font-awesome-theme', 'https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800');
wp_enqueue_style( 'font-awesome-mine', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css');
wp_enqueue_style( 'clean-blog', get_template_directory_uri() . '/clean-blog.css',
 ['bootstrap'] );
 wp_enqueue_script( 'bootstrap.min', get_template_directory_uri() .'/bootstrap.min.js', ['jquery', 'popper'], true );
 wp_enqueue_script( 'popper', get_template_directory_uri() .'/popper.min.js', ['jquery'], true );
endif;
?>