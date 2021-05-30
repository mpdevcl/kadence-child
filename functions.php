<?php
/**
 * Enqueue child styles.
 */
function kadence_child_enqueue_scripts() {
	wp_enqueue_style(
        'kadence-child-styles',
        get_stylesheet_directory_uri() . '/style.css',
        array(),
        '1.0.0'
    );
}
add_action( 'wp_enqueue_scripts', 'kadence_child_enqueue_scripts', 20 );
