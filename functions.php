<?php
define("NOOSHIN_A_DIR",get_stylesheet_directory());
define("NOOSHIN_A_INC","/inc/");
define("NOOSHIN_A_LIB","/libs/");
define("NOOSHIN_A_IMAGES","/images/");
define("NOOSHIN_A_WIDGETS","/widgets/");
define("NOOSHIN_A_PARTS","/parts/");
define("NOOSHIN_A_ADMIN","/admin/");
define("NOOSHIN_A_FRONT","/front/");
define("NOOSHIN_A_URI",get_stylesheet_directory_uri());


include_once NOOSHIN_A_DIR.NOOSHIN_A_INC."wp-menu-item-custom-fields-master/Menu.php";
include_once NOOSHIN_A_DIR.NOOSHIN_A_WIDGETS.'default.php';
include_once NOOSHIN_A_DIR.NOOSHIN_A_WIDGETS.'RegisterSidebar.php';
include_once NOOSHIN_A_DIR.NOOSHIN_A_WIDGETS.'Widgets.php';
include_once NOOSHIN_A_DIR.NOOSHIN_A_INC.'menu.php';
include_once NOOSHIN_A_DIR.NOOSHIN_A_INC.'shortcode.php';
include_once NOOSHIN_A_DIR.NOOSHIN_A_ADMIN.'style.php';
include_once NOOSHIN_A_DIR.NOOSHIN_A_ADMIN.'functions.php';
include_once NOOSHIN_A_DIR.NOOSHIN_A_FRONT.'functions.php';

?>