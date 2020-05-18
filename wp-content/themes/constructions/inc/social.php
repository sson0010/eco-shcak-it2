<?php if( ! defined( 'ABSPATH' ) ) exit;

	function constructions_social_section () { ?>
		
			<div <?php if(get_theme_mod( 'social_media_activate' )){ ?> style="float: none;"<?php } ?> class="fa-icons">
			
				<?php if (get_theme_mod( 'constructions_facebook' )) : ?>
					<a target="<?php if(esc_attr(get_theme_mod( 'constructions_social_link_type' )) == "_blank"){echo esc_attr(get_theme_mod( 'constructions_social_link_type' )); } else {echo "_self"; } ?>" href="<?php echo esc_url(get_theme_mod( 'constructions_facebook' )); ?>"><i class="fa fa-facebook-f"></i></a>
				<?php endif; ?>
							
				<?php if (get_theme_mod( 'constructions_twitter' )) : ?>
					<a target="<?php if(esc_attr(get_theme_mod( 'constructions_social_link_type' ))){echo esc_attr(get_theme_mod( 'constructions_social_link_type' )); } else {echo "_self"; } ?>" href="<?php echo esc_url(get_theme_mod( 'constructions_twitter' )) ?>"><i class="fa fa-twitter"></i></a>
				<?php endif; ?>
															
				<?php if (get_theme_mod( 'constructions_youtube' )) : ?>
					<a target="<?php if(esc_attr(get_theme_mod( 'constructions_social_link_type' ))){echo esc_attr(get_theme_mod( 'constructions_social_link_type' )); } else {echo "_self"; } ?>" href="<?php echo esc_url(get_theme_mod( 'constructions_youtube' )); ?>"><i class="fa fa-youtube"></i></a>
				<?php endif; ?>
																			
				<?php if (get_theme_mod( 'constructions_vimeo' )) : ?>
					<a target="<?php if(esc_attr(get_theme_mod( 'constructions_social_link_type' ))){echo esc_attr(get_theme_mod( 'constructions_social_link_type' )); } else {echo "_self"; } ?>" href="<?php echo esc_url(get_theme_mod( 'constructions_vimeo' )); ?>"><i class="fa fa-vimeo"></i></a>
				<?php endif; ?>
																			
				<?php if (get_theme_mod( 'constructions_pinterest' )) : ?>
					<a target="<?php if(esc_attr(get_theme_mod( 'constructions_social_link_type' ))){echo esc_attr(get_theme_mod( 'constructions_social_link_type' )); } else {echo "_self"; } ?>" href="<?php echo esc_url(get_theme_mod( 'constructions_pinterest' )); ?>"><i class="fa fa-pinterest"></i></a>
				<?php endif; ?>	
				
				<?php if (get_theme_mod( 'constructions_instagram' )) : ?>
					<a target="<?php if(esc_attr(get_theme_mod( 'constructions_social_link_type' ))){echo esc_attr(get_theme_mod( 'constructions_social_link_type' )); } else {echo "_self"; } ?>" href="<?php echo esc_url(get_theme_mod( 'constructions_instagram' )); ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a>
				<?php endif; ?>
																			
				<?php if (get_theme_mod( 'constructions_linkedin' )) : ?>
					<a target="<?php if(esc_attr(get_theme_mod( 'constructions_social_link_type' ))){echo esc_attr(get_theme_mod( 'constructions_social_link_type' )); } else {echo "_self"; } ?>" href="<?php echo esc_url(get_theme_mod( 'constructions_linkedin' )); ?>"><i class="fa fa-linkedin"></i></a>
				<?php endif; ?>
																			
				<?php if (get_theme_mod( 'constructions_rss' )) : ?>
					<a target="<?php if(esc_attr(get_theme_mod( 'constructions_social_link_type' ))){echo esc_attr(get_theme_mod( 'constructions_social_link_type' )); } else {echo "_self"; } ?>" href="<?php echo esc_url(get_theme_mod( 'constructions_rss' )); ?>"><i class="fa fa-rss"></i></a>
				<?php endif; ?>
																			
				<?php if (get_theme_mod( 'constructions_stumbleupon' )) : ?>
					<a target="<?php if(esc_attr(get_theme_mod( 'constructions_social_link_type' ))){echo esc_attr(get_theme_mod( 'constructions_social_link_type' )); } else {echo "_self"; } ?>" href="<?php echo esc_url(get_theme_mod( 'constructions_stumbleupon' )); ?>"><i class="fa fa-stumbleupon"></i></a>
				<?php endif; ?>
																							
				<?php if (get_theme_mod( 'constructions_flickr' )) : ?>
					<a target="<?php if(esc_attr(get_theme_mod( 'constructions_social_link_type' ))){echo esc_attr(get_theme_mod( 'constructions_social_link_type' )); } else {echo "_self"; } ?>" href="<?php echo esc_url(get_theme_mod( 'constructions_flickr' )); ?>"><i class="fa fa-flickr" aria-hidden="true"></i></a>
				<?php endif; ?>
																							
				<?php if (get_theme_mod( 'constructions_dribbble' )) : ?>
					<a target="<?php if(esc_attr(get_theme_mod( 'constructions_social_link_type' ))){echo esc_attr(get_theme_mod( 'constructions_social_link_type' )); } else {echo "_self"; } ?>" href="<?php echo esc_url(get_theme_mod( 'constructions_dribbble' )); ?>"><i class="fa fa-dribbble"></i></a>
				<?php endif; ?>
																							
				<?php if (get_theme_mod( 'constructions_digg' )) : ?>
					<a target="<?php if(esc_attr(get_theme_mod( 'constructions_social_link_type' ))){echo esc_attr(get_theme_mod( 'constructions_social_link_type' )); } else {echo "_self"; } ?>" href="<?php echo esc_url(get_theme_mod( 'constructions_digg' )); ?>"><i class="fa fa-digg"></i></a>
				<?php endif; ?>
																							
				<?php if (get_theme_mod( 'constructions_skype' )) : ?>
					<a target="<?php if(esc_attr(get_theme_mod( 'constructions_social_link_type' ))){echo esc_attr(get_theme_mod( 'constructions_social_link_type' )); } else {echo "_self"; } ?>" href="<?php echo esc_url(get_theme_mod( 'constructions_skype' )); ?>"><i class="fa fa-skype"></i></a>
				<?php endif; ?>
																							
				<?php if (get_theme_mod( 'constructions_deviantart' )) : ?>
					<a target="<?php if(esc_attr(get_theme_mod( 'constructions_social_link_type' ))){echo esc_attr(get_theme_mod( 'constructions_social_link_type' )); } else {echo "_self"; } ?>" href="<?php echo esc_url(get_theme_mod( 'constructions_deviantart' )); ?>"><i class="fa fa-deviantart"></i></a>
				<?php endif; ?>
																							
				<?php if (get_theme_mod( 'constructions_yahoo' )) : ?>
					<a target="<?php if(esc_attr(get_theme_mod( 'constructions_social_link_type' ))){echo esc_attr(get_theme_mod( 'constructions_social_link_type' )); } else {echo "_self"; } ?>" href="<?php echo esc_url(get_theme_mod( 'constructions_yahoo' )); ?>"><i class="fa fa-yahoo"></i></a>
				<?php endif; ?>
																							
				<?php if (get_theme_mod( 'constructions_reddit_alien' )) : ?>
					<a target="<?php if(esc_attr(get_theme_mod( 'constructions_social_link_type' ))){echo esc_attr(get_theme_mod( 'constructions_social_link_type' )); } else {echo "_self"; } ?>" href="<?php echo esc_url(get_theme_mod( 'constructions_reddit_alien' )); ?>"><i class="fa fa-reddit-alien"></i></a>
				<?php endif; ?>
																							
				<?php if (get_theme_mod( 'constructions_paypal' )) : ?>
					<a target="<?php if(esc_attr(get_theme_mod( 'constructions_social_link_type' ))){echo esc_attr(get_theme_mod( 'constructions_social_link_type' )); } else {echo "_self"; } ?>" href="<?php echo esc_url(get_theme_mod( 'constructions_paypal' )); ?>"><i class="fa fa-paypal"></i></a>
				<?php endif; ?>
																							
				<?php if (get_theme_mod( 'constructions_dropbox' )) : ?>
					<a target="<?php if(esc_attr(get_theme_mod( 'constructions_social_link_type' ))){echo esc_attr(get_theme_mod( 'constructions_social_link_type' )); } else {echo "_self"; } ?>" href="<?php echo esc_url(get_theme_mod( 'constructions_dropbox' )); ?>"><i class="fa fa-dropbox"></i></a>
				<?php endif; ?>
																							
				<?php if (get_theme_mod( 'constructions_soundcloud' )) : ?>
					<a target="<?php if(esc_attr(get_theme_mod( 'constructions_social_link_type' ))){echo esc_attr(get_theme_mod( 'constructions_social_link_type' )); } else {echo "_self"; } ?>" href="<?php echo esc_url(get_theme_mod( 'constructions_soundcloud' )); ?>"><i class="fa fa-soundcloud"></i></a>
				<?php endif; ?>
																							
				<?php if (get_theme_mod( 'constructions_vk' )) : ?>
					<a target="<?php if(esc_attr(get_theme_mod( 'constructions_social_link_type' ))){echo esc_attr(get_theme_mod( 'constructions_social_link_type' )); } else {echo "_self"; } ?>" href="<?php echo esc_url(get_theme_mod( 'constructions_vk' )); ?>"><i class="fa fa-vk"></i></a>
				<?php endif; ?>
																							
				<?php if (get_theme_mod( 'constructions_envelope' )) : ?>
					<a target="<?php if(esc_attr(get_theme_mod( 'constructions_social_link_type' ))){echo esc_attr(get_theme_mod( 'constructions_social_link_type' )); } else {echo "_self"; } ?>" href="<?php echo esc_url(get_theme_mod( 'constructions_envelope' )); ?>"><i class="fa fa-envelope"></i></a>
				<?php endif; ?>
																							
				<?php if (get_theme_mod( 'constructions_address_book' )) : ?>
					<a target="<?php if(esc_attr(get_theme_mod( 'constructions_social_link_type' ))){echo esc_attr(get_theme_mod( 'constructions_social_link_type' )); } else {echo "_self"; } ?>" href="<?php echo esc_url(get_theme_mod( 'constructions_address_book' )); ?>"><i class="fa fa-address-book" aria-hidden="true"></i></a>
				<?php endif; ?>
																							
				<?php if (get_theme_mod( 'constructions_address_apple' )) : ?>
					<a target="<?php if(esc_attr(get_theme_mod( 'constructions_social_link_type' ))){echo esc_attr(get_theme_mod( 'constructions_social_link_type' )); } else {echo "_self"; } ?>" href="<?php echo esc_url(get_theme_mod( 'constructions_address_apple' )); ?>"><i class="fa fa-apple"></i></a>
				<?php endif; ?>
																							
				<?php if (get_theme_mod( 'constructions_address_amazon' )) : ?>
					<a target="<?php if(esc_attr(get_theme_mod( 'constructions_social_link_type' ))){echo esc_attr(get_theme_mod( 'constructions_social_link_type' )); } else {echo "_self"; } ?>" href="<?php echo esc_url(get_theme_mod( 'constructions_address_amazon' )); ?>"><i class="fa fa-amazon"></i></a>
				<?php endif; ?>
																							
				<?php if (get_theme_mod( 'constructions_address_slack' )) : ?>
					<a target="<?php if(esc_attr(get_theme_mod( 'constructions_social_link_type' ))){echo esc_attr(get_theme_mod( 'constructions_social_link_type' )); } else {echo "_self"; } ?>" href="<?php echo esc_url(get_theme_mod( 'constructions_address_slack' )); ?>"><i class="fa fa-slack"></i></a>
				<?php endif; ?>
																							
				<?php if (get_theme_mod( 'constructions_address_slideshare' )) : ?>
					<a target="<?php if(esc_attr(get_theme_mod( 'constructions_social_link_type' ))){echo esc_attr(get_theme_mod( 'constructions_social_link_type' )); } else {echo "_self"; } ?>" href="<?php echo esc_url(get_theme_mod( 'constructions_address_slideshare' )); ?>"><i class="fa fa-slideshare"></i></a>
				<?php endif; ?>
																							
				<?php if (get_theme_mod( 'constructions_address_wikipedia' )) : ?>
					<a target="<?php if(esc_attr(get_theme_mod( 'constructions_social_link_type' ))){echo esc_attr(get_theme_mod( 'constructions_social_link_type' )); } else {echo "_self"; } ?>" href="<?php echo esc_url(get_theme_mod( 'constructions_address_wikipedia' )); ?>"><i class="fa fa-wikipedia-w"></i></a>
				<?php endif; ?>
																							
				<?php if (get_theme_mod( 'constructions_address_wordpress' )) : ?>
					<a target="<?php if(esc_attr(get_theme_mod( 'constructions_social_link_type' ))){echo esc_attr(get_theme_mod( 'constructions_social_link_type' )); } else {echo "_self"; } ?>" href="<?php echo esc_url(get_theme_mod( 'constructions_address_wordpress' )); ?>"><i class="fa fa-wordpress"></i></a>
				<?php endif; ?>
																							
				<?php if (get_theme_mod( 'constructions_address_odnoklassniki' )) : ?>
					<a target="<?php if(esc_attr(get_theme_mod( 'constructions_social_link_type' ))){echo esc_attr(get_theme_mod( 'constructions_social_link_type' )); } else {echo "_self"; } ?>" href="<?php echo esc_url(get_theme_mod( 'constructions_address_odnoklassniki' )); ?>"><i class="fa fa-odnoklassniki"></i></a>
				<?php endif; ?>
																											
				<?php if (get_theme_mod( 'constructions_address_tumblr' )) : ?>
					<a target="<?php if(esc_attr(get_theme_mod( 'constructions_social_link_type' ))){echo esc_attr(get_theme_mod( 'constructions_social_link_type' )); } else {echo "_self"; } ?>" href="<?php echo esc_url(get_theme_mod( 'constructions_address_tumblr' )); ?>"><i class="fa fa-tumblr"></i></a>
				<?php endif; ?>

				<?php if (get_theme_mod( 'constructions_address_github' )) : ?>
					<a target="<?php if(esc_attr(get_theme_mod( 'constructions_social_link_type' ))){echo esc_attr(get_theme_mod( 'constructions_social_link_type' )); } else {echo "_self"; } ?>" href="<?php echo esc_url(get_theme_mod( 'constructions_address_github' )); ?>"><i class="fa fa-github-alt" aria-hidden="true"></i></a>
				<?php endif; ?>	
				
			</div>
		
<?php } 


