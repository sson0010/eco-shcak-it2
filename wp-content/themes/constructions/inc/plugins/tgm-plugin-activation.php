<?php
/**
 * Recommends plugins for use with the theme via the TGMA Script
 */

function constructionswp_tgmpa_register() {

	// Get array of recommended plugins
	$plugins = array(

		array(
			'name'				=> 'SEOS',
			'slug'				=> 'seos',
			'required'			=> false,
			'force_activation'	=> false,
		),

	);

	// Register notice
	tgmpa( $plugins, array(
		'id'           => 'constructionswp_theme',
		'domain'       => 'constructionswp',
		'menu'         => 'install-required-plugins',
		'has_notices'  => true,
		'is_automatic' => true,
		'dismissable'  => true,
	) );

}
add_action( 'tgmpa_register', 'constructionswp_tgmpa_register' );