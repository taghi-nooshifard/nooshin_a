<?php


function register_custom_wp_admin_style(){

    //jquery UI CSS
    wp_register_style("jquery-ui.css",NOOSHIN_A_URI.NOOSHIN_A_LIB."jquery-ui.css");

    //fontawesome-free-5.5.0-web and jquery dependency
    wp_register_style("fontawesome_5_CSS",NOOSHIN_A_URI.NOOSHIN_A_LIB."fontawesome-free-5.5.0-web/css/all.min.css");
    wp_register_script("fontawesome_5_JS",NOOSHIN_A_URI.NOOSHIN_A_LIB."fontawesome-free-5.5.0-web/js/all.min.js",array('jquery','jquery-ui-core','jquery-ui-tabs','jquery-ui-dialog'));

    //Custom JS Nooshin_a Theme
    wp_register_script('our_admin', NOOSHIN_A_URI.NOOSHIN_A_LIB.'our_admin.js', array('jquery'));

}
function load_custom_wp_admin_style() {
    //Load Icon List From NooshinIconDialog.php
    if(is_admin()) include_once(NOOSHIN_A_DIR.NOOSHIN_A_INC.'NooshinIconDialog.php');

    // Register All CSS and JS Files
    register_custom_wp_admin_style();


    // Enqueue Registered Files(css,js)
    wp_enqueue_style("jquery-ui.css");
    wp_enqueue_style("fontawesome_5_CSS");
    wp_enqueue_script("fontawesome_5_JS");
    wp_enqueue_script("our_admin");
}
add_action( 'admin_enqueue_scripts', 'load_custom_wp_admin_style' );



