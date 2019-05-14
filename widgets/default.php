<?php

//Nooshin_a  Theme Default Values
class Nooshin_a_Defaults{
    function get_widgets_default_html_css(){
        $args = array(
            "before_widget"=>"",
            "before_title"=>"<h5 class=\"headin5_amrc col_white_amrc pt2 btn-info p-1 rounded \">",
            "after_title"=>"</h5><ul class=\"footer_ul_amrc\">",
            "after_widget"=>"</ul>",
        );
        return $args;
    }
}

//Global Nooshin_a_Defaults Class object
$nooshin_a_theme_default = new Nooshin_a_Defaults();
