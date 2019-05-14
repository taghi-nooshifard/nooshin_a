<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo('title'); ?></title>

    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.ico" type="image/x-icon">
    <!--Style Links-->
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/libs/bootstrap-reboot.css" type="text/css" rel="stylesheet"/>
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/libs/bootstrap.css" type="text/css" rel="stylesheet"/>
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/libs/bootstrap.rtl.css" type="text/css" rel="stylesheet"/>
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/libs/fontawesome-free-5.5.0-web/css/all.min.css" type="text/css" rel="stylesheet"/>
        <link href="<?php echo get_stylesheet_uri(); ?>" type="text/css" rel="stylesheet"/>

    <!--JavaScript Link-->
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/libs/jquery.min.js" type="text/javascript"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/libs/bootstrap.js" type="text/javascript"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/libs/fontawesome-free-5.5.0-web/js/all.min.js" type="application/javascript"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/libs/scrolltopcontrol.js" type="text/javascript"></script>

    <!-- WOW : http://mynameismatthieu.com/WOW/docs.html-->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/libs/wow/css/libs/animate.css" type="text/css">
    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/libs/wow/dist/wow.min.js"></script>
    <script>new WOW().init();</script>
    <?php wp_head(); ?>
</head>
<body class="rtl bg-white ">

<!--Start  Header-->
<header id="page-header">
    <!--Top Header-->
    <div id="top-header" class="container-fluid bg-white  mb-1 d-none d-md-block wow fadeInUp" data-wow-iteration="1" data-wow-delay="200ms">
        <div class="row">
            <div class="col-12">
                <div class="container">
                    <div class="row">
                        <div  class="col-12 d-none d-md-block mt-md-2 ">

                            <div id="social-header" class="col-12 col-md-4 ml-0 float-md-right  d-none d-md-block ">
                                <ul class="pl-0">
                                     <?php
                                          if(is_active_sidebar('nooshin_a_header-row1-col1')){
                                              dynamic_sidebar('nooshin_a_header-row1-col1');
                                          }
                                          else{

                                          ?>
                                    <li class="mr-2"><a data-toggle="tooltip" title="info@nooshin.com" href="#"><i class="fa fa-envelope"></i> </a> </li>
                                    <li class="mr-2 wow shake"  data-wow-iteration="2" data-wow-duration="2s"><a data-toggle="tooltip" title="09120216334" href="#"><i class="fa fa-phone"></i> </a> </li>
                                    <li class="mr-2"><a data-toggle="tooltip" title="faceboook" href="#"><i class="fab fa-facebook"></i> </a> </li>
                                    <li class="mr-2"><a data-toggle="tooltip" title="instagram" href="#"><i class=" fab fa-instagram"></i> </a> </li>
                                    <li class="mr-2"><a href="#" data-toggle="tooltip" title="twitter"><i class="fab fa-twitter"></i> </a> </li>
                                    <li class="mr-2"><a href="#" data-toggle="tooltip" title="google+"><i class="fab fa-google-plus"></i> </a> </li>
                                    <li class="mr-2"><a href="#" data-toggle="tooltip" title="telegram"><i class="fab fa-telegram"></i> </a> </li>
                                       <?php
                                          }
                                        ?>
                                </ul>
                            </div>
                            <div id="phone-header" class="col-12 col-md-8 pl-0 ml-0 float-sm-left text-center text-md-left">
                                <ul>
                                     <?php
                                          if(is_active_sidebar('nooshin_a_header-row1-col2')){
                                              dynamic_sidebar('nooshin_a_header-row1-col2');
                                          }
                                          else{

                                          ?>
                                    <li class="d-inline-block mr-md-2 "> <a data-toggle="tooltip" title="با ما تماس بگیرید..." class="btn-outline-light   text-black-50 p-1 rounded " href="#">تم وردپرسی***** نوشین-A  <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo_64_64e.png" class="mb-1  wow flip"  data-wow-iteration="2000" data-wow-duration="5s" width="64px" height="64px" /></a> </li>
                                              <?php
                                          }
                                     ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Top Header End-->


    <!--Menu Section-->
    <div class="container  wow fadeInUp" data-wow-iteration="1" data-wow-delay="200ms">
        <div class="row">
            <div class="col-12 justify-content-center mt-1 mt-md-4">
                <!--Slider Section-->
                <div id="slider" class="col-md-10 px-0 bg-white float-md-left mt-1 d-none d-md-block   ">
                    <div id="demo" class="carousel slide custom-carousel" data-ride="carousel">

                        <!-- Indicators -->
                        <ul class="carousel-indicators ">
                            <?php
                            $registered_widgets = wp_get_sidebars_widgets();
                            $slider_counter = count($registered_widgets["nooshin_a_header-row2-col2"]);
                            for($i =0;$i<$slider_counter;$i++){
                                if($i==0){
                                    ?>
                                    <li data-target="#demo" data-slide-to="0" class="active"></li>
                                    <?php
                                }
                                else{

                                    echo "<li data-target=\"#demo\" data-slide-to=\"{$i}\"></li>";

                                }

                            }
                            ?>



                        </ul>

                        <!-- The slideshow -->

                        <?php
                        if(is_active_sidebar('nooshin_a_header-row2-col2')){
                            dynamic_sidebar('nooshin_a_header-row2-col2');
                        }
                        else {
                            ?>
                            <div class="carousel-inner col-12 ">
                                <div class="carousel-item   active">
                                    <a href="#"><img class="w-100" src="<?php echo get_stylesheet_directory_uri(); ?>/images/slide16.jpg" alt="Los Angeles">
                                        <span class="btn-dark rounded p-1 custom-carousel-item-text"> فناوری در خدمت محیط زیست...</span></a>

                                </div>
                                <div class="carousel-item ">
                                    <img class="w-100" src="<?php echo get_stylesheet_directory_uri(); ?>/images/slide15.jpg" alt="Chicago">
                                    <span class="btn-dark rounded p-1 custom-carousel-item-text">تلاش برای حفظ گونه های حیات..</span>

                                </div>
                                <div class="carousel-item">
                                    <img class="w-100" src="<?php echo get_stylesheet_directory_uri(); ?>/images/slide19.png" alt="New York">
                                    <span class="btn-dark rounded p-1 custom-carousel-item-text"> حفظ محیط زیست برای آیندگان...</span>

                                </div>
                            </div>    <?php
                        }
                        ?>


                        <!-- Left and right controls -->
                        <a class="carousel-control-prev" href="#demo" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>

                        </a>
                        <a class="carousel-control-next" href="#demo" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                            <!--Show Hide Menu Buttom-->
                            <div class="show-hide-menu">
                                <a  href="#" class="bg-info rounded p-2 text-white show-hide-btn" >
                                    <i id="custom-arrow" class=" fa fa-arrow-right "></i>
                                </a>
                            </div>
                        </a>

                    </div>
                </div>
                <!--Menu Desktop-->
                <div id="menu" class="bg-info nav-side-menu col-12 col-md-2  float-md-right mt-1 pr-0 pl-0 d-none d-md-block  wow fadeInUp" data-wow-iteration="1" data-wow-delay="200ms">
                <?php

                    echo do_shortcode("[get_menu  menu=\"Main Menu\" [/get_menu]");

                ?>
