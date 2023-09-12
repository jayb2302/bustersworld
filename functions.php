<?php
var_dump(is_page_template('front-page.php')); // Debugging line
var_dump(is_page_template('director-cast.php')); // Debugging line


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
    
    
    
