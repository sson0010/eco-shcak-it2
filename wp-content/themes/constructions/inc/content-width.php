<?php if( ! defined( 'ABSPATH' ) ) exit;

Kirki::add_section( 'constructions_content_section', array(
    'title'          => __( 'Content', 'constructions' ),
    'priority'       => 1,
    'capability'     => 'edit_theme_options',
) );

Kirki::add_field( 'constructions_options', array(
	'type'        => 'slider',
	'settings'    => 'content_max_width',
	'label'       => esc_html__( 'Content max width', 'constructions' ),
	'section'     => 'constructions_content_section',
	'default'     => 0,
	'choices'     => array(
		'min'  => '0',
		'max'  => '2000',
		'step' => '100',
	),
) );

Kirki::add_field( 'constructions_options', array(
	'type'        => 'slider',
	'settings'    => 'content_padding',
	'label'       => esc_html__( 'Content Padding', 'constructions' ),
	'section'     => 'constructions_content_section',
	'default'     => 0,
	'choices'     => array(
		'min'  => '0',
		'max'  => '200',
		'step' => '1',
	),
) );

Kirki::add_field( 'constructions_options', array(
	'type'        => 'switch',
	'settings'    => 'hide_home_content',
	'label'       => __( 'Hide sidebar and content on home page', 'constructions' ),
	'section'     => 'constructions_content_section',
	'priority'    => 10,
	'choices'     => array(
		'on'  => esc_html__( 'On', 'constructions' ),
		'' => esc_html__( 'Off', 'constructions' ),
	),
) );

/********************************************
* Content Styles
*********************************************/ 	

function constructions_content_styles () {

        $content_max_width = esc_attr(get_theme_mod( 'content_max_width' ));
        $hide_home_content = esc_attr(get_theme_mod( 'hide_home_content' ));
        $content_padding = esc_attr(get_theme_mod( 'content_padding' ));

		if($content_max_width) { $content_max_width_style = "#content,.h-center {max-width: {$content_max_width}px !important;}";} else {$content_max_width_style ="";}
		if($hide_home_content and (is_home() or is_front_page())) { $hide_home_content_style = "#content #primary, body #content #secondary {display: none !important;}";} else {$hide_home_content_style ="";}
		if($content_padding) { $content_padding_style = "#content,.h-center {padding: {$content_padding}px !important;}";} else {$content_padding_style ="";}

		
        wp_add_inline_style( 'constructions-style', 
		$content_max_width_style.$hide_home_content_style.$content_padding_style
		);
}
add_action( 'wp_enqueue_scripts', 'constructions_content_styles' );