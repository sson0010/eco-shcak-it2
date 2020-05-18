<?php

require get_stylesheet_directory() . '/inc/customizer.php';

add_action( 'wp_enqueue_scripts', 'green_eco_planet_chld_thm_parent_css' );
function green_eco_planet_chld_thm_parent_css() {

    wp_enqueue_style( 
    	'green_eco_planet_chld_css', 
    	trailingslashit( get_template_directory_uri() ) . 'style.css', 
    	array( 
    		'bootstrap',
    		'font-awesome-5',
    		'bizberg-main',
    		'bizberg-component',
    		'bizberg-style2',
    		'bizberg-responsive' 
    	) 
    );
    
}

/**
* Changed the blog layout to 3 columns
*/
add_filter( 'bizberg_sidebar_settings', 'green_eco_planet_sidebar_settings' );
function green_eco_planet_sidebar_settings(){
	return '4';
}

/**
* Change the theme color
*/
add_filter( 'bizberg_theme_color', 'green_eco_planet_change_theme_color' );
function green_eco_planet_change_theme_color(){
    return '#6ab43e';
}

/**
* Change the header menu color hover
*/
add_filter( 'bizberg_header_menu_color_hover', 'green_eco_planet_header_menu_color_hover' );
function green_eco_planet_header_menu_color_hover(){
    return '#6ab43e';
}

/**
* Change the button color of header
*/
add_filter( 'bizberg_header_button_color', 'green_eco_planet_header_button_color' );
function green_eco_planet_header_button_color(){
    return '#6ab43e';
}

/**
* Change the button hover color of header
*/
add_filter( 'bizberg_header_button_color_hover', 'green_eco_planet_header_button_color_hover' );
function green_eco_planet_header_button_color_hover(){
    return '#6ab43e';
}