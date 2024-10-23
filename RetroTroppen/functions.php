<?php

function retro_load_resources() {
    wp_enqueue_style("woocommerce", get_template_directory_uri() . "/WooCommerce.css");
    wp_enqueue_style("bootstrap", "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css");
    wp_enqueue_script("bootstrap", "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js", array(), false, true);
    wp_enqueue_style("style", get_template_directory_uri() . "/style.css");
    wp_enqueue_script("script", get_template_directory_uri() . "/script.js");
    wp_enqueue_style("Playfair-font", "https://fonts.google.com/specimen/Playfair+Display?preview.text=RetroTroppen&stroke=Serif");
    wp_enqueue_style("Montserrat-font", "https://fonts.google.com/specimen/Montserrat?preview.text=Sammen%20bevarer%20vi%20unikt%20design%20og%20kvalitet&stroke=Sans+Serif");
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
    pll_register_string("index", "Følg os på Sociale media");
    pll_register_string("index", "RetroTroppen");
    pll_register_string("home", "Nyeste opslag");
    pll_register_string("index", "Læs mere");
    pll_register_string("single", "Kommentar");
    pll_register_string("single", "Kommentarne er lukket");
    pll_register_string("index", "Populært Retro");
    pll_register_string("blog", "Læs mere");
    pll_register_string("single", "Tilbage");
    pll_register_string("index", "RetroTroppen på Instagram");
    pll_register_string("footer", "Vores links");
    pll_register_string("footer", "Hjem");
    pll_register_string("footer", "Om Os");
    pll_register_string("footer", "Blog");
    pll_register_string("footer", "Kontakt");
    pll_register_string("footer", "Følg os");
    pll_register_string("footer", "Vores værdier er baseret på kvalitet, design og bæredygtighed.");
    pll_register_string("footer", "Vi er stolte af at kunne tilbyde vores kunder unikke produkter og retro møbler.");
}

add_action("init", "pll_register_strings");



function shop_enable_woocommerce() {
    add_theme_support("woocommerce");
}

add_action("after_setup_theme", "shop_enable_woocommerce");