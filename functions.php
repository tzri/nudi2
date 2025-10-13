<?php
/**
 * nudi2_setup() – Setup theme
 *
 * @author Mike Moisio
 * @link https://mikemoisio.ai
 */
function nudi2_setup() {
    add_theme_support( 'title-tag' );
    register_nav_menu( 'main-menu', __( 'Main Menu', 'my-minimal-theme' ) );
}
add_action( 'after_setup_theme', 'nudi2_setup' );


/**
 * nudi2_enqueue_styles() – Enqueue the style.css
 *
 * @author Mike Moisio
 * @link https://mikemoisio.ai
 */
function nudi2_enqueue_styles() {
    wp_enqueue_style( 'main-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'nudi2_enqueue_styles' );

/**
 * nudi2_register_footer_widget() – Register Footer Widget Area
 *
 * @author Mike Moisio
 * @link https://mikemoisio.ai
 */
function nudi2_register_footer_widget() {
    register_sidebar( array(
        'name'          => __( 'Footer', 'nudi2' ),
        'id'            => 'footer-widget',
        'description'   => __( 'Add widgets here to appear in your site footer.', 'nudi2' ),
        'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="footer-widget-title">',
        'after_title'   => '</h4>',
    ) );
}
add_action( 'widgets_init', 'nudi2_register_footer_widget' );
