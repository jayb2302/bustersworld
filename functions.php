<?php


add_action('init', 'register_custom_styles');
function register_custom_styles() {
    wp_register_style( 'front-page', '/Styles/front-page.css' );
}
add_action( 'wp_enqueue_scripts', 'conditionally_enqueue_styles_scripts' );
function conditionally_enqueue_styles_scripts() {
    if ( is_page('front-page.php') ) {
        wp_enqueue_style( 'front-page' );
    }
}

    

    function load_stylesheets()
    {
        wp_register_style("stylesheet", get_template_directory_uri() . "/style.css", "", 1, "all");
        wp_enqueue_style("stylesheet");
    }
    add_action("wp_enqueue_scripts", "load_stylesheets");
    add_theme_support('custom-page-template'); 
    
    function ad_remove_gutenberg() {
        remove_post_type_support( 'page', 'editor' );
        remove_post_type_support( 'post', 'editor' );
     }
    add_action( 'init', 'ad_remove_gutenberg' );

     function register_custom_menus() {
        register_nav_menus(
            array(
                'primary-menu' => __('Primary Menu', 'bustersworld'), // You can change 'Primary Menu' to your desired menu name
            )
        );
    }
    add_action('init', 'register_custom_menus');
    
    function enqueue_countdown_timer_script() {
        // Enqueue jQuery (if not already loaded)
        wp_enqueue_script('jquery');
    
        // Enqueue your countdown timer JavaScript
        wp_enqueue_script('countdown-timer', get_template_directory_uri() . '/countdown.js', array('jquery'), '1.0', true);
    }
    
    add_action('wp_enqueue_scripts', 'enqueue_countdown_timer_script');
    
    
    

    add_filter('wpcf7_autop_or_not', '__return_false');
