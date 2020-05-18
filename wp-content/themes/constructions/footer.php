<?php
// Do not allow direct access to the file.
if( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * The template for displaying the footer
 * Contains the closing of the #content div and all content after.
 */
?>


	</div><!-- #content -->
<?php if((is_front_page() or is_home()) and get_theme_mod('activate_counter')) { echo constructions_counter_include (); } ?>	
	<footer id="colophon" class="site-footer" itemscope="itemscope" itemtype="http://schema.org/WPFooter">
		<?php if (esc_attr(get_theme_mod( 'social_media_activate' )) ) { ?>
			<div class="social-bottom social">
					<div  style="float: none;" class="fa-icons">
						<?php echo constructions_social_section (); ?>
					</div>
			</div>
		<?php } ?>
			<div class="footer-center">
			
				<?php if (  is_active_sidebar('footer-1') ) : ?>
					<div class="footer-widgets">
						<?php dynamic_sidebar( 'footer-1' ); ?>
					</div>
				<?php endif; ?>
				
				<?php if (  is_active_sidebar('footer-2') ) : ?>
					<div class="footer-widgets">
						<?php dynamic_sidebar( 'footer-2' ); ?>
					</div>
				<?php endif; ?>
				
				<?php if (  is_active_sidebar('footer-3') ) : ?>
					<div class="footer-widgets">
						<?php dynamic_sidebar( 'footer-3' ); ?>
					</div>
				<?php endif; ?>
				
				<?php if (  is_active_sidebar('footer-4') ) : ?>
					<div class="footer-widgets">
						<?php dynamic_sidebar( 'footer-4' ); ?>
					</div>
				<?php endif; ?>
				
			</div>		
		<div class="site-info">
		<?php if(get_theme_mod('constructions_copyright')) {
			echo esc_html(get_theme_mod('code_copyright_text'));
		}
		else { ?>
			<a class="powered" href="<?php echo esc_url( __( 'https://wordpress.org/', 'constructions' ) ); ?>">
				<?php
				printf( esc_html_e( 'Powered by %s', 'constructions' ),__('WordPress','constructions') );
				?>
			</a>
			<p>
				<?php esc_html_e('All rights reserved', 'constructions'); ?>  &copy; <?php bloginfo('name'); ?>			
				<a title="Seos Theme - Constructions" href="<?php echo esc_url('https://seosthemes.com/', 'constructions'); ?>" target="_blank"><?php esc_html_e(' Constructions Theme by Seos Themes', 'constructions'); ?></a>
			</p>
		<?php } ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
	<?php if(get_theme_mod('activate_back_to_top', true)) { constructions_to_top(); } ?>
	
	
<?php wp_footer(); ?>

</body>
</html>
