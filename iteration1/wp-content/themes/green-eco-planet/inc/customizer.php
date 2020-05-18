<?php

add_action( 'init' , 'green_eco_planet_kirki_fields' );
function green_eco_planet_kirki_fields(){

	/**
	* If kirki is not installed do not run the kirki fields
	*/

	if ( !class_exists( 'Kirki' ) ) {
		return;
	}

	Kirki::add_field('bizberg',  array(
	    'section' => 'header',
	    'settings' => 'header_padding',
	    'label' => esc_html__('Header Padding', 'green-eco-planet'),
	    'type' => 'spacing',
	    'default'     => array(
	        'top'    => '0px',
	        'bottom' => '0px',
	    ),
	    'transport' => 'auto',
	    'output' => array(
	        array(
	            'element' => '.navbar.navbar-default',
	            'property' => 'padding',
	            'media_query' => '@media (min-width: 1000px)'
	        ),
	        array(
	            'element' => '.navbar.sticky',
	            'property' => 'padding',
	            'value_pattern' => '0px',
	            'media_query' => '@media (min-width: 1000px)'
	        ),
	    ),
	));

}