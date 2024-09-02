<?php

function retro_load_resources() {
    wp_enqueue_style("bootstrap", "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css");
    wp_enqueue_script("bootstrap", "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js", array(), false, true);
    wp_enqueue_style("style", get_template_directory_uri() . "/style.css");
    wp_enqueue_script("script", get_template_directory_uri() . "/script.js");
    wp_enqueue_script("script", get_template_directory_uri() . "/navigation.js");
}
add_action("wp_enqueue_scripts", "retro_load_resources");

function retro_disable_gutenberg() {
    remove_post_type_support("page", "editor");
}
add_action("init", "retro_disable_gutenberg");