Kirki::add_section( 'constructions_social_section', array(
    'title'          => __( 'Social Media', 'constructions' ),
	'description' => __( 'Social media buttons', 'constructions' ),	
    'priority'       => 64,
    'capability'     => 'edit_theme_options',
) );



Kirki::add_field( 'constructions_options', array(
	'type'        => 'switch',
	'settings'    => 'social_media_activate',
	'label'       => __( 'Activate Social Icons in Footer', 'constructions' ),
	'section'     => 'constructions_social_section',
	'priority'    => 10,
	'choices'     => array(
		'on'  => esc_html__( 'On', 'constructions' ),
		'' => esc_html__( 'Off', 'constructions' ),
	),
) );

Kirki::add_field( 'constructions_options', array(
	'type'        => 'select',
	'settings'    => 'constructions_social_link_type',
	'label'       => __( 'Link Type', 'constructions' ),
	'section'     => 'constructions_social_section',
	'default'     => '',
	'priority'    => 10,
	'multiple'    => 1,
	'choices'     => array(
		'' => '',
		'_self' => esc_html__( '_self', 'constructions' ),
		'_blank' => esc_html__( '_blank', 'constructions' ),		
	),
) );

Kirki::add_field( 'constructions_options', array(
	'type'        => 'color',
	'settings'    => 'social_media_color',
	'label'       => __( 'Social Icons Color', 'constructions' ),
	'section'     => 'constructions_social_section',
) );

