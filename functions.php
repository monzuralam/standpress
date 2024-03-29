<?php
/**
 * StandPress functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package StandPress
 */

if ( ! defined( 'VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( 'VERSION', '1.0.0' );
}

if ( ! function_exists( 'standpress_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function standpress_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on StandPress, use a find and replace
		 * to change 'standpress' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'standpress', get_template_directory() . '/languages' );

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
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'standpress' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'standpress_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);

		/**
		 * Custom image size
		 */
		add_image_size( 'blog-thumb', 370, 340, true );
	}
endif;
add_action( 'after_setup_theme', 'standpress_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function standpress_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'standpress_content_width', 640 );
}
add_action( 'after_setup_theme', 'standpress_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function standpress_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'standpress' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'standpress' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'standpress_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function standpress_scripts() {
	wp_enqueue_style( 'bootstrap', get_template_directory_uri( ) . '/assets/css/bootstrap.min.css', array(), VERSION, 'all' );
	wp_enqueue_style( 'flex-slider', get_template_directory_uri( ) . '/assets/css/flex-slider.css', array(), VERSION, 'all' );
	wp_enqueue_style( 'fontawesome', get_template_directory_uri( ) . '/assets/css/fontawesome.css', array(), VERSION, 'all' );
	wp_enqueue_style( 'owl', get_template_directory_uri( ) . '/assets/css/owl.css', array(), VERSION, 'all' );
	wp_enqueue_style( 'style', get_template_directory_uri( ) . '/assets/css/style.css', array(), VERSION, 'all' );
	wp_enqueue_style( 'standpress-style', get_stylesheet_uri(), array(), VERSION );
	wp_style_add_data( 'standpress-style', 'rtl', 'replace' );

	wp_enqueue_script( 'navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), VERSION, true );
	wp_enqueue_script( 'accordions', get_template_directory_uri( ) . '/assets/js/accordions.js', array('jquery'), VERSION, true );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri( ) . '/assets/js/bootstrap.min.js', array('jquery'), VERSION, true );
	wp_enqueue_script( 'isotope', get_template_directory_uri( ) . '/assets/js/isotope.js', array('jquery'), VERSION, true );
	wp_enqueue_script( 'owl', get_template_directory_uri( ) . '/assets/js/owl.js', array('jquery'), VERSION, true );
	wp_enqueue_script( 'slick', get_template_directory_uri( ) . '/assets/js/slick.js', array('jquery'), VERSION, true );
	wp_enqueue_script( 'custom', get_template_directory_uri( ) . '/assets/js/custom.js', array('jquery'), VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'standpress_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Bootstrap Navwalker
 */
require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';

if( ! function_exists('standpress_excerpt_length') ){
	function standpress_excerpt_length( $length ) {
		return 20;
	}
	add_filter( 'excerpt_length', 'standpress_excerpt_length', 999 );
}

/**
 * Tgm plugin activation
 */
require_once get_theme_file_path( 'inc/tgm.php');

/**
 * Theme options
 */
require_once get_theme_file_path( 'inc/theme-options.php' );
require_once get_theme_file_path( 'inc/theme-typography.php' );