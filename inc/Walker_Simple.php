<?php
/**
 * Created by PhpStorm.
 * User: phpDev
 * Date: 3/12/2019
 * Time: 12:31 PM
 */

//class Walker_Simple extends Walker {
class Walker_Simple extends Walker_Nav_Menu {

    // Set the properties of the element which give the ID of the current item and its parent

    // Displays start of a level. E.g '<ul>'
    // @see Walker::start_lvl()

    function start_lvl(&$output, $depth=0, $args=array()) {
        $classes = "class='dropdown-menu bg-info'";
        $output .= "<ul   ".$classes."  >\n";

    }

    // Displays end of a level. E.g '</ul>'
    // @see Walker::end_lvl()
    function end_lvl(&$output, $depth=0, $args=array()) {
        $output .= "</ul>\n";


    }

    // Displays start of an element. E.g '<li> Item Name'
    // @see Walker::start_el()
    function start_el(&$output, $item, $depth=0, $args=array(),$current_object_id=0) {
        $sub_menu_class = "";
        $felesh = "";

        if(in_array('menu-item-has-children',$item->classes)){
            $sub_menu_class = "class=\" dropdown-submenu \"";
            $felesh = "<i class=\"fa fa-caret-left ml-2 mt-2\"></i>";

        }


        $icon = $item->_mycustom_field_2;
        $data_icon = explode(" ",$icon);

        // append icon
        if( $icon ) {

            $item->title = '<i class="fa '.$data_icon[1].'"></i>'.' '.$item->title;

        }

        $output.= "<li ".$sub_menu_class." > <a class=\"dropdown-item\" href=\"$item->url\"> ".$item->title.$felesh.'</a>';


    }

    // Displays end of an element. E.g '</li>'
    // @see Walker::end_el()
    function end_el(&$output, $item, $depth=0, $args=array()) {
        if($depth==0)
            $output .= "<li class=\"dropdown-divider\"></li></li>\n";
        else{
            $output .= "</li>\n";

        }


    }
}
