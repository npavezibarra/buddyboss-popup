<?php
/*
Plugin Name: BuddyBoss Popup
Description: Un plugin para mostrar un popup nativo en BuddyBoss Theme con animaciones de entrada y salida.
Version: 1.0
Author: Tu Nombre
*/

function buddyboss_popup_enqueue_scripts() {
    wp_enqueue_style('buddyboss-popup-style', plugin_dir_url(__FILE__) . 'popup.css');
    wp_enqueue_script('buddyboss-popup-script', plugin_dir_url(__FILE__) . 'popup.js', array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'buddyboss_popup_enqueue_scripts');

function buddyboss_popup_html() {
    echo '
    <div id="buddyboss-popup-overlay" class="popup-hidden">
        <div id="buddyboss-popup" class="popup-hidden">
            <div class="popup-content">
                <a href="#" id="popup-close">Cerrar</a>
                <p>Hello World</p>
            </div>
        </div>
    </div>
    ';
}
add_action('wp_footer', 'buddyboss_popup_html');

function buddyboss_popup_shortcode() {
    return '<a href="#" id="popup-open">CLICK</a>';
}
add_shortcode('buddyboss_popup', 'buddyboss_popup_shortcode');
?>
