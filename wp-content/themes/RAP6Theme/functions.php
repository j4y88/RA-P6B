<?php
/**
 * RED Starter Theme functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package RED_Starter_Theme
 */

if ( ! function_exists( 'red_starter_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function red_starter_setup() {
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Let WordPress manage the document title.
	add_theme_support( 'title-tag' );

	// Enable support for Post Thumbnails on posts and pages.
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html( 'Primary Menu' ),
	) );

	// Switch search form, comment form, and comments to output valid HTML5.
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

}
endif; // red_starter_setup
add_action( 'after_setup_theme', 'red_starter_setup' );

function add_sidebars() {
    register_sidebar( array(
        'name' => __( 'Footer Sidebar', 'footer_side' ),
        'id' => 'footer-sidebar',
        'description' => __( 'Contact Info and Business Hours.', 'theme-footer-slug' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>',
	    )
    );
    register_sidebar( array(
        'name' => __( 'Top Nav Logo', 'top_nav_side' ),
        'id' => 'top_nav_sidebar',
        'description' => __( 'Navigation Logo.', 'theme-nav-slug' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>',
	    )
    );
    register_sidebar( array(
		'name'          => esc_html( 'Sidebar' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>',
	) );
}
add_action( 'widgets_init', 'add_sidebars' );

function add_case_type($name) {
    $name_dash=str_replace(" ","_",$type);
    register_post_type( strtolower($name),
        array(
            'labels' => array(
                'name' => __( ucwords(strtolower($name)) ),
                'singular_name' => __( $name )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => strtolower($name_dash)),
            'supports' => array( 'title', 'editor', 'author', 'thumbnail')
        )
    );
}
function add_taxonomy(){
    $taxonomy_array = array(
        "Products" => array("Type"),
        "Adventures"
        );
    foreach ($taxonomy_array as $key=>$a){
        if (is_array($a)){
            add_case_type($key);
            foreach ($a as $value){
                add_taxonomy_type($value, $key);
            }
        } else { 
            add_case_type($a);
        }
    }
}
function add_taxonomy_type($value, $key) {
    $new_value=str_replace(" ","_",$value);
    register_taxonomy(  strtolower($new_value), strtolower($key), array(
        'label'        => __( ucwords(strtolower($value)) ),
        'rewrite'      => array( 'slug' => strtolower($new_value) ),
        'hierarchical' => true,
    ) );
}
add_action( 'init', 'add_taxonomy');



/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * @global int $content_width
 */
function red_starter_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'red_starter_content_width', 640 );
}
add_action( 'after_setup_theme', 'red_starter_content_width', 0 );

/**
 * Filter the stylesheet_uri to output the minified CSS file.
 */
function red_starter_minified_css( $stylesheet_uri, $stylesheet_dir_uri ) {
	if ( file_exists( get_template_directory() . '/build/css/style.min.css' ) ) {
		$stylesheet_uri = $stylesheet_dir_uri . '/build/css/style.min.css';
	}

	return $stylesheet_uri;
}
add_filter( 'stylesheet_uri', 'red_starter_minified_css', 10, 2 );

/**
 * Enqueue scripts and styles.
 */
function red_starter_scripts() {
	wp_enqueue_style( 'red-starter-style', get_stylesheet_uri() );

	wp_enqueue_script( 'red-starter-skip-link-focus-fix', get_template_directory_uri() . '/build/js/skip-link-focus-fix.min.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'red_starter_scripts' );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';
