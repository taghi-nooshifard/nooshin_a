<div class="container">
    <?php
    $data_wow_offset = 40;

    $args_top_posts = array("meta_key"=>"nooshin_checkbox_top_post",
                            "meta_value"=>"yes",
                            "posts_per_page"=>"2");
    $top_posts = new WP_Query($args_top_posts);
    if($top_posts->have_posts()):
        while ($top_posts->have_posts()):
            $top_posts->the_post();
            if($data_wow_offset==40):
    ?>
    <div class="row  wow fadeInDown"  data-wow-offset="<?php echo $data_wow_offset;?>" data-wow-delay="200ms">
        <div class="col-12 justify-content-center">
            <div class="card col-md-12 px-md-3 py-3">
                <div class="row ">
                    <div class="col-md-4   ">
                        <?php echo get_the_post_thumbnail( get_the_ID(), 'thumbnail', array( 'class' => 'w-100' ) ); ?>

                    </div>
                    <div class="col-md-8 pr-md-3 pl-1 mt-2">
                        <div class="card-block">
                            <h6 class="card-title"><?php echo the_title(); ?></h6>
                            <p class="card-text  font-weight-light "><?php echo the_excerpt(); ?></p>
                            <a href="<?php echo get_the_permalink(); ?>" class="text-white btn btn-info">بیشتربخوانید...</a>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>

    <?php

            else:
                ?>
                <div class="row wow fadeInDown"  data-wow-offset="80" data-wow-delay="200ms">
                    <div class="col-12 justify-content-center">
                        <div class="card col-md-12 px-md-3 py-3">
                            <div class="row ">
                                <div class="col-md-8 pl-3 pr-1">
                                    <div class="card-block">
                                        <h6 class="card-title"><?php echo the_title(); ?></h6>
                                        <p class="card-text mr-5  font-weight-light ">
                                            <?php echo the_excerpt(); ?>
                                        </p>
                                        <a href="<?php echo the_permalink(); ?>" class="text-white btn btn-info">بیشتربخوانید...</a>
                                    </div>
                                </div>
                                <div class="col-md-4 mt-2 pr-md-4">
                                    <?php echo get_the_post_thumbnail(get_the_ID(), 'thumbnail', array( 'class' => 'w-100' ) ); ?>
                                </div>

                            </div>
                        </div>


                    </div>
                </div>
                <?php
            endif;
            $data_wow_offset+=40;
    endwhile;
    endif; ?>
</div>

<!--<div class="row wow fadeInDown"  data-wow-offset="80" data-wow-delay="200ms">-->
<!--    <div class="col-12 justify-content-center">-->
<!--        <div class="card col-md-12 px-md-3 py-3">-->
<!--            <div class="row ">-->
<!--                <div class="col-md-8 pl-3 pr-1">-->
<!--                    <div class="card-block">-->
<!--                        <h6 class="card-title">پرندگان مهاجر</h6>-->
<!--                        <p class="card-text mr-5  font-weight-light ">پرندگان مهره داران خونگرمی هستند که بال، پر و یک منقار دارند، دندان ندارند، اسکلتی دارند که در آن استخوان های زیادی با هم ترکیب شده و نیز استخوان های زیادی در آن غایب هستند، و یک کارایی بی نهایت زیادشان، سیستم تنفسشان است. پرندگانی که پرواز می کنند استخوان های قوی، پوک و ماهیچه های پرواز قدرتمند دارند.-->
<!---->
<!---->
<!--                            بیشتر پرندگان می توانند پرواز کنند. پرندگان یک قلب بسیار قوی و یک راه مؤثر تنفس دارند- اینها برای این که پرندگان پرواز کنند لازم هستند. همچنین پرندگان موقعی که پرواز می کنند انرژی فوق العاده زیادی را مصرف می کنند و بنابراین نیاز دارند تا مقدار بسیار زیادی غذا بخورند تا قدرت پرواز داشته باشند.</p>-->
<!--                        <a href="https://www.google.com" class="text-white btn btn-info">بیشتربخوانید...</a>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-md-4 mt-2 pr-md-4">-->
<!--                    <img class="w-100" src="--><?php //echo get_stylesheet_directory_uri(); ?><!--/images/350x350_1.jpg">-->
<!--                </div>-->
<!---->
<!--            </div>-->
<!--        </div>-->
<!---->
<!---->
<!--    </div>-->
<!--</div>-->