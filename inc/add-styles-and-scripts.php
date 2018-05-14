<?php
if( !is_admin() ){ // add them only on the theme
    // Bootstrap 4
    wp_enqueue_style('bootstrap', get_stylesheet_directory_uri().'/css/bootstrap.min.css', array(), '4.1.1');
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', get_stylesheet_directory_uri().'/js/jquery-3.3.1.slim.min.js', array(), '3.1.1', true);
    wp_enqueue_script('bootstrap', get_stylesheet_directory_uri().'/js/bootstrap.bundle.min.js', array('jquery'), '4.1.1', true);

    // Custom styles and scripts
    wp_enqueue_style('custom', get_stylesheet_directory_uri().'/css/custom.css', array('bootstrap'), time());
    wp_enqueue_script('custom', get_stylesheet_directory_uri().'/js/custom.js', array('bootstrap'), time(), true);
}
