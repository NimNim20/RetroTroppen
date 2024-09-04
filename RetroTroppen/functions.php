<?php

function retro_load_resources() {
    wp_enqueue_style("bootstrap", "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css");
    wp_enqueue_script("bootstrap", "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js", array(), false, true);
    wp_enqueue_style("style", get_template_directory_uri() . "/style.css");
    wp_enqueue_script("script", get_template_directory_uri() . "/script.js");
    wp_enqueue_style("Playfair-font", "https://fonts.google.com/specimen/Playfair+Display?preview.text=RetroTroppen&stroke=Serif");
    wp_enqueue_script("anime-js", "https://cdn.jsdelivr.net/npm/animejs@3.2.1/lib/anime.min.js", array(), null, true);
    // wp_enqueue_script("nav-script", get_template_directory_uri() . "/navigation.js");
}
add_action("wp_enqueue_scripts", "retro_load_resources");

function retro_disable_gutenberg() {
    remove_post_type_support("page", "editor");
}
add_action("init", "retro_disable_gutenberg");

add_filter("wpcf7_autop_or_not", "__return_false");

function pll_register_strings() {
    pll_register_string("Retrotroppen", "Følg os på Sociale media");
    pll_register_string("RetroTroppen", "RetroTroppen");
    pll_register_string("RetroTroppen", "Nyeste opslag");
    pll_register_string("RetroTroppen", "Læs mere");
    pll_register_string("RetroTroppen", "Kommentar");
    pll_register_string("RetroTroppen", "Kommentarne er lukket");
}

add_action("init", "pll_register_strings");

