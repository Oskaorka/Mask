<?php

add_action( 'init', 'true_jquery_register' , 99);
 
function true_jquery_register() {
	if ( !is_admin() ) {
        wp_deregister_script( 'jquery' );
        wp_register_script( 'jquery', ( 'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js' ), false, null, true);
		wp_enqueue_script( 'jquery' );
	}
};
add_action('wp_enqueue_scripts', 'childhood_scripts');

function childhood_scripts() {
    wp_enqueue_style( 'childhood-style', get_stylesheet_uri() );
    wp_enqueue_script( 'childhood-Scripts' , get_template_directory_uri() . '/assets/js/tiny-slider.js', array(), null, true);
    wp_enqueue_script( 'newscript' , get_template_directory_uri() . '/assets/js/tabs.js', array('jquery'), null, true);
    wp_enqueue_script( 'new_Script' , get_template_directory_uri() . '/assets/js/app.js', array(), null, true);
    wp_enqueue_script( 'new-timer' , get_template_directory_uri() . '/assets/js/timer.js', array('jquery'), null, true);
    wp_enqueue_script( 'childhood-scripts' , get_template_directory_uri() . '/assets/js/main.min.js', array(), null, true);
    
    wp_localize_script(
		'smart-basket__user-form',
		'feedback_object',
		array(
			'url'   => admin_url( 'admin-ajax.php' ),
			'nonce' => wp_create_nonce( 'feedback-nonce' ),
		)
	);

};

add_theme_support( 'custom-logo' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'menus' );

add_filter('nav_menu_link_attributes', 'filter_nav_menu_link_attributes', 10, 3);
function filter_nav_menu_link_attributes($atts, $item, $args) {
    if ($args->menu === 'foot') {
        $atts['class'] = 'policy';

        if ($item->current) {
            $atts['class'] = 'policy';
        }
    };
    return $atts;
}
 ?>
 