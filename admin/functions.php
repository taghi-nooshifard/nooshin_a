<?php

add_action("admin_init","post_top_meta_box_handler");
function post_top_meta_box_handler(){
    include_once "post-top-meta-box.php";
    add_theme_support( 'post-thumbnails' );
    add_post_type_support( 'post', 'excerpt' );
}