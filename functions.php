<?php 
/**
 *
 * @package MEM Theme
 */
/*Main functions*/
if ( ! function_exists( 'mem_theme_setup' ) ) :
function mem_theme_setup() {
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
}
    register_nav_menus( array(
        'primary' => esc_html__( 'Primary', 'mem_theme' ),
    ) );

    add_theme_support( 'html5', array(
        'comment-form',
        'comment-list',
        'caption',
    ) );
    add_theme_support( 'customize-selective-refresh-widgets' );

    function mem_theme_add_editor_styles() {
        add_editor_style( 'custom-editor-style.css' );
    }
    add_action( 'admin_init', 'mem_theme_add_editor_styles' );
endif;
add_action( 'after_setup_theme', 'mem_theme_setup' );

function mem_theme_content_width() {
    $GLOBALS['content_width'] = apply_filters( 'mem_theme_content_width', 1170 );
}
add_action( 'after_setup_theme', 'mem_theme_content_width', 0 );

function mem_theme_widgets_init() {
    register_sidebar( array(
        'name'          => esc_html__( 'Sidebar', 'mem-theme' ),
        'id'            => 'sidebar-1',
        'description'   => esc_html__( 'Dodaj widgety', 'mem-theme' ),
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
    ) );
    register_sidebar( array(
    'name' => 'Footer Sidebar 1',
    'id' => 'footer-sidebar-1',
    'description' => 'Appears in the footer area',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
    ) );
    register_sidebar( array(
    'name' => 'Footer Sidebar 2',
    'id' => 'footer-sidebar-2',
    'description' => 'Appears in the footer area',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
    ) );
    register_sidebar( array(
    'name' => 'Footer Sidebar 3',
    'id' => 'footer-sidebar-3',
    'description' => 'Appears in the footer area',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
    ) );
}
add_action( 'widgets_init', 'mem_theme_widgets_init' );
/**
 * Load custom WordPress nav walker.
 */
if ( ! class_exists( 'navwalker' )) {
    require_once(get_template_directory() . '/inc/navwalker.php');
}
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';
/**
 * Sidebars
 */
register_sidebar(array(
    'name' => 'Strefa rodzica',
    'id' => 'case_studies',
    'description' => 'Tytuł i paragraf w Strefe Rodzica',
    // ZNACZNIK PRZED TYTUŁEM
    'before_title' => '<h1>',
    // ZNACZNIK PO TYTULE
    'after_title' => '</h1>',));
register_sidebar(array(
    'name' => 'Aktualności',
    'id' => 'aktualnosci',
    'description' => 'Tytuł i paragraf w Aktualnościach',
    // ZNACZNIK PRZED TYTUŁEM
    'before_title' => '<h1>',
    // ZNACZNIK PO TYTULE
    'after_title' => '</h1>',));

/**
 * Enqueue scripts and styles.
 */
function mem_theme_enqueue_styles() {

wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css' );
wp_enqueue_style( 'google_web_fonts', 'https://fonts.googleapis.com/css?family=Lato:300|Montserrat:600&amp;subset=latin-ext' );
wp_enqueue_style( 'font-awsome', 'https://use.fontawesome.com/releases/v5.3.1/css/all.css' );
wp_enqueue_style( 'core', get_template_directory_uri() . '/style.css' );

}
add_action( 'wp_enqueue_scripts', 'mem_theme_enqueue_styles');

function mem_theme_scripts() {
    wp_enqueue_script('jquery');

    // Internet Explorer HTML5 support
    wp_enqueue_script( 'html5hiv',get_template_directory_uri().'/bootstrap/js/html5.js', array(), '3.7.0', false );
    wp_script_add_data( 'html5hiv', 'conditional', 'lt IE 9' );

    // load bootstrap js
    wp_enqueue_script('mem-theme-popper', get_template_directory_uri() . '/bootstrap/js/popper.min.js', array(), '', true );
    wp_enqueue_script('mem-theme-bootstrapjs', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js', array(), '', true );
    wp_enqueue_script('mem-theme-themejs', get_template_directory_uri() . '/bootstrap/js/theme-script.min.js', array(), '', true );
    wp_enqueue_script( 'mem-theme-skip-link-focus-fix', get_template_directory_uri() . '/bootstrap/js/skip-link-focus-fix.min.js', array(), '20151215', true );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'mem_theme_scripts' );
function wpdocs_theme_setup() {
    add_image_size( 'post-thumb', 650,450, true ); 
    add_image_size( 'homepage-thumb', 270, 270, true );
}
add_action( 'after_setup_theme', 'wpdocs_theme_setup' );
function modify_read_more_link() {
    return '<a class="more-link" href="' . get_permalink() . '">(...)</a>';
}
add_filter( 'the_content_more_link', 'modify_read_more_link' );
    ?>
