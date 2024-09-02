<?php

function retro_load_resources() {
    // Enqueue Bootstrap CSS and JS
    wp_enqueue_style("bootstrap", "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css");
    wp_enqueue_script("bootstrap", "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js", array(), false, true);
    
    // Enqueue your theme's CSS
    wp_enqueue_style("style", get_template_directory_uri() . "/style.css");
    
    // Enqueue your theme's JS with unique handles
    wp_enqueue_script("theme-script", get_template_directory_uri() . "/script.js", array(), false, true);
    wp_enqueue_script("navigation-script", get_template_directory_uri() . "/navigation.js", array(), false, true);
}
add_action("wp_enqueue_scripts", "retro_load_resources");
