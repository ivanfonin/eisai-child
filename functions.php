<?php
/**
 * Eisai child theme functions and definitions.
 */

/**
 * Enqueue theme scripts and styles.
 */
function eisai_child_scripts_and_styles() {
    $parent_style = 'eisai-style';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
}

add_action( 'wp_enqueue_scripts', 'eisai_child_scripts_and_styles' );
