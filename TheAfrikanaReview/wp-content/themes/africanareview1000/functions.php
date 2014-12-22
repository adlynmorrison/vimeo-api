<?php
/**
 * AfricanaReview1000 functions and definitions
 *
 * @package AfricanaReview1000
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'africanareview1000_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function africanareview1000_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on AfricanaReview1000, use a find and replace
	 * to change 'africanareview1000' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'africanareview1000', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
    add_image_size('large-thumb', 1060, 650, true);
    add_image_size('index-thumb', 780, 9999, true);

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'africanareview1000' ),
        'social' => __( 'Social Menu', 'africanareview1000' ),
        'complementary' => __( 'Complementary Menu', 'africanareview1000' ),
        'shoppe' => __( 'Shoppe Menu', 'africanareview1000' ),
        ) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',
	) );

	// Setup the WordPress core custom background feature.
//	add_theme_support( 'custom-background', apply_filters( 'africanareview1000_custom_background_args', array(
//		'default-color' => 'ffffff',
//		'default-image' => '',
//	) ) );
}
endif; // africanareview1000_setup
add_action( 'after_setup_theme', 'africanareview1000_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function africanareview1000_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'africanareview1000' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );

    register_sidebar( array(
        'name'          => __( 'Footer-Widgets', 'africanareview1000' ),
        'description'   => __( 'Footer widgets area appears in the footer of the site', 'africanareview1000' ),
        'id'            => 'sidebar-2',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h1 class="widget-title">',
        'after_title'   => '</h1>',
    ) );
}
add_action( 'widgets_init', 'africanareview1000_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function africanareview1000_scripts() {
	wp_enqueue_style( 'africanareview1000-style', get_stylesheet_uri() );

    wp_enqueue_style( 'africanareview1000-style-images', get_template_directory_uri() . '/images' );

    wp_enqueue_style( 'africanareview1000-font-awesome', 'http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css');

	wp_enqueue_script( 'africanareview1000-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'africanareview1000-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

    wp_enqueue_script( 'africanareview1000-masonry', get_template_directory_uri() . '/js/masonry-settings.js', array('masonry'), '20140401', true );

    wp_enqueue_script( 'africanareview1000-waypoints', get_template_directory_uri() . '/js/waypoints.min.js', array( 'jquery' ), '20140401', true );

    wp_enqueue_script( 'africanareview1000-waypoints-sticky', get_template_directory_uri() .'/js/waypoints-sticky.min.js' , array( 'jquery' ), '20140401', true );

    wp_enqueue_script( 'africanareview1000-waypoints-sticky-init', get_template_directory_uri() .'/js/waypoints-sticky-init.js' , array( 'jquery' ), '20140401', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'africanareview1000_scripts' );

function mason_script() {
    wp_enqueue_script( 'jquery-masonry' );
}
add_action( 'wp_enqueue_scripts', 'mason_script' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
