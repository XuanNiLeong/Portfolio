<?php

// Add dynamic title tag support
function portfolio_theme_support(){
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'portfolio_theme_support');

// register css styles
function portfolio_register_styles(){

    wp_enqueue_style('portfolio-style', get_template_directory_uri() ."/style.css", array('portfolio-bootstrap'), '1.0','all');
    wp_enqueue_style('portfolio-bootstrap', "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css", array(), '1.0','all');
    wp_enqueue_style('portfolio-aos', "aos-by-red.css", array(), '1.0','all');
    wp_enqueue_style('portfolio-aosnext', "https://unpkg.com/aos@next/dist/aos.css", array(), '1.0','all');
}

add_action('wp_enqueue_scripts', 'portfolio_register_styles');


// register js
function portfolio_register_scripts(){

    wp_enqueue_script( 'portfolio-jquery', "https://code.jquery.com/jquery-3.2.1.slim.min.js", array(), '1.0', 'true');
    wp_enqueue_script( 'portfolio-cloudflare', "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js", array(), '1.0', 'true');
    wp_enqueue_script( 'portfolio-boostrap', "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js", array(), '1.0', 'true');
    wp_enqueue_script( 'portfolio-js', get_template_directory_uri() ."/assets/js/main.js", array(), '1.0', 'true');


}

add_action('wp_enqueue_scripts', 'portfolio_register_scripts');

?>