<?php
/**
 * Theme functions and definitions
 *
 * @package StrangerWP 
 */

/**
 * After setup theme hook
 */
function strangerwp_theme_setup(){
    /*
     * Make child theme available for translation.
     * Translations can be filed in the /languages/ directory.
     */
    load_child_theme_textdomain( 'strangerwp', get_stylesheet_directory() . '/languages' );	
	require get_stylesheet_directory() . '/inc/customizer/strangerwp-customizer-options.php';	
	if ( is_admin() ) {
        require get_stylesheet_directory() . '/inc/admin/getting-started.php';
	}
}
add_action( 'after_setup_theme', 'strangerwp_theme_setup' );

/**
 * Load assets.
 */

function strangerwp_theme_css() {
	wp_enqueue_style( 'strangerwp-parent-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style('strangerwp-child-style', get_stylesheet_directory_uri() . '/style.css');
	wp_enqueue_style('strangerwp-default-css', get_stylesheet_directory_uri() . "/assets/css/theme-default.css" ); 
    wp_enqueue_style('strangerwp-bootstrap-smartmenus-css', get_stylesheet_directory_uri() . "/assets/css/bootstrap-smartmenus.css" ); 	
}
add_action( 'wp_enqueue_scripts', 'strangerwp_theme_css', 99);

/**
 * Import Options From Parent Theme
 *
 */
function strangerwp_parent_theme_options() {
	$arilewp_mods = get_option( 'theme_mods_arilewp' );
	if ( ! empty( $arilewp_mods ) ) {
		foreach ( $arilewp_mods as $arilewp_mod_k => $arilewp_mod_v ) {
			set_theme_mod( $arilewp_mod_k, $arilewp_mod_v );
		}
	}
}
add_action( 'after_switch_theme', 'strangerwp_parent_theme_options' );

/**
 * Remove Parent Theme Setting
 *
 */
function strangerwp_remove_parent_setting( $wp_customize ) {
	$wp_customize->remove_setting('arilewp_sticky_bar_logo');
}
add_action( 'customize_register', 'strangerwp_remove_parent_setting',99 );

/**
 * Custom Theme Script
*/
function strangerwp_custom_theme_css() {
	$strangerwp_testomonial_background_image = get_theme_mod('arilewp_testomonial_background_image');
	?>
    <style type="text/css">
		<?php if($strangerwp_testomonial_background_image != null) : ?>
		.theme-testimonial { 
		        background-image: url(<?php echo esc_url( $strangerwp_testomonial_background_image ); ?>); 
                background-size: cover;
				background-position: center center;
		}
        <?php endif; ?>
    </style>
 
<?php }
add_action('wp_footer','strangerwp_custom_theme_css');

/**
 * Fresh site activate
 *
 */
$fresh_site_activate = get_option( 'fresh_strangerwp_site_activate' );
if ( (bool) $fresh_site_activate === false ) {
	set_theme_mod( 'arilewp_blog_front_container_size', 'container' );
	set_theme_mod( 'arilewp_footer_container_size', 'container' );
	set_theme_mod( 'arilewp_project_front_container_size', 'container' );
	set_theme_mod( 'arilewp_page_header_background_color', 'rgb(238, 91, 34, 1)' );
	update_option( 'fresh_strangerwp_site_activate', true );
}

/**
 * Theme Pagination Class.
*/
class Class_StrangerWP_Theme_Pagination
{
	function strangerwp_pagination()
	{
		global $post;
		global $wp_query, $wp_rewrite,$loop;
		if ( get_query_var( 'paged' ) ) { $paged = get_query_var( 'paged' ); }
		elseif ( get_query_var( 'page' ) ) { $paged = get_query_var( 'page' ); } else { $paged = 1; }
		if($wp_query->max_num_pages==0){ $wp_query = $loop; }
	?>
	<div class="pagination">
		<?php if( $paged != 1  ) : ?>
		<a href="<?php echo get_pagenum_link(($paged-1 > 0 ? $paged-1 : 1)); ?>"><i class="fa fa-angle-double-left"></i></a><?php endif; ?><?php for($i=1;$i<=($wp_query->max_num_pages>1 ? $wp_query->max_num_pages : 0 );$i++){ ?> <a class="<?php echo ($i == $paged ? 'active ' : ''); ?>" href="<?php echo get_pagenum_link($i); ?>"><?php echo $i; ?></a> <?php } ?>
		<?php if($wp_query->max_num_pages!= $paged): ?>
			<a href="<?php echo get_pagenum_link(($paged+1 <= $wp_query->max_num_pages ? $paged+1 : $wp_query->max_num_pages )); ?>"><i class="fa fa-angle-double-right"></i></a>
		<?php endif; ?>
	</div>
<?php 				
  } 
}