<?php
    function load_stylesheets()
    {
        wp_register_style("stylesheet", get_template_directory_uri() . "/style.css", "", 1, "all");
        wp_enqueue_style("stylesheet");
    }
    add_action("wp_enqueue_scripts", "load_stylesheets");

    // function ad_remove_gutenberg() {
    //     remove_post_type_support( 'page', 'editor' );
    //     remove_post_type_support( 'post', 'editor' );
    //  }
    //  add_action( 'init', 'ad_remove_gutenberg' );

    
    
?>