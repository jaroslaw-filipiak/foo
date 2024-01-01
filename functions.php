<?php


function load_parent_styles()
{
    wp_enqueue_style('parent_styles', trailingslashit(get_template_directory_uri()) . 'style.css', array());
}

add_action('wp_enqueue_scripts', 'load_parent_styles', 10);


function load_dev_scripts()
{
    // TASK2 READ ME: jquery is already loaded in vite.js so no need to load it again in array deps
    wp_enqueue_script('dev_scripts', trailingslashit(get_theme_file_uri()) . 'assets/js/scripts.js', array(), '1.0.0', array(
        'strategy'  => 'defer',
        'in_footer' => true,
    ));
    wp_enqueue_style('dev_styles', trailingslashit(get_theme_file_uri()) . 'assets/main.css', array());
}

add_action('wp_enqueue_scripts', 'load_dev_scripts', 10);


require_once('inc/cpt.php');
require_once('inc/taxonomies.php');
require_once('inc/shortcodes.php');
