<?php
if ( ! function_exists( 'u8979_setup' ) ) :

function u8979_setup() {

    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     */
    /* Pinegrow generated Load Text Domain Begin */
    load_theme_textdomain( 'u8979', get_template_directory() . '/languages' );
    /* Pinegrow generated Load Text Domain End */

    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    /*
     * Let WordPress manage the document title.
     */
    add_theme_support( 'title-tag' );
    
    /*
     * Enable support for Post Thumbnails on posts and pages.
     */
    add_theme_support( 'post-thumbnails' );
    //Support custom logo
    add_theme_support( 'custom-logo' );

    // Add menus.
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'u8979' ),
        'social'  => __( 'Social Links Menu', 'u8979' ),
    ) );

/*
     * Register custom menu locations
     */
    /* Pinegrow generated Register Menus Begin */

    /* Pinegrow generated Register Menus End */
    
/*
    * Set image sizes
     */
    /* Pinegrow generated Image sizes Begin */

    /* Pinegrow generated Image sizes End */
    
    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support( 'html5', array(
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
    ) );

    /*
     * Enable support for Post Formats.
     */
    add_theme_support( 'post-formats', array(
        'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
    ) );

    /*
     * Enable support for Page excerpts.
     */
     add_post_type_support( 'page', 'excerpt' );
}
endif; // u8979_setup

add_action( 'after_setup_theme', 'u8979_setup' );


if ( ! function_exists( 'u8979_init' ) ) :

function u8979_init() {

    
    // Use categories and tags with attachments
    register_taxonomy_for_object_type( 'category', 'attachment' );
    register_taxonomy_for_object_type( 'post_tag', 'attachment' );

    /*
     * Register custom post types. You can also move this code to a plugin.
     */
    /* Pinegrow generated Custom Post Types Begin */

    /* Pinegrow generated Custom Post Types End */
    
    /*
     * Register custom taxonomies. You can also move this code to a plugin.
     */
    /* Pinegrow generated Taxonomies Begin */

    /* Pinegrow generated Taxonomies End */

}
endif; // u8979_setup

add_action( 'init', 'u8979_init' );


if ( ! function_exists( 'u8979_custom_image_sizes_names' ) ) :

function u8979_custom_image_sizes_names( $sizes ) {

    /*
     * Add names of custom image sizes.
     */
    /* Pinegrow generated Image Sizes Names Begin*/
    /* This code will be replaced by returning names of custom image sizes. */
    /* Pinegrow generated Image Sizes Names End */
    return $sizes;
}
add_action( 'image_size_names_choose', 'u8979_custom_image_sizes_names' );
endif;// u8979_custom_image_sizes_names



if ( ! function_exists( 'u8979_widgets_init' ) ) :

function u8979_widgets_init() {

    /*
     * Register widget areas.
     */
    /* Pinegrow generated Register Sidebars Begin */

    /* Pinegrow generated Register Sidebars End */
}
add_action( 'widgets_init', 'u8979_widgets_init' );
endif;// u8979_widgets_init



if ( ! function_exists( 'u8979_customize_register' ) ) :

function u8979_customize_register( $wp_customize ) {
    // Do stuff with $wp_customize, the WP_Customize_Manager object.

    /* Pinegrow generated Customizer Controls Begin */

    /* Pinegrow generated Customizer Controls End */

}
add_action( 'customize_register', 'u8979_customize_register' );
endif;// u8979_customize_register


if ( ! function_exists( 'u8979_enqueue_scripts' ) ) :
    function u8979_enqueue_scripts() {

        /* Pinegrow generated Enqueue Scripts Begin */

    wp_register_script( 'inline-script-1', '', [], '1.0.3', false );
    wp_enqueue_script( 'inline-script-1' );
    wp_add_inline_script( 'inline-script-1', '(function detectIE() {
				var ua 		= window.navigator.userAgent;
				var version = -1;

				var msie = ua.indexOf(\'MSIE \');
				if (msie > 0) { version = parseInt(ua.substring(msie + 5, ua.indexOf(\'.\', msie)), 10); }
				var trident = ua.indexOf(\'Trident/\');
				if (trident > 0) { var rv = ua.indexOf(\'rv:\'); version = parseInt(ua.substring(rv + 3, ua.indexOf(\'.\', rv)), 10); }
				var edge = ua.indexOf(\'Edge/\');
				if (edge > 0) { version = parseInt(ua.substring(edge + 5, ua.indexOf(\'.\', edge)), 10); }
				if (version != -1) { document.documentElement.className += \' ie\' + version; }
			})();');

    wp_register_script( 'inline-script-2', '', [], '1.0.3', true );
    wp_enqueue_script( 'inline-script-2' );
    wp_add_inline_script( 'inline-script-2', '(function(i,s,o,g,r,a,m){i[\'GoogleAnalyticsObject\']=r;i[r]=i[r]||function(){
				(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
				m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,\'script\',\'//www.google-analytics.com/analytics.js\',\'ga\');

			ga(\'create\', \'UA-15793894-53\', \'auto\');
			ga(\'send\', \'pageview\');');

    wp_deregister_script( 'u8979-allefb' );
    wp_enqueue_script( 'u8979-allefb', get_template_directory_uri() . '/build/js/all-e15fb61743.js', [], '1.0.3', true);

    wp_deregister_script( 'u8979-bundle' );
    wp_enqueue_script( 'u8979-bundle', get_template_directory_uri() . '/iframe-resizer-build/bundle.js', [], '1.0.3', true);

    /* Pinegrow generated Enqueue Scripts End */

        /* Pinegrow generated Enqueue Styles Begin */

    wp_deregister_style( 'u8979-stylebeefbd' );
    wp_enqueue_style( 'u8979-stylebeefbd', get_template_directory_uri() . '/build/css/style-b9eef548bd.css', [], '1.0.3', 'all');

    wp_deregister_style( 'u8979-style' );
    wp_enqueue_style( 'u8979-style', get_bloginfo('stylesheet_url'), [], '1.0.3', 'all');

    /* Pinegrow generated Enqueue Styles End */

    }
    add_action( 'wp_enqueue_scripts', 'u8979_enqueue_scripts' );
endif;

function pgwp_sanitize_placeholder($input) { return $input; }
/*
 * Resource files included by Pinegrow.
 */
/* Pinegrow generated Include Resources Begin */
require_once "inc/custom.php";
if( !class_exists( 'PG_Helper_v2' ) ) { require_once "inc/wp_pg_helpers.php"; }

    /* Pinegrow generated Include Resources End */
?>