<?php

$style_ver = wp_get_theme() -> get('Version');
function ttc_register_style(){
    wp_enqueue_style('ttc_style' , get_template_directory_uri() . "/style.css", array() , $style_ver , 'all' );
}

add_action('wp_enqueue_scripts','ttc_register_style');

?>