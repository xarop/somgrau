<?php
// SomGrau child theme functions
add_action( 'wp_enqueue_scripts', function() {
    wp_enqueue_style( 'somgrau-style', get_stylesheet_uri(), [], wp_get_theme()->get('Version') );
} );
require_once get_stylesheet_directory() . '/xarop.php';
