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

    wp_deregister_script( 'nivo-boot' );
    wp_register_script( 'nivo-boot', plugins_url('js/jquery.nivo.boostrap.js', __FILE__ ));
    wp_enqueue_script( 'nivo-boot' );

    wp_register_style( 'nivo-style', plugins_url('css/nivo-slider.css', __FILE__ ), array(), '20120208', 'all' );
    wp_enqueue_style( 'nivo-style' );

}


function show_nivo_slider(){
    ?>
    <div class="slider-wrapper theme-default">
            <div id="slider" class="nivoSlider">
                <img src="http://705159090.r.cdn77.net/wp-content/uploads/2011/08/slider.png" data-thumb="images/toystory.jpg" alt="" />
                <img src="http://705159090.r.cdn77.net/wp-content/uploads/2011/08/walle.png" data-thumb="images/up.jpg" alt="" title="This is an example of a caption" /></a>
                <img src="http://705159090.r.cdn77.net/wp-content/uploads/2011/08/toystory.png" data-thumb="images/walle.jpg" alt="" data-transition="slideInLeft" />
                <img src="http://705159090.r.cdn77.net/wp-content/uploads/2011/08/nemo.png" data-thumb="images/nemo.jpg" alt="" title="#htmlcaption" />
            </div>
            <div id="htmlcaption" class="nivo-html-caption">
                <strong>This</strong> is an example of a <em>HTML</em> caption with <a href="#">a link</a>.
            </div>
        </div>
    <?php
}




if(is_admin()){
    add_action('admin_menu', 'admin_nivo_function');


}

function admin_nivo_function(){


    add_menu_page( 'Nivo Slider', 'Nivo Slider', 0, 'really-simple-nivo-slider', 'admin_nivo_page' );
}

function admin_nivo_page(){

    wp_deregister_script( 'jquery-ui' );
    wp_register_script( 'jquery-ui', plugins_url('libs/jquery-ui/js/jquery-ui-1.8.23.custom.min.js', __FILE__ ));
    wp_enqueue_script( 'jquery-ui' );


    wp_register_style( 'jquery-ui-style', plugins_url('libs/jquery-ui/css/jquery-ui-1.8.23.custom.css', __FILE__ ), array(), '20120208', 'all' );
    wp_enqueue_style( 'jquery-ui-style' );

    wp_deregister_script( 'admin-nivo-slider' );
    wp_register_script( 'admin-nivo-slider', plugins_url('js/admin.js', __FILE__ ));
    wp_enqueue_script( 'admin-nivo-slider' );


    ob_start();
    include 'views/admin/panel.php';
    $page = ob_get_clean();
    echo $page;
}
