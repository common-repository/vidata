<?php
/*
Plugin Name: Vidata
Plugin URI: 
Description: Short Code to implement Vidata
Version: 1.3.0
Author: Vidata
Author URI: http://vidata.io/
*/

/*
Vidata (Wordpress Plugin)
Copyright (C) 2017 Vidata

*/

///Short Code for the player
add_shortcode("vidata_player", "vidata_player");
function vidata_player($atts) {
    $a = shortcode_atts( array(
        'class' => '',
        'width' => 560,
        'height' => 315,
    ), $atts );
    $vidataid = esc_html($_GET['vidataId']);
    if(!empty($vidataid)){
        return '<div style="position: relative;padding-bottom: 56.25%;padding-top: 30px;height: 0;overflow: hidden; width: ' . $a['width'] . '"><iframe src="https://player.vidata.io/embed/index/' . $vidataid . '?autoplay=true" width="' . $a['width'] . '" style="position: absolute;top: 0;left: 0;width: 100%;height: 100%;" height="' . $a['height'] . '" class="' . $a['class'] . '" frameborder="0" allowfullscreen></iframe></div>';
    }
    return '';
}

///Short Code for CTAs
add_shortcode("vidata_cta", "vidata_cta");
function vidata_cta($atts) {
    $a = shortcode_atts( array(
        'class' => '',
        'text' => '',
        'ctaid' => 'CTA_1',
    ), $atts );
    $vidataid = esc_html($_GET['vidataId']);
    if(!empty($vidataid)){
        return '<a href="https://player.vidata.io/redirection/index/' . $vidataid . '?ctaid=' . $a['ctaid'] . '" class="' . $a['class'] . '" style="position:static">' . $a['text'] . '</a>';
    }
    return '';
}
?>