<!--                    <ul class="dropdown bg-info py-0 " role="menu" aria-labelledby="dropdownMenu">-->
<!--                        <li ><a class="dropdown-item  " href="#"><i class="fa fa-home mr-2 mt-2"></i>خانه</a></li>-->
<!--                        <li class="dropdown-divider"></li>-->
<!--                        <li><a class="dropdown-item" href="#"><i class="fa fa-list mr-2 mt-2"></i>گالری</a></li>-->
<!--                        <li class="dropdown-divider"></li>-->
<!--                        <li class="dropdown-submenu">-->
<!--                            <a class="dropdown-item" tabindex="-1" href="#">-->
<!--                                <i class="fa fa-archive mr-2 mt-2"></i>-->
<!--                                مقالات-->
<!--                                <i class="fa fa-caret-left ml-2 mt-2"></i>-->
<!--                            </a>-->
<!--                            <ul class="dropdown-menu bg-info">-->
<!--                                <li><a class="dropdown-item" tabindex="-1" href="#">مقاله1</a></li>-->
<!--                                <li class="dropdown-submenu">-->
<!--                                    <a class="dropdown-item" href="#">-->
<!--                                        مقاله2-->
<!--                                        <i class="fa fa-caret-left ml-2 mt-2"></i>-->
<!--                                    </a>-->
<!--                                    <ul class="dropdown-menu  bg-info">-->
<!--                                        <li><a class="dropdown-item" href="#">3rd level</a></li>-->
<!--                                        <li><a class="dropdown-item" href="#">3rd level</a></li>-->
<!--                                    </ul>-->
<!--                                </li>-->
<!--                                <li><a class="dropdown-item" href="#">مقاله1 2</a></li>-->
<!--                                <li><a class="dropdown-item" href="#">مقاله12</a></li>-->
<!--                            </ul>-->
<!--                        </li>-->
<!--                        <li class="dropdown-divider"></li>-->
<!--                        <li><a class="dropdown-item" href="#"><i class="fa fa-archway mr-2 mt-2"></i>درباره ما</a></li>-->
<!--                        <li class="dropdown-divider"></li>-->
<!--                        <li><a class="dropdown-item" href="#"><i class="fa fa-fax mr-2 mt-2"></i>تماس با ما</a></li>-->
<!--                        <li class="dropdown-divider"></li>-->
<!--                    </ul>-->
                </div>
                <!--Menu Mobile-->
                <div id="MainMenu" class="d-block d-md-none " >
                    <div class="list-group panel  col-12">


                        <a href="#demo3" class="list-group-item  strong  bg-white mr-0 border-0 px-0 py-0" ><img class="rounded w-100" src="<?php echo NOOSHIN_A_URI; ?>/images/logo_nooshin.png"></a>

                        <a href="#demo3" class="list-group-item  strong" ><i class="fa  fa-home mr-2"></i>خانه </a>

                        <a href="#demo4" class="list-group-item  strong"> <i class="fa  fa-list mr-2"></i>گالری</a>
                        <a href="#demo3" class="list-group-item  strong" data-toggle="collapse" data-parent="#MainMenu"><i class="fa  fa-archive mr-2"></i>مقالات<i class="fa fa-caret-down  ml-2"></i> </a>
                        <div class="collapse" id="demo3">
                            <a href="#SubMenu1" class="list-group-item " data-toggle="collapse" data-parent="#SubMenu1">Subitem 1 <i class="fa fa-caret-down"></i></a>
                            <div class="collapse list-group-submenu" id="SubMenu1">
                                <a href="#" class="list-group-item" data-parent="#SubMenu1">Subitem 1 a</a>
                                <a href="#" class="list-group-item" data-parent="#SubMenu1">Subitem 2 b</a>
                                <a href="#SubSubMenu1" class="list-group-item strong" data-toggle="collapse" data-parent="#SubSubMenu1"><i class="glyphicon glyphicon-user"></i> Subitem 3 c <i class="fa fa-caret-down"></i></a>
                                <div class="collapse list-group-submenu list-group-submenu-1" id="SubSubMenu1">
                                    <a href="#" class="list-group-item" data-parent="#SubSubMenu1">Sub sub item 1</a>
                                    <a href="#" class="list-group-item" data-parent="#SubSubMenu1">Sub sub item 2</a>
                                </div>
                                <a href="#" class="list-group-item" data-parent="#SubMenu1">Subitem 4 d</a>
                                <a href="#SubSubMenu3" class="list-group-item strong" data-toggle="collapse" data-parent="#SubSubMenu3"><i class="glyphicon glyphicon-dashboard"></i> Subitem 5 e <i class="fa fa-caret-down"></i></a>
                                <div class="collapse list-group-submenu list-group-submenu-1" id="SubSubMenu3">
                                    <a href="#" class="list-group-item" data-parent="#SubSubMenu3">Sub sub item 5.1</a>
                                    <a href="#" class="list-group-item" data-parent="#SubSubMenu3">Sub sub item 5.2</a>
                                </div>
                            </div>
                            <a href="#" class="list-group-item">Subitem 2</a>
                            <a href="#" class="list-group-item">Subitem 3</a>
                        </div>
                        <a href="#demo4" class="list-group-item  strong" data-toggle="collapse" data-parent="#MainMenu"> <i class="fa  fa-archway mr-2"></i>درباره ما</a>
                        <a href="#demo4" class="list-group-item  strong" data-toggle="collapse" data-parent="#MainMenu"> <i class="fa  fa-fax mr-2"></i>تماس با ما</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Menu Section End-->

</header>
<!--End  Header-->


<?php get_search_form(); ?>