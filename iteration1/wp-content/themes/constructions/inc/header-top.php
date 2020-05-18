<?php
// Do not allow direct access to the file.
if( ! defined( 'ABSPATH' ) ) {
    exit;
}

function constructions_header () {
?>	
<header id="masthead" class="site-header" itemscope="itemscope" itemtype="http://schema.org/WPHeader">
	<?php if (get_theme_mod( 'social_media_activate_header')) {  echo constructions_social_section_top (); } ?>		
	<div class="grid-top" <?php echo construction_change_height_header (); ?>>
			<div class="header-right"itemprop="logo" itemscope itemtype="http://schema.org/ImageObject">
			<?php the_custom_logo(); ?>
		</div>	
		<?php if (  has_nav_menu('primary') ) { ?>
	<button id="s-button-menu"><img src="<?php echo get_template_directory_uri() . '/images/mobile.jpg'; ?>"/></button>
	<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'constructions' ); ?></button>
			<?php wp_nav_menu( array( 
			'theme_location' => 'primary',
			'menu_id' => 'primary-menu',
			) ); ?>
	</nav><!-- #site-navigation -->
		<?php } ?>
	</div>
	
	<div class="all-header">
    	<div class="s-shadow"></div>
		<?php if (get_theme_mod('header_image_position') == 'default') { ?>
		<img id="masthead" class="header-image" style="<?php constructions_heade_image_zoom_speed (); ?>" src='<?php echo get_template_directory_uri() . '/images/header.jpg'; ?>' alt="<?php echo _e('header image','constructions'); ?>"/>	
		<?php } ?>
		<?php if (get_theme_mod('header_image_position') == 'real') { ?>
		<img id="masthead" class="header-image" style="<?php constructions_heade_image_zoom_speed (); ?>" src='<?php if ( !is_home() and has_post_thumbnail() and get_post_meta( get_the_ID(), 'constructions_value_header_image', true ) ) { the_post_thumbnail_url(); } else { header_image(); } ?>' alt="<?php echo _e('header image','constructions'); ?>"/>	
		<?php } else { ?>
		<div id="masthead" class="header-image" style="<?php constructions_heade_image_zoom_speed (); ?> background-image: url('<?php if (  !is_home() and has_post_thumbnail() and get_post_meta( get_the_ID(), 'constructions_value_header_image', true ) ) { the_post_thumbnail_url(); } else { header_image(); } ?>');"></div>
		<?php } ?>

		<div class="site-branding">
			<span class="ml15">
			<?php
			
			if ( is_front_page() && is_home() ) :
				?>
					<h1 class="site-title" itemscope itemtype="http://schema.org/Brand"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><span class="word"><?php bloginfo( 'name' ); ?></span></a></h1>

					<?php
				else :
					?>
					<p class="site-title" itemscope itemtype="http://schema.org/Brand"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><span class="word"><?php bloginfo( 'name' ); ?></span></a></p>
					
					<?php
				endif;
				$constructions_description = get_bloginfo( 'description', 'display' );
				if ( $constructions_description || is_customize_preview() ) :
					?>    
					<p class="site-description" itemprop="headline">
						<span class="word"><?php echo $constructions_description; ?></span>
					</p>

				<?php endif; ?>	
			</span>			
		</div><!-- .site-branding -->
	</div>
	
</header>
<?php }