<?php
/**
 * JB Housekeeping functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package JB_Housekeeping
 */


/** Constants **/
define('THEMEROOT', get_stylesheet_directory_uri());
define('IMAGES', THEMEROOT . '/images');
define('SCRIPTS', THEMEROOT . '/js');
define('STYLES', THEMEROOT . '/css');
define('INC', get_template_directory() . '/inc');

if ( ! function_exists( 'jb_housekeeping_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function jb_housekeeping_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on JB Housekeeping, use a find and replace
		 * to change 'jb-housekeeping' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'jb-housekeeping', get_template_directory() . '/languages' );

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
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'jb-housekeeping' ),
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

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'jb_housekeeping_custom_background_args', array(
			'default-color' => 'ffffff',
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


	}
endif;
add_action( 'after_setup_theme', 'jb_housekeeping_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function jb_housekeeping_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'jb_housekeeping_content_width', 640 );
}
add_action( 'after_setup_theme', 'jb_housekeeping_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function jb_housekeeping_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'jb-housekeeping' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'jb-housekeeping' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar(array(
		'name'			=> esc_html__('Footer First Column', 'jb-housekeeping'),
		'id'			=> 'footer-1',
		'description'	=> esc_html__('Widgets in footer, first column', 'jb-housekeeping'),
		'before_widget'	=> '<div id="%1$s" class="footer-widget %2$s">',
		'after_widget'	=> '</div>',
		'before_title'	=> '<h3>',
		'after_title'	=> '</h3>',
	));

	register_sidebar(array(
		'name'			=> esc_html__('Footer Second Column', 'jb-housekeeping'),
		'id'			=> 'footer-2',
		'description'	=> esc_html__('Widgets in footer, second column', 'jb-housekeeping'),
		'before_widget'	=> '<div id="%1$s" class="footer-widget %2$s">',
		'after_widget'	=> '</div>',
		'before_title'	=> '<h3>',
		'after_title'	=> '</h3>',
	));

	register_sidebar(array(
		'name'			=> esc_html__('Footer Third Column', 'jb-housekeeping'),
		'id'			=> 'footer-3',
		'description'	=> esc_html__('Widgets in footer, third column', 'jb-housekeeping'),
		'before_widget'	=> '<div id="%1$s" class="footer-widget %2$s">',
		'after_widget'	=> '</div>',
		'before_title'	=> '<h3>',
		'after_title'	=> '</h3>',
	));

}
add_action( 'widgets_init', 'jb_housekeeping_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function jb_housekeeping_scripts() {
	wp_enqueue_style( 'jb-housekeeping-style', get_stylesheet_uri() );
	wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css?family=Merriweather:300,400,700|Raleway:200,400,600');
	wp_enqueue_style('fontawesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
	wp_enqueue_style('slick-style', 'https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css');
	wp_enqueue_style('slick-theme', 'https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick-theme.css');
	wp_enqueue_style('jb-housekeeping-main-styles', STYLES . '/main.css');
	wp_enqueue_script('slick-slider', 'https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js', array('jquery'), false, true);

	wp_enqueue_script('jb-housekeeping-main-script', SCRIPTS . '/main.js', array('jquery'), false, true);

	//wp_enqueue_script( 'jb-housekeeping-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'jb-housekeeping-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'jb_housekeeping_scripts' );


//load included files
require_once INC . '/init.php';