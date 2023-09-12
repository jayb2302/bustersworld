<?php
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
    
    
    
?>