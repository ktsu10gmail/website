<?php
/**
 * Jetta theme setup.
 */

if (! defined('ABSPATH')) {
    exit;
}

add_action('after_setup_theme', function () {
    add_theme_support('wp-block-styles');
    add_theme_support('editor-styles');
    add_editor_style('assets/css/editor.css');
});

add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style(
        'jetta-theme',
        get_theme_file_uri('assets/css/theme.css'),
        array(),
        wp_get_theme()->get('Version')
    );
});

