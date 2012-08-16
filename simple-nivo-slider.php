<?php
/*
    Plugin Name: Really Simple Nivo Slider
    Plugin URI: http://www.leandrotec.com.mx
    Description: Un plugin con el que podran poder sus slider sin problemas
    Version: 1.0
    Author: Leandro Tec Can
    Author http://www.leandrotec.com.mx
    License: Creative Commons BY
*/


add_action('wp_enqueue_scripts', 'load_nivo_scripts_function');

function load_nivo_scripts_function(){
    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js');
    wp_enqueue_script( 'jquery' );

    wp_deregister_script( 'nivo' );
    wp_register_script( 'nivo', plugins_url('js/jquery.nivo.slider.pack.js', __FILE__ ));
    wp_enqueue_script( 'nivo' );
}