<?php
function k_telecom_assets(){
    wp_enqueue_style('swiper-style', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css');
    wp_enqueue_style('maincss', get_template_directory_uri() . '/assets/css/main.css');
    wp_enqueue_script('swiper-js', "https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js", array(), '11', true); 
    wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/main.js', array(), 'null', true);


}
add_action('wp_enqueue_scripts', 'k_telecom_assets');
show_admin_bar(false);