<?php 
$strangerwp_menu_style = get_theme_mod('arilewp_menu_style', 'sticky');   
$strangerwp_menu_container_size = get_theme_mod('arilewp_menu_container_size', 'container-full');
?>

    <!-- Header Center Logo -->
	<section class="theme-header-logo-center">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12">	
					<?php echo arilewp_header_logo(); ?>									
				</div>
			</div>	
		</div>
	</section>
	<!-- /End of Header Center Logo -->
	
	<!-- Navbar Header Center -->
	<nav class="navbar navbar-expand-lg not-sticky navbar-light navbar-header-center <?php if($strangerwp_menu_style == 'sticky'){echo 'header-sticky'; }?>">
		<div class="<?php echo esc_attr($strangerwp_menu_container_size); ?>">
			<div class="row align-self-center">
				
					<div class="align-self-center">
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php esc_attr_e('Toggle navigation','strangerwp'); ?>">
							<span class="navbar-toggler-icon"></span>
						</button>
					</div>
					
					<?php 
						wp_nav_menu( array(
							 'theme_location'  => 'primary',
							 'container'       => 'div',
							 'container_class' => 'collapse navbar-collapse',
							 'container_id' => 'navbarNavDropdown',
							 'menu_class'      => 'nav navbar-nav m-right-left-auto',
							 'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
							 'walker'          => new wp_bootstrap_navwalker()
						) );
					?>
				
			</div>
		</div>
	</nav>
	<!-- /End of Navbar Header Center -->