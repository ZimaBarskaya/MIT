<?php
/**
 * mit-theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package mit-theme
 */

if ( ! function_exists( 'mit_theme_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function mit_theme_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on mit-theme, use a find and replace
		 * to change 'mit-theme' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'mit-theme', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'mit-theme' ),
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
		add_theme_support( 'custom-background', apply_filters( 'mit_theme_custom_background_args', array(
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
add_action( 'after_setup_theme', 'mit_theme_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function mit_theme_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'mit_theme_content_width', 640 );
}
add_action( 'after_setup_theme', 'mit_theme_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function mit_theme_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'mit-theme' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'mit-theme' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'mit_theme_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function mit_theme_scripts() {
	wp_enqueue_style( 'mit-theme-style', get_stylesheet_uri() );
	wp_enqueue_style( 'custom-style-1', get_template_directory_uri() . '/layouts/main.css' );
	wp_enqueue_style( 'custom-style-2', get_template_directory_uri() . '/layouts/libs.min.css' );
	wp_enqueue_script( 'mit-theme-navigation-1', get_template_directory_uri() . '/js/libs.min.js' );
	wp_enqueue_script( 'mit-theme-navigation-2', get_template_directory_uri() . '/js/form-ajax.js' );
	wp_enqueue_script( 'mit-theme-navigation-3', get_template_directory_uri() . '/js/script.js' );

	wp_enqueue_script( 'mit-theme-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'mit-theme-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'mit_theme_scripts' );

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

function get_custom_menu($menu_name2) {

	$menu_name = '';
$locations = get_nav_menu_locations();
//print_r($locations);
$menu = wp_get_nav_menu_object( "$menu_name2" );

$menuitems = wp_get_nav_menu_items( $menu->term_id, array( 'order' => 'DESC' ) );
$hrefs = ["registration", "programm", "teachers", "contacts"];
$i = 0;
foreach($menuitems as $menuitem) {
	echo "<li><a href=\"#".$hrefs[$i]."\" data-link=\"on-page\">".$menuitem->title."</a></li>";
	$i++;
}
	
}