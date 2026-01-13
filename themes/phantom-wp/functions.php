<?php

function phantom_enqueue_assets() {

    // CSS
    wp_enqueue_style(
        'phantom-main-style',
        get_template_directory_uri() . '/assets/css/main.css',
        array(),        // dependencies
        '1.0',          // version
        'all'           // media
    );

    // JS
    wp_enqueue_script(
        'phantom-main-js',
        get_template_directory_uri() . '/assets/js/main.js',
        array('jquery'), // dependencies
        '1.0',
        true             // load in footer
    );
}

add_action('wp_enqueue_scripts', 'phantom_enqueue_assets');

register_nav_menus([
    'main_menu' => 'Main Menu',
]);

function register_recipe_cpt() {

    register_post_type('recipe', [
        'labels' => [
            'name'          => 'Recipes',
            'singular_name' => 'Recipe',
        ],
        'public'        => true,
        'has_archive'   => true,
        'menu_position' => 5,
        'menu_icon'     => 'dashicons-carrot',
        'supports'      => ['title', 'editor', 'thumbnail'],
    ]);
}

add_action('init', 'register_recipe_cpt');
