<?php if( ! defined( 'ABSPATH' ) ) exit;

Kirki::add_section( 'constructions_footer', array(
    'title'          => __( 'Footer Options', 'constructions' ),
    'priority'       => 94,
    'capability'     => 'edit_theme_options',
) ); 

Kirki::add_field( 'constructions_options', array(
	'type'        => 'switch',
	'settings'    => 'constructions_copyright',
	'label'       => __( 'Activate Custom Copyright', 'constructions' ),
	'section'     => 'constructions_footer',
	'priority'    => 10,
	'choices'     => array(
		'on'  => esc_html__( 'On', 'constructions' ),
		'' => esc_html__( 'Off', 'constructions' ),
	),
) );

Kirki::add_field( 'constructions_options', array(
	'type'        => 'code',
	'settings'    => 'code_copyright_text',
	'label'       => esc_html__( 'Add Copyright', 'constructions' ),
	'section'     => 'constructions_footer',
	'default'     => '',
	'choices'     => array(
		'language' => 'html',
	),
) );

Kirki::add_field( 'constructions_options', array(
	'type'        => 'color',
	'settings'    => 'constructions_footer_background',
	'label'       => __( 'Background Color', 'constructions' ),
	'section'     => 'constructions_footer',
	'default'     => '',
) );

Kirki::add_field( 'constructions_options', array(
	'type'        => 'color',
	'settings'    => 'constructions_footer_title',
	'label'       => __( 'Title Color', 'constructions' ),
	'section'     => 'constructions_footer',
	'default'     => '',
) );

Kirki::add_field( 'constructions_options', array(
	'type'        => 'color',
	'settings'    => 'constructions_footer_text',
	'label'       => __( 'Text Color', 'constructions' ),
	'section'     => 'constructions_footer',
	'default'     => '',
) );


Kirki::add_field( 'constructions_options', array(
	'type'        => 'color',
	'settings'    => 'constructions_footer_link_hover',
	'label'       => __( 'Link Hover Color', 'constructions' ),
	'section'     => 'constructions_footer',
	'default'     => '',
) );


/**
 * Footer styles
 */ 	

function constructions_footer_method() {

        $constructions_footer_background = esc_attr(get_theme_mod( 'constructions_footer_background' ));
        $constructions_footer_title = esc_attr(get_theme_mod( 'constructions_footer_title' ));
        $constructions_footer_text = esc_html(get_theme_mod( 'constructions_footer_text' ));
        $constructions_footer_link_hover = esc_attr(get_theme_mod( 'constructions_footer_link_hover' ));

		
		if($constructions_footer_background) { $style1 = ".footer-center, .site-info {background: {$constructions_footer_background} !important;}";} else {$style1 ="";}
		if($constructions_footer_title) { $style2 = ".footer-widgets h2 {color: {$constructions_footer_title} !important;}";} else {$style2 ="";}
		if($constructions_footer_text) { $style3 = ".footer-widgets a, .footer-widgets, .site-info,  .site-info a {color: {$constructions_footer_text} !important;}";} else {$style3 ="";}
		if($constructions_footer_link_hover) { $style4 = ".footer-widgets a:hover, .site-info a:hover {color: {$constructions_footer_link_hover} !important;}";} else {$style4 ="";}

        wp_add_inline_style( 'constructions-style',
		$style1.$style2.$style3.$style4
		);
}
add_action( 'wp_enqueue_scripts', 'constructions_footer_method' );		
		