Kirki::add_field( 'constructions_options', array(
	'type'        => 'color',
	'settings'    => 'social_media_hover_color',
	'label'       => __( 'Social Icons Hover Color', 'constructions' ),
	'section'     => 'constructions_social_section',
) );

Kirki::add_field( 'constructions_options', array(
	'type'     => 'url',
	'settings' => 'constructions_facebook',
	'label'    => esc_attr__( 'Enter Facebook url', 'constructions' ),
	'section'  => 'constructions_social_section',
	'default'  => '',
	'sanitize_callback' => 'esc_url_raw',	
) );	

Kirki::add_field( 'constructions_options', array(
	'type'     => 'url',
	'settings' => 'constructions_twitter',
	'label'    => esc_attr__( 'Enter Twitter url', 'constructions' ),
	'section'  => 'constructions_social_section',
	'default'  => '',
	'sanitize_callback' => 'esc_url_raw',	
) );

Kirki::add_field( 'constructions_options', array(
	'type'     => 'url',
	'settings' => 'constructions_linkedin',
	'label'    => esc_attr__( 'Enter Linkedin url', 'constructions' ),
	'section'  => 'constructions_social_section',
	'default'  => '',
	'sanitize_callback' => 'esc_url_raw',	
) );	

Kirki::add_field( 'constructions_options', array(
	'type'     => 'url',
	'settings' => 'constructions_rss',
	'label'    => esc_attr__( 'Enter RSS url', 'constructions' ),
	'section'  => 'constructions_social_section',
	'default'  => '',
	'sanitize_callback' => 'esc_url_raw',	
) );	

