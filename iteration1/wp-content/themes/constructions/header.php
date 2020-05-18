<?php
// Do not allow direct access to the file.
if( ! defined( 'ABSPATH' ) ) {
    exit;
}
/**
 * The header for our theme
 *
 */
?>
<!DOCTYPE html>
<html itemscope itemtype="http://schema.org/WebPage" <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php if ( function_exists( 'wp_body_open' ) ) { wp_body_open(); } ?>
		<?php constructions_header (); ?><!-- Go to /inc/header-top.php -->
		<?php constructions_custom_breadcrumbs(); ?>		
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'constructions' ); ?></a>
				<?php if (( is_front_page() or is_home()) and is_active_sidebar('home-1') ) : ?>
					<div class="h-center">
						<?php dynamic_sidebar( 'home-1' ); ?>
					</div>
				<?php endif; ?>
				<?php if (( !is_front_page() or !is_home()) and is_active_sidebar('all') ) : ?>
					<div class="h-center">
						<?php dynamic_sidebar( 'all' ); ?>
					</div>
				<?php endif; ?>	
		<div id="content" class="site-content">