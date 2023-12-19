<?php

/**
 * Plugin Name:       Cards Elementor Addon
 * Description:       Cards Elementor Addon Widget is created by Zain Hassan.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Zain Hassan
 * Author URI:        https://hassanzain.com
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       hz-addons
*/

if(!defined('ABSPATH')){
exit;
}

function hz_el_category( $elements_manager ) {

	$elements_manager->add_category(
		'hz-el-widgets',
		[
			'title' => esc_html__( 'Custom Widgets', 'hz-addons' ),
			'icon' => 'fa fa-card',
		]
	);

}
add_action( 'elementor/elements/categories_registered', 'hz_el_category' );


function register_cards_el_widgets( $widgets_manager ) {
	require_once( __DIR__ . '/inc/widget.php' );
	$widgets_manager->register( new \Cards_El_Carousel );

}
add_action( 'elementor/widgets/register', 'register_cards_el_widgets' );

function cards_register_dependencies_scripts() {

	/* Scripts */
	wp_register_script( 'slick-js-min', plugins_url( 'inc/assets/js/slick.min.js', __FILE__ ));
		

	/* Styles */
	wp_register_style( 'slick-css', plugins_url( 'inc/assets/css/slick.css', __FILE__ ) );

}
add_action( 'wp_enqueue_scripts', 'cards_register_dependencies_scripts' );
