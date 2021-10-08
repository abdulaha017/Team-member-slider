<?php
/**
 * Plugin Name:       Team Member
 * Plugin URI:        https://example.com/
 * Description:       Handle the basics with this plugin.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Abdulaha Islam
 * Author URI:        https://www.linkedin.com/in/abdulaha-islam/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://example.com/my-plugin/
 * Text Domain:       team-member
 * Domain Path:       /languages
 */


/**
 * If this file is called directly, then abort execution.
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}


/**
 * Load plugin textdomain.
 */
function ab_tes_load_textdomain() {
    load_plugin_textdomain( 'testimonial-slider', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' ); 
}

add_action('init', 'ab_tes_load_textdomain');


// register jquery and style on initialization
function ab_tes_register_script() {

    wp_register_style( 'owl-carousel-css', plugins_url('/assets/css/owl.carousel.min.css', __FILE__), false, '1.3.3', 'all');
    wp_register_style( 'owl-theme-css', plugins_url('/assets/css/owl.theme.min.css', __FILE__), false, '1.3.3', 'all');


    wp_register_style( 'slick-theme-css', plugins_url('/assets/css/slick-theme.css', __FILE__), false, '1.5.0', 'all');
    wp_register_style( 'slick-min-css', plugins_url('/assets/css/slick.min.css', __FILE__), false, '1.5.0', 'all');


    wp_register_style( 'style-css', plugins_url('/assets/css/style.css', __FILE__), false, '1.3.3', 'all');


    wp_register_script( 'owl-carousel-min-js', plugins_url('/assets/js/owl.carousel.min.js', __FILE__), array('jquery'), '1.3.3' );
    wp_register_script( 'slick-min-js', plugins_url('/assets/js/slick.min.js', __FILE__), array('jquery'), '1.5.0' );
    
    wp_register_script( 'main-js', plugins_url('/assets/js/main.js', __FILE__), array('jquery'), '1.0.0' );
}

add_action('init', 'ab_tes_register_script');


// use the registered jquery and style above
function ab_tes_enqueue_style(){
    wp_enqueue_style('owl-carousel-css');
    wp_enqueue_style('owl-theme-css');
    wp_enqueue_style('slick-theme-css');
    wp_enqueue_style('slick-min-css');
    wp_enqueue_style('style-css');

    wp_enqueue_script( 'owl-carousel-min-js' );
    wp_enqueue_script( 'slick-min-js' );
    wp_enqueue_script( 'main-js' );
}

add_action('wp_enqueue_scripts', 'ab_tes_enqueue_style');











