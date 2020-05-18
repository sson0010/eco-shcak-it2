<?php if( ! defined( 'ABSPATH' ) ) exit;

			
/**
 * Read More Button
 */
Kirki::add_section( 'constructions_read_more', array(
    'title'          => __( 'Read More Button Options', 'constructions' ),
    'priority'       => 94,
    'capability'     => 'edit_theme_options',
) ); 

Kirki::add_field( 'bawoptions', array(
	'type'        => 'switch',
	'settings'    => 'constructions_read_more_activate',
	'label'       => __( 'Activate Read More Button', 'constructions' ),
	'section'     => 'constructions_read_more',
	'default'  => true,	
	'priority'    => 10,
	'choices'     => array(
		'on'  => esc_html__( 'On', 'constructions' ),
		'' => esc_html__( 'Off', 'constructions' ),
	),
) );

Kirki::add_field( 'bawoptions', array(
	'type'     => 'text',
	'settings' => 'constructions_read_more_setting',
	'label'    => __( 'Read More Button Text', 'constructions' ),
	'section'  => 'constructions_read_more',
	'priority' => 10,
) );

Kirki::add_field( 'bawoptions', array(
	'type'        => 'number',
	'settings'    => 'constructions_read_more_length',
	'label'       => esc_html__( 'Read More Button Length', 'constructions' ),
	'section'     => 'constructions_read_more',
	'choices'     => array(
		'min'  => 0,
		'max'  => 1000,
		'step' => 1,
	),
) );
		
Kirki::add_field( 'bawoptions', array(
	'type'        => 'color',
	'settings'    => 'constructions_read_more_color',
	'label'       => __( 'Read More Button Color', 'constructions' ),
	'section'     => 'constructions_read_more',
	'default'     => '',
) );
			
Kirki::add_field( 'bawoptions', array(
	'type'        => 'color',
	'settings'    => 'constructions_read_more_hover_color',
	'label'       => __( 'Read More Button Hover Color', 'constructions' ),
	'section'     => 'constructions_read_more',
) );
	

/**
 * Excerpt
 */
	function constructions_excerpt_more( $more ) {
		if (get_theme_mod('constructions_read_more_activate', true)) {
			return '<p class="link-more"><a class="myButt three" href="'. get_permalink( get_the_ID() ) . '">' . constructions_return_read_more_text (). '</a></p>';
		}
	}
	add_filter( 'excerpt_more', 'constructions_excerpt_more' );	
	
	function constructions_customize_custom_excerpt_length( $length ) {
		if (get_theme_mod('constructions_read_more_length')) {
			return esc_attr(get_theme_mod('constructions_read_more_length'));
		}
		else return 42;
	}
	
	add_filter( 'excerpt_length', 'constructions_customize_custom_excerpt_length', 999 );
	
	function constructions_return_read_more_text () {
		if (get_theme_mod('constructions_read_more_setting')) {	 
			return esc_attr(get_theme_mod('constructions_read_more_setting'));
		} 
		else {
		    return __('Read More','constructions');
		}
	}	
	
/**
 * Read More Styles
 */
function constructions_read_more_method() {

        $read_more_color_mod = esc_attr(get_theme_mod( 'constructions_read_more_color' ));
        $read_more_hover_color_mod = esc_attr(get_theme_mod( 'constructions_read_more_hover_color' ));
		

		if($read_more_color_mod) { $read_more_color = ".read-more, .read-slide, .link-more a {color: {$read_more_color_mod};}";} else {$read_more_color ="";}
		if($read_more_hover_color_mod) { $read_more_hover_color = ".read-more, .read-slide:hover, .link-more a:hover {color: {$read_more_hover_color_mod};}  .three:after{background-color: {$read_more_hover_color_mod};}";} else {$read_more_hover_color ="";}

        wp_add_inline_style( 'constructions-style', $read_more_color.$read_more_hover_color);
}
add_action( 'wp_enqueue_scripts', 'constructions_read_more_method' );	