Kirki::add_field( 'constructions_options', array(
	'type'     => 'url',
	'settings' => 'constructions_pinterest',
	'label'    => esc_attr__( 'Enter Pinterest url', 'constructions' ),
	'section'  => 'constructions_social_section',
	'default'  => '',
	'sanitize_callback' => 'esc_url_raw',	
) );	

Kirki::add_field( 'constructions_options', array(
	'type'     => 'url',
	'settings' => 'constructions_youtube',
	'label'    => esc_attr__( 'Enter Youtube url', 'constructions' ),
	'section'  => 'constructions_social_section',
	'default'  => '',
	'sanitize_callback' => 'esc_url_raw',	
) );	

Kirki::add_field( 'constructions_options', array(
	'type'     => 'url',
	'settings' => 'constructions_vimeo',
	'label'    => esc_attr__( 'Enter Vimeo url', 'constructions' ),
	'section'  => 'constructions_social_section',
	'default'  => '',
	'sanitize_callback' => 'esc_url_raw',	
) );	

Kirki::add_field( 'constructions_options', array(
	'type'     => 'url',
	'settings' => 'constructions_instagram',
	'label'    => esc_attr__( 'Enter Ynstagram url', 'constructions' ),
	'section'  => 'constructions_social_section',
	'default'  => '',
	'sanitize_callback' => 'esc_url_raw',	
) );	

