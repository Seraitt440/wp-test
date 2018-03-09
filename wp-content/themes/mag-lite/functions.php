<?php
/**
 * Mag Lite functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Mag_Lite
 */

if ( ! function_exists( 'mag_lite_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
function mag_lite_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Mag Lite, use a find and replace
		 * to change 'mag-lite' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'mag-lite', get_template_directory() . '/languages' );

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
		add_image_size( 'mag-lite-home-slider', 788, 388, true);
		add_image_size( 'mag-lite-home-promo', 346, 314, true);
		add_image_size( 'mag-lite-home-promo-center', 458, 190, true);
		add_image_size( 'mag-lite-home-promo-default', 360, 202, true);
		add_image_size( 'mag-lite-home-tab', 360, 241, true);
		add_image_size( 'mag-lite-promo-slider', 845, 432, true);
		add_image_size( 'mag-lite-promo-latest-popular-thumbnail', 90, 90, true);
		add_image_size( 'mag-lite-promo-latest-popular-medium', 330, 191, true);
		add_image_size( 'mag-lite-archive', 330, 241, true);

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' 		=> esc_html__( 'Primary', 'mag-lite' ),
			'top-menu' 		=> esc_html__( 'Top Menu', 'mag-lite' ),
			'social-media'  => esc_html__( 'Social Media', 'mag-lite' ),
			) );

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

		add_theme_support( 'custom-header', array(
			'height'      => 90,
			'width'       => 1300,
			'flex-width'  => true,
			'flex-height' => true,
			) );
		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'mag_lite_custom_background_args', array(
			'default-color' => 'f0f0f0',
			'default-image' => '',
			) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
			) );

		add_theme_support(
			'post-formats', array(
				'image',
				'video'
				) );		
	}
	endif;
	add_action( 'after_setup_theme', 'mag_lite_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function mag_lite_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'mag_lite_content_width', 640 );
}
add_action( 'after_setup_theme', 'mag_lite_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function mag_lite_widgets_init() {

	register_sidebar( array(
		'name'          => esc_html__( 'Header Advertisement', 'mag-lite' ),
		'id'            => 'header-advertisement',
		'description'   => esc_html__( 'Add widgets here.', 'mag-lite' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
		) );

	register_sidebar( array(
		'name'          => esc_html__( 'News Ticker', 'mag-lite' ),
		'id'            => 'news-ticker-section',
		'description'   => esc_html__( 'This sidebar will appear below menu section.', 'mag-lite' ),
		'before_widget' => '<section id="%1$s" class="%2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
		) );


	register_sidebar( array(
		'name'          => esc_html__( 'Home Slider', 'mag-lite' ),
		'id'            => 'home-slider-section',
		'description'   => esc_html__( 'This sidebar will appear below menu section.', 'mag-lite' ),
		'before_widget' => '<section id="%1$s" class="%2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
		) );

	register_sidebar( array(
		'name'          => esc_html__( 'Home Promo', 'mag-lite' ),
		'id'            => 'home-promo-section',
		'description'   => esc_html__( 'This sidebar will appear below Slider section.', 'mag-lite' ),
		'before_widget' => '<section id="%1$s" class="%2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
		) );

	register_sidebar( array(
		'name'          => esc_html__( 'Home Widget Area', 'mag-lite' ),
		'id'            => 'home-page-section',
		'description'   => esc_html__( 'This sidebar will appear in home section.', 'mag-lite' ),
		'before_widget' => '<section id="%1$s" class="%2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title"><span>',
		'after_title'   => '</span></h2>',
		) );

	register_sidebar( array(
		'name'          => esc_html__( 'Home Sidebar Widget', 'mag-lite' ),
		'id'            => 'home-page-sidebar',
		'description'   => esc_html__( 'This sidebar will appear in sidebar of home page.', 'mag-lite' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title"><span>',
		'after_title'   => '</span></h2>',
		) );			

	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'mag-lite' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'mag-lite' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title"><span>',
		'after_title'   => '</span></h2>',
		) );

	register_sidebar( array(
		'name'          => sprintf( esc_html__( 'Footer %d', 'mag-lite' ), 1 ),
		'id'            => 'footer-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title"><span>',
		'after_title'   => '</h2></span>',
		) );
	register_sidebar( array(
		'name'          => sprintf( esc_html__( 'Footer %d', 'mag-lite' ), 2 ),
		'id'            => 'footer-2',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title"><span>',
		'after_title'   => '</h2></span>',
		) );
	register_sidebar( array(
		'name'          => sprintf( esc_html__( 'Footer %d', 'mag-lite' ), 3 ),
		'id'            => 'footer-3',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title"><span>',
		'after_title'   => '</h2></span>',
		) );

	register_sidebar( array(
		'name'          => sprintf( esc_html__( 'Footer %d', 'mag-lite' ), 4 ),
		'id'            => 'footer-4',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title"><span>',
		'after_title'   => '</h2></span>',
		) );
}
add_action( 'widgets_init', 'mag_lite_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function mag_lite_scripts() {

	$fonts_url = mag_lite_fonts_url();	

	if ( ! empty( $fonts_url ) ) {
		wp_enqueue_style( 'mag-lite-google-fonts', $fonts_url, array(), null );
	}	

	// Load fontawesome
	wp_enqueue_style( 'font-awesome', get_template_directory_uri().'/assest/css/font-awesome.min.css', array(), '4.4.0' );

	// Owl Carousel Assets
	wp_enqueue_style( 'owl-carousel', get_template_directory_uri().'/assest/css/owl.carousel.css', array(), 'v2.2.0' );	

	// Owl Theme meanmenu
	wp_enqueue_style( 'owl-theme', get_template_directory_uri().'/assest/css/owl.theme.css', array(), 'v2.2.0' );

	//meanmenu
	wp_enqueue_style( 'meanmenu', get_template_directory_uri().'/assest/css/meanmenu.css', array(), '2.0.7' );		

	wp_enqueue_style( 'mag-lite-style', get_stylesheet_uri() );
	add_editor_style( get_stylesheet_uri());


	wp_enqueue_script( 'mag-lite-navigation', get_template_directory_uri() . '/assest/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'mag-lite-skip-link-focus-fix', get_template_directory_uri() . '/assest/js/skip-link-focus-fix.js', array(), '20151215', true );

	//owl carousel
	wp_enqueue_script( 'jquery-owl-carousel', get_template_directory_uri() . '/assest/js/owl.carousel.js', array('jquery'), 'v2.2.1', true );

	//Resize Sensor js
	wp_enqueue_script( 'jquery-ResizeSensor', get_template_directory_uri() . '/assest/js/ResizeSensor.js', array('jquery'), '20182301', true );

	//Theia Sticky Sidebar
	wp_enqueue_script( 'jquery-theia-sticky-sidebar', get_template_directory_uri() . '/assest/js/theia-sticky-sidebar.js', array('jquery'), 'v1.7.0', true );		

	//stellar
	wp_enqueue_script( 'jquery-stellar', get_template_directory_uri() . '/assest/js/stellar.js', array('jquery'), 'v0.6.2', true );

	// Jquery News Ticker 
	wp_enqueue_script( 'jquery-newsTicker-js', get_template_directory_uri() . '/assest/js/jquery.newsTicker.js', array('jquery'), '20151215', true );
	
	//Jquery Nice Scroll
	wp_enqueue_script( 'jquery-nice-scroll', get_template_directory_uri() . '/assest/js/jquery.nicescroll.js', array('jquery'), '3.6.8', true );

	//jquery-meanmenu
	wp_enqueue_script( 'jquery-meanmenu', get_template_directory_uri() . '/assest/js/jquery.meanmenu.js', array('jquery'), 'v2.0.8', true );

	//custom
	wp_enqueue_script( 'mag-lite-custom', get_template_directory_uri() . '/assest/js/custom.js', array(), '20170905', true );	

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'mag_lite_scripts' );


/**
 * Load init.
 */
require_once trailingslashit( get_template_directory() ) . '/inc/init.php';