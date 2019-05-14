<?php


//Custom Menu Create

function setup_menu_custom_fields() {

    $fields = array(
        '_mycustom_field_1' => array(
            'label' => __( 'انتخاب آیکون منو', 'nooshin_a' ),
            'element' => 'i',
//            'sanitize_callback' => 'sanitize_text_field',
            'attrs' => array(
                'class'=>'fa fa-pen',


            ),

        ),
        '_mycustom_field_2' => array(
            'label' => __( 'آیکون انتخاب شده', 'nooshin_a' ),
            'element' => 'input',
//            'sanitize_callback' => 'sanitize_text_field',
            'attrs' => array(
                'type'=>'text',
//                'disabled'=>'true'

            ),

        ),

    );

    // Menu Management custom fields.
    new \Lucymtc\Menu( $fields );
}
add_action( 'after_setup_theme', 'setup_menu_custom_fields' );

//End Custom Menu Create
function register_my_menu(){
    register_nav_menu('nooshin-a-main-menu',__( 'منوی اصلی تم نوشین A' ));
}
add_action('init', 'register_my_menu');

function get_menu($args){

    ob_start();
//  include  Custom Menu Walker Class
    include_once(NOOSHIN_A_DIR.NOOSHIN_A_INC.'Walker_Simple.php');
    // Create Custom Walker object
    $myWalker = new Walker_Simple();
    wp_nav_menu( $args = array(
//        'menu'              => "", // (int|string|WP_Term) Desired menu. Accepts a menu ID, slug, name, or object.
        'menu_class'        => "dropdown bg-info py-0", // (string) CSS class to use for the ul element which forms the menu. Default 'menu'.
//        'menu_id'           => "", // (string) The ID that is applied to the ul element which forms the menu. Default is the menu slug, incremented.
//        'container'         => "", // (string) Whether to wrap the ul, and what to wrap it with. Default 'div'.
//        'container_class'   => "", // (string) Class that is applied to the container. Default 'menu-{menu slug}-container'.
//        'container_id'      => "", // (string) The ID that is applied to the container.
//        'fallback_cb'       => "", // (callable|bool) If the menu doesn't exists, a callback function will fire. Default is 'wp_page_menu'. Set to false for no fallback.
//        'before'            => "", // (string) Text before the link markup.
//        'after'             => "", // (string) Text after the link markup.
//        'link_before'       => "", // (string) Text before the link text.
//        'link_after'        => "", // (string) Text after the link text.
//        'echo'              => "", // (bool) Whether to echo the menu or return it. Default true.
//        'depth'             => "5", // (int) How many levels of the hierarchy are to be included. 0 means all. Default 0.
        'walker'            => $myWalker, // (object) Instance of a custom walker class.
        'theme_location'    => "nooshin-a-main-menu", // (string) Theme location to be used. Must be registered with register_nav_menu() in order to be selectable by the user.
//        'items_wrap'        => "", // (string) How the list items should be wrapped. Default is a ul with an id and class. Uses printf() format with numbered placeholders.
//        'item_spacing'      => "", // (string) Whether to preserve whitespace within the menu's HTML. Accepts 'preserve' or 'discard'. Default 'preserve'.
    ) );
    return ob_get_clean();
}
add_shortcode('get_menu', 'get_menu');