Kirki::add_field( 'constructions_options', array(
	'type'     => 'url',
	'settings' => 'constructions_stumbleupon',
	'label'    => esc_attr__( 'Enter Stumbleupon url', 'constructions' ),
	'section'  => 'constructions_social_section',
	'default'  => '',
	'sanitize_callback' => 'esc_url_raw',	
) );	

Kirki::add_field( 'constructions_options', array(
	'type'     => 'url',
	'settings' => 'constructions_flickr',
	'label'    => esc_attr__( 'Enter Flickr url', 'constructions' ),
	'section'  => 'constructions_social_section',
	'default'  => '',
	'sanitize_callback' => 'esc_url_raw',	
) );	

Kirki::add_field( 'constructions_options', array(
	'type'     => 'url',
	'settings' => 'constructions_dribbble',
	'label'    => esc_attr__( 'Enter Dribbble url', 'constructions' ),
	'section'  => 'constructions_social_section',
	'default'  => '',
	'sanitize_callback' => 'esc_url_raw',	
) );	

Kirki::add_field( 'constructions_options', array(
	'type'     => 'url',
	'settings' => 'constructions_digg',
	'label'    => esc_attr__( 'Enter Digg url', 'constructions' ),
	'section'  => 'constructions_social_section',
	'default'  => '',
	'sanitize_callback' => 'esc_url_raw',	
) );	

Kirki::add_field( 'constructions_options', array(
	'type'     => 'url',
	'settings' => 'constructions_skype',
	'label'    => esc_attr__( 'Enter Skype url', 'constructions' ),
	'section'  => 'constructions_social_section',
	'default'  => '',
	'sanitize_callback' => 'esc_url_raw',	
) );	

Kirki::add_field( 'constructions_options', array(
	'type'     => 'url',
	'settings' => 'constructions_deviantart',
	'label'    => esc_attr__( 'Enter Deviantart url', 'constructions' ),
	'section'  => 'constructions_social_section',
	'default'  => '',
	'sanitize_callback' => 'esc_url_raw',	
) );	

Kirki::add_field( 'constructions_options', array(
	'type'     => 'url',
	'settings' => 'constructions_yahoo',
	'label'    => esc_attr__( 'Enter Yahoo url', 'constructions' ),
	'section'  => 'constructions_social_section',
	'default'  => '',
	'sanitize_callback' => 'esc_url_raw',	
) );	

Kirki::add_field( 'constructions_options', array(
	'type'     => 'url',
	'settings' => 'constructions_reddit_alien',
	'label'    => esc_attr__( 'Enter Reddit Alien url', 'constructions' ),
	'section'  => 'constructions_social_section',
	'default'  => '',
	'sanitize_callback' => 'esc_url_raw',	
) );	

Kirki::add_field( 'constructions_options', array(
	'type'     => 'url',
	'settings' => 'constructions_paypal',
	'label'    => esc_attr__( 'Enter Paypal url', 'constructions' ),
	'section'  => 'constructions_social_section',
	'default'  => '',
	'sanitize_callback' => 'esc_url_raw',	
) );	

Kirki::add_field( 'constructions_options', array(
	'type'     => 'url',
	'settings' => 'constructions_dropbox',
	'label'    => esc_attr__( 'Enter Dropbox url', 'constructions' ),
	'section'  => 'constructions_social_section',
	'default'  => '',
	'sanitize_callback' => 'esc_url_raw',	
) );	

Kirki::add_field( 'constructions_options', array(
	'type'     => 'url',
	'settings' => 'constructions_soundcloud',
	'label'    => esc_attr__( 'Enter Soundcloud url', 'constructions' ),
	'section'  => 'constructions_social_section',
	'default'  => '',
	'sanitize_callback' => 'esc_url_raw',	
) );	

Kirki::add_field( 'constructions_options', array(
	'type'     => 'url',
	'settings' => 'constructions_vk',
	'label'    => esc_attr__( 'Enter VK url', 'constructions' ),
	'section'  => 'constructions_social_section',
	'default'  => '',
	'sanitize_callback' => 'esc_url_raw',	
) );	

Kirki::add_field( 'constructions_options', array(
	'type'     => 'url',
	'settings' => 'constructions_envelope',
	'label'    => esc_attr__( 'Enter Envelope url', 'constructions' ),
	'section'  => 'constructions_social_section',
	'default'  => '',
	'sanitize_callback' => 'esc_url_raw',	
) );	

Kirki::add_field( 'constructions_options', array(
	'type'     => 'url',
	'settings' => 'constructions_address_book',
	'label'    => esc_attr__( 'Enter Address Book url', 'constructions' ),
	'section'  => 'constructions_social_section',
	'default'  => '',
	'sanitize_callback' => 'esc_url_raw',	
) );	

Kirki::add_field( 'constructions_options', array(
	'type'     => 'url',
	'settings' => 'constructions_address_apple',
	'label'    => esc_attr__( 'Enter Apple url', 'constructions' ),
	'section'  => 'constructions_social_section',
	'default'  => '',
	'sanitize_callback' => 'esc_url_raw',	
) );	

