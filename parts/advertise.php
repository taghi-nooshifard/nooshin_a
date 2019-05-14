<section>
    <div class="container">
        <div class="row wow fadeInRight"  data-wow-offset="120" data-wow-delay="200ms">
            <div class="col-12 mt-4 mr-0 p-0 ">
                <ul id="advertise1" class="col-12 m-0  px-0  justify-content-center">

                    <?php
                    if(is_active_sidebar('nooshin_a_advertise_widget')){
                        dynamic_sidebar('nooshin_a_advertise_widget');
                    }

                    ?>

                    <!--
                    <li class="d-inline-block col-md-12 ">
                        <a href="#">
                            <div class="advertise  mb-3 m-md-1 jumbotron bg-info rounded justify-content-center text-white text-center" style=" max-height:400px;height:400px; background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/slide20.jpg);background-repeat: no-repeat;background-size: cover">
                            </div>
                        </a>
                    </li>
                    <li class="d-inline-block col-md-3 ">
                        <a href="#">
                            <div class="advertise  mb-3 m-md-1 jumbotron bg-info rounded justify-content-center text-white text-center" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/slide20.jpg);background-repeat: no-repeat;background-size: cover">
                            </div>
                        </a>
                    </li>
                    <li class="d-inline-block col-md-12 ">
                        <a href="#">
                            <div class="advertise  mb-3 m-md-1 jumbotron bg-info rounded justify-content-center text-white text-center" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/slide20.jpg);background-repeat: no-repeat;background-size: cover">
                            </div>
                        </a>
                    </li>
                    <li class="d-inline-block col-md-3 ">
                        <a href="#">
                            <div class="advertise  mb-3 m-md-1 jumbotron bg-info rounded justify-content-center text-white text-center" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/slide20.jpg);background-repeat: no-repeat;background-size: cover">
                            </div>
                        </a>
                    </li>
                    -->
                </ul>
            </div>

        </div>
    </div>
</section>