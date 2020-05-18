<?php 
// Do not allow direct access to the file.
if( ! defined( 'ABSPATH' ) ) {
    exit;
}

if ( ! function_exists( 'constructions_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 */
	function constructions_setup() {
		/*
		 * Make theme available for translation.
		 */
		load_theme_textdomain( 'constructions', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 */
		add_theme_support( 'post-thumbnails' );

		/*
		 * WooCommerce Support
		 */		
		add_theme_support( 'woocommerce' );
		add_theme_support( 'wc-product-gallery-zoom' );
		add_theme_support( 'wc-product-gallery-lightbox' );
		add_theme_support( 'wc-product-gallery-slider' );
		/*
		 * Gutenberg Support
		 */			
		add_theme_support( 'align-wide' );
		add_theme_support( 'disable-custom-font-sizes');
		add_theme_support( 'disable-custom-colors' );
		add_theme_support( 'wp-block-styles' );		
		add_theme_support( 'responsive-embeds' );
		// This theme uses wp_nav_menu() in one location.
		add_theme_support( 'nav-menus' );
		register_nav_menu('primary', esc_html__( 'Primary', 'constructions' ) );
		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'constructions_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 50,
			'width'       => 140,
			'flex-width'  => true,
			'flex-height' => false,
		) );
	}
endif;
add_action( 'after_setup_theme', 'constructions_setup' );
/**
 * Set default header image.
 */
register_default_headers( array(
    'img1' => array(
        'url'           => get_template_directory_uri() . '/images/header.jpg',
        'thumbnail_url' => get_template_directory_uri() . '/images/header.jpg',
        'description'   => esc_html__( 'Default Image 1', 'constructions' )
    )

));
/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 */
function constructions_content_width() {
	// This variable is intended to be overruled from themes.
	$GLOBALS['content_width'] = apply_filters( 'constructions_content_width', 640 );
}
add_action( 'after_setup_theme', 'constructions_content_width', 0 );

/**
 * Register widget area.
 */
function constructions_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'constructions' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'constructions' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	
	register_sidebar( array(
		'name'          => esc_html__( 'Home Page', 'constructions' ),
		'id'            => 'home-1',
		'description'   => '',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	
	register_sidebar( array(
		'name'          => esc_html__( 'All pages without home page', 'constructions' ),
		'id'            => 'all',
		'description'   => '',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	
	register_sidebar( array(
		'name'          => esc_html__( 'Footer 1', 'constructions' ),
		'id'            => 'footer-1',
		'description'   => '',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer 2', 'constructions' ),
		'id'            => 'footer-2',
		'description'   => '',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer 3', 'constructions' ),
		'id'            => 'footer-3',
		'description'   => '',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer 4', 'constructions' ),
		'id'            => 'footer-4',
		'description'   => '',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'constructions_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function constructions_scripts() {	

	wp_enqueue_style( 'constructions-style', get_stylesheet_uri() );
	wp_enqueue_style( 'dashicons' );
	wp_enqueue_style( 'photo-font', '//fonts.googleapis.com/css?family=Farro:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i' );
	wp_enqueue_style( 'constructions-default', get_template_directory_uri() . '/css/default.css');

	wp_enqueue_style( 'constructions-woo-css', get_template_directory_uri() . '/inc/woocommerce/woo-css.css');
	wp_enqueue_style( 'animate-css', get_template_directory_uri() . '/css/animate.css');
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.css', array(), '4.7.0'  );	
	wp_enqueue_script( 'jquery');	
	wp_enqueue_script( 'jquery-ui-accordion' );
	wp_enqueue_script( 'jquery-ui-core' );
	wp_enqueue_script( 'jquery-ui-tabs' );

	wp_enqueue_script( 'constructions-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '', true );
	wp_enqueue_script( 'constructions-mobile-menu', get_template_directory_uri() . '/js/mobile-menu.js', array(), '', false );
	wp_enqueue_script( 'constructions-search-button', get_template_directory_uri() . '/js/search-button.js', array(), '', true );
	wp_enqueue_script( 'viewportchecker', get_template_directory_uri() . '/js/viewportchecker.js', array(), '', true );
	wp_enqueue_script( 'constructions-top', get_template_directory_uri() . '/js/to-top.js', array(), '', true );
	wp_enqueue_script( 'constructions-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'constructions_scripts' );

/**
 * Admin scripts and styles.
 */
function constructions_admin_scripts() {
	wp_enqueue_style( 'constructions-admin-css', get_template_directory_uri() . '/css/admin.css');
}
add_action( 'admin_enqueue_scripts', 'constructions_admin_scripts' );

/**
 * Includes
 */

require get_template_directory() . '/inc/woocommerce/quantity/quantity.php';
require get_template_directory() . '/framework/kirki/kirki.php';
require get_template_directory() . '/inc/content-width.php';
require get_template_directory() . '/inc/custom-header.php';
require get_template_directory() . '/inc/template-tags.php';
require get_template_directory() . '/inc/customizer.php';
require get_template_directory() . '/inc/header-top.php';
require get_template_directory() . '/inc/woocommerce/cart.php';
require get_template_directory() . '/inc/woocommerce/woo-functions.php';
require get_template_directory() . '/inc/back-to-top.php';
require get_template_directory() . '/inc/read-more.php';
require get_template_directory() . '/inc/social.php';
require get_template_directory() . '/inc/footer-options.php';
require get_template_directory() . '/inc/breadcrumbs.php';
require get_template_directory() . '/inc/customize-pro/class-customize.php';
require get_template_directory() . '/inc/plugins/class-tgm-plugin-activation.php';
require get_template_directory() . '/inc/plugins/tgm-plugin-activation.php';
/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Adds custom classes to the array of body classes.
 */

function constructions_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'constructions_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function constructions_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'constructions_pingback_header' );

/**
Sidebar Options
 */
function constructions_sidebar_width () { 
	if((get_theme_mod('sidebar_width') && (get_theme_mod('sidebar_position') != 'no')) && is_active_sidebar('sidebar-1')) {
		
		$constructions_content_width = 100;
		$constructions_sidebar_width = esc_attr(get_theme_mod('sidebar_width'));
		$constructions_sidebar_sum = $constructions_content_width - $constructions_sidebar_width;

		?>
		<style>
			#content #secondary {width: <?php echo  esc_attr(get_theme_mod('sidebar_width')); ?>% !important;}
			#content #primary {width: <?php echo $constructions_sidebar_sum; ?>% !important;}
		</style>
		
	<?php }

}
add_action('wp_head','constructions_sidebar_width');

/**
 * Sidebar Position
 */
 
function constructions_sidebar_position() {
	if ((get_theme_mod( 'sidebar_position') =='left' && is_active_sidebar('sidebar-1'))) { 
		wp_enqueue_style( 'constructions-sidebar', get_template_directory_uri() . '/layouts/left-sidebar.css');
	}

	if ((get_theme_mod( 'sidebar_position') =='right' && is_active_sidebar('sidebar-1'))) { 
		wp_enqueue_style( 'constructions-sidebar', get_template_directory_uri() . '/layouts/right-sidebar.css');
	}
}
add_action( 'wp_enqueue_scripts', 'constructions_sidebar_position' );


/**
 * Header Image Animation
 */
 
function constructions_header_image_zoom () { 
	if (!get_theme_mod('constructions_header_zoom')) { 
	?>
		<style>
@-webkit-keyframes header-image {
  0% {
    -webkit-transform: scale(1) translateY(0);
            transform: scale(1) translateY(0);
    -webkit-transform-origin: 50% 16%;
            transform-origin: 50% 16%;
  }
  100% {
    -webkit-transform: scale(1.25) translateY(-15px);
            transform: scale(1.25) translateY(-15px);
    -webkit-transform-origin: top;
            transform-origin: top;
  }
}
@keyframes header-image {
  0% {
    -webkit-transform: scale(1) translateY(0);
            transform: scale(1) translateY(0);
    -webkit-transform-origin: 50% 16%;
            transform-origin: 50% 16%;
  }
  100% {
    -webkit-transform: scale(1.25) translateY(-15px);
            transform: scale(1.25) translateY(-15px);
    -webkit-transform-origin: top;
            transform-origin: top;
  }
}
	</style>
	<?php
	}
}
add_action('wp_head','constructions_header_image_zoom');

/**
 * Header Image - Zoom Animation Speed
 */
function constructions_heade_image_zoom_speed () { ?>
	-webkit-animation: header-image 
	<?php 
	if (get_theme_mod('header_zoom_speed')) { 
		echo esc_attr(get_theme_mod('header_zoom_speed')); 
	} else 
		echo "20";
	?>s ease-out both; 
	animation: header-image
	<?php
	if (get_theme_mod('header_zoom_speed')) {
		echo esc_attr(get_theme_mod('header_zoom_speed')); 
	} else
		echo "20";
	?>s ease-out 0s 1 normal both running;
<?php	
}

/**
 * Change header top height
 */
function construction_change_height_header () {
	if ( ! is_front_page() and( !has_header_image() or !get_post_meta( get_the_ID(), 'constructions_value_header_image', true ) )) {
		echo "style='line-height: 12px;'";
    }
}