Kirki::add_field( 'constructions_options', array(
	'type'     => 'url',
	'settings' => 'constructions_address_apple',
	'label'    => esc_attr__( 'Enter Amazon url', 'constructions' ),
	'section'  => 'constructions_social_section',
	'default'  => '',
	'sanitize_callback' => 'esc_url_raw',	
) );	

Kirki::add_field( 'constructions_options', array(
	'type'     => 'url',
	'settings' => 'constructions_address_apple',
	'label'    => esc_attr__( 'Enter Amazon url', 'constructions' ),
	'section'  => 'constructions_social_section',
	'default'  => '',
	'sanitize_callback' => 'esc_url_raw',	
) );	

Kirki::add_field( 'constructions_options', array(
	'type'     => 'url',
	'settings' => 'constructions_address_slack',
	'label'    => esc_attr__( 'Enter Slack url', 'constructions' ),
	'section'  => 'constructions_social_section',
	'default'  => '',
	'sanitize_callback' => 'esc_url_raw',	
) );	

Kirki::add_field( 'constructions_options', array(
	'type'     => 'url',
	'settings' => 'constructions_address_slideshare',
	'label'    => esc_attr__( 'Enter Slideshare url', 'constructions' ),
	'section'  => 'constructions_social_section',
	'default'  => '',
	'sanitize_callback' => 'esc_url_raw',	
) );	

Kirki::add_field( 'constructions_options', array(
	'type'     => 'url',
	'settings' => 'constructions_address_wikipedia',
	'label'    => esc_attr__( 'Enter Wikipedia url', 'constructions' ),
	'section'  => 'constructions_social_section',
	'default'  => '',
	'sanitize_callback' => 'esc_url_raw',	
) );	

Kirki::add_field( 'constructions_options', array(
	'type'     => 'url',
	'settings' => 'constructions_address_wordpress',
	'label'    => esc_attr__( 'Enter WordPress url', 'constructions' ),
	'section'  => 'constructions_social_section',
	'default'  => '',
	'sanitize_callback' => 'esc_url_raw',	
) );	

Kirki::add_field( 'constructions_options', array(
	'type'     => 'url',
	'settings' => 'constructions_address_odnoklassniki',
	'label'    => esc_attr__( 'Enter Odnoklassniki url', 'constructions' ),
	'section'  => 'constructions_social_section',
	'default'  => '',
	'sanitize_callback' => 'esc_url_raw',	
) );	

Kirki::add_field( 'constructions_options', array(
	'type'     => 'url',
	'settings' => 'constructions_address_tumblr',
	'label'    => esc_attr__( 'Enter Tumblr url', 'constructions' ),
	'section'  => 'constructions_social_section',
	'default'  => '',
	'sanitize_callback' => 'esc_url_raw',	
) );	

Kirki::add_field( 'constructions_options', array(
	'type'     => 'url',
	'settings' => 'constructions_address_github',
	'label'    => esc_attr__( 'Enter GitHub url', 'constructions' ),
	'section'  => 'constructions_social_section',
	'default'  => '',
	'sanitize_callback' => 'esc_url_raw',	
) );	

/********************************************
* Social styles
*********************************************/ 	

function constructions_social_method() {

        $social_media_color_mod = esc_attr(get_theme_mod( 'social_media_color' ));
        $social_media_hover_color_mod = esc_attr(get_theme_mod( 'social_media_hover_color' ));

		if($social_media_color_mod) { $social_media_color = ".social .fa-icons i, .social-top .fa {color: {$social_media_color_mod} !important;}";} else {$social_media_color ="";}
		if($social_media_hover_color_mod) { $social_media_hover_color = ".social .fa-icons i:hover, .social-top a:hover .fa {color: {$social_media_hover_color_mod} !important;}";} else {$social_media_hover_color ="";}

        wp_add_inline_style( 'constructions-style', 
		$social_media_color.$social_media_hover_color);
}
add_action( 'wp_enqueue_scripts', 'constructions_social_method' );				
		