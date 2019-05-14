<?php


//Displays custom AweSome icon shortcode
function nooshin_a_text_icon_shortcode( $atts, $content = null ) {
    //set default attributes and values
    $values = shortcode_atts( array(
        'url'   	=> '#',
        'target'	=> '_self',
        'icon'=>'fab fa-telegram',
    ), $atts );

    $result = '<p><i class=" mr-1 '. $values['icon'] .'"></i>';
    if($values['url']!='#' and $values['url']!=""){
        $result=$result.'<a class=" text-dark" href="'. esc_attr($values['url']) .'"  target="'. esc_attr($values['target']) .'">'. $content .'</a></p>';
    }
    else{
        $result=$result.$content .'</p>';
    }
    return $result;

}
//Displays custom AweSome icon shortcode
function nooshin_a_text_shortcode( $atts, $content = null ) {
    //set default attributes and values

    return '<p>'. $content .'</p>';

}
add_shortcode( 'nooshin_a_text_icon', 'nooshin_a_text_icon_shortcode' );
add_shortcode( 'nooshin_a_text', 'nooshin_a_text_shortcode